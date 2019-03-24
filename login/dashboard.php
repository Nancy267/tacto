<!-- dashboard.php -->
<?php 
require("session.php");
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>		
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<style type="text/css">
.error{
color:red !important;
}
</style>
	</head>
	<body>		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">Welcome <?php echo $_SESSION["name"] ; ?></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarColor02">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Online orders</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Review Given</a>
			      </li>
			  </ul>
			  <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="logout.php">Logout</a>
			      </li>
			    </ul>
			  </div>
			</nav>
			<h2>------Work underconstruction---</h2>
		</div>
	</div>
	</body>
</html>