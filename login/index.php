<?php
function sanitixe($data){
	$changedvalue = [];
foreach ($data as $key => $value) {
	$data = trim($value);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
	$changedvalue[$key] = $data;
}
return $changedvalue;
}
function validate($data){
	$error = [];
	$insert = [];
	foreach ($data as $key => $value) {
	switch ($key) {
		case 'email':
			if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
				$error["email"] = "Email is not valid";
			}
			$insert[$key] = $value;
			break;
		case 'password':
			if(empty($value)){
			$error["password"] = "password is empty";	
			}
			break;
	}
}
	return [$insert,$error];
}
function registercheck($data){
$conn = new mysqli("208.91.198.197:3306", "BalajiNandha", "@Itengineer007", "farmingarms");
$active = 1;
	$stmt = $conn->prepare("SELECT name,password FROM myshop WHERE email= ?  AND active= ?");
	$stmt->bind_param('si', $data['email'],  $active);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	if(empty($row))
		{
		echo "Invalid user";
		}
		else
		{
			if(password_verify($data["password"], $row["password"])){
				session_start();
				$_SESSION['start'] = time();
				$_SESSION["email"] = $data["email"];
				$_SESSION["name"] = $row["name"];
				$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
				header("Location:dashboard.php");
			}
			else{
				$error["password"] = "password does not match";
			}
		}
	}
if(isset($_POST['submit'])){
	$data = sanitixe($_POST);
	$data1 = validate($data);
	$crct = $data1[0];
	$error = $data1[1];
	if(empty($error)){
		registercheck($data);
	}
}
?>	
<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
.error{
color:red !important;
}
</style>
	</head>
	<body>
		<br/>
		<div class="container" style="width:100%;margin-top:100px; max-width:600px">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Login</h4></div>
				<div class="panel-body">
					<form  method="post" action="index.php" novalidate autocomplete="off">
						<div class='text-success'><?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?></div>
						<div class="form-group">
							<label for="email">Email</label>
								<input type="text" class="form-control"  id="email" name="email" value="<?php if(isset($crct["email"])){ echo $crct["email"]; }?> ">
							<div class="error"><?php if(isset($error["email"])){   echo $error["email"]; }?></div>
						</div>
						<div class="form-group">
							<label for="password">password</label>
						<input type="password" class="form-control" id="password" name="password">			
							<div class="error"><?php if(isset($error["password"])){   echo $error["password"]; }?></div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Login" class="btn btn-info" />
						</div>
					</form>
					<p align="right"><a href="register.php">Register</a></p>
				</div>
			</div>
		</div>
	</body>
</html>