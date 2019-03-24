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
		case "name":
			if(preg_match("/^[0-9a-zA-Z_]{5,}$/", $value) === 0){
				$error["name"] = "Enter correct name";
				$insert[$key] = $value;
			}
			break;
		case 'password':
		if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $value) === 0){
			$error["password"] = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";		

		}
			break;
		case 'email':
			if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
				$error["email"] = "Email is not valid";
			}
			$insert[$key] = $value;
			break;
	}
}
	return [$insert,$error];
}
function duplicate($data){
try {
    $connection = new PDO("mysql:host=208.91.198.197:3306;dbname=farmingarms", "BalajiNandha","@Itengineer007");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    die("Connection failed" . $e->getMessage());
    }
$query='SELECT email FROM myshop WHERE email= :email';
$stmt = $connection->prepare($query);
$stmt ->bindparam(":email", $data);
$stmt->execute();
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
if(empty($result)){
	return true;
}
else{
	return false;
}
}
function register($data){
    $conn = new mysqli("208.91.198.197:3306", "BalajiNandha", "@Itengineer007", "farmingarms");
	$connection=$conn->prepare("INSERT INTO myshop (name,email,password,hash_key,active) VALUES(?,?,?,?,?)");
	$connection->bind_param("sssss",$data["name"],$data["email"],$data["password"],$data["hash_key"],$data["active"]);
    $connection->execute();
   	$id = mysqli_insert_id($conn);
   	$connection->close();
   	$activatelink = [
   	"email" => $data["email"],
   	"hash_key" => $data["hash_key"],
   	"id" => $id
   	];
   	activate($activatelink);
}
function activate($data){
$to = $data["email"];
$subject="subject";
$actual_link="http://www.farmingarms.com/log/activate.php?id=".$data["id"]."&hash_key=".$data["hash_key"]."&email=".$data["email"];
$message = "Please activate your account <a href='".$actual_link."'> click here</a>";
$headers .="Content_type: text/html; charset=ISO-8859-1\r\n";
  $headers = 'From: balajirajendran@farmingarms.com' . "\r\n" .
    'Reply-To: balajirajendran@farmingarms.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)){
    	echo "<h3><center><div class='text-success'>Please check your email for activation</div></center></h3>";
}
}
if(isset($_POST["submit"])){
	$change = sanitixe($_POST);
	$error1 = validate($change);
	$error = $error1[1];
	$crct = $error1[0];
	if(empty($error)){
	$check = duplicate($change["email"]);
	if(!empty($check)){
	 $options = ['cost' => 12];
	 $change["password"] = password_hash($change["password"], PASSWORD_DEFAULT, $options);
	 $change["hash_key"] = sha1(mt_rand(10000,99999).time().$change["email"]);
	 $change["active"]  = 0;
	 register($change);
	}
	else{
		$error["email"] = "Try another email id";
	}
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>		
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
		<div class="container" style="width:100%; margin-top:100px;max-width:600px">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Login</h4></div>
				<div class="panel-body">
					<form  method="post" action="register.php" novalidate autocomplete="off">
						<div class='text-success'><?php if(isset($error["send"])){   echo $error["send"]; } ?></div>
						<div class="form-group">
							<label for="name">Username</label>
							<input type="text" class="form-control"   id="name" name="name" value="<?php if(isset($crct["name"])){ echo $crct["name"]; } ?>">
							<div class="error"><?php if(isset($error["name"])){   echo $error["name"]; }?></div>
						</div>			
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
				</div>
			</div>
		</div>
	</body>
</html>