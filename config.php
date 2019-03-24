<?php
$con = mysqli_connect('208.91.198.197:3306', 'common', 'Common@007','knv');
if ($con->connect_error) {
die("Database Connection failed: " . $con->connect_error);
}
?>