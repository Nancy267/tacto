<!-- activate.php -->
<?php
if(isset($_GET['id']) && isset($_GET['email']) && isset($_GET['hash_key'])){
	$email=$_GET['email'];
	$hash_key=$_GET['hash_key'];
	$id=$_GET['id'];
	$active = 1;
	$conn = new mysqli("208.91.198.197:3306", "BalajiNandha", "@Itengineer007", "farmingarms");
	$stmt = $conn->prepare("SELECT active FROM myshop WHERE id= ?  AND hash_key= ?");
	$stmt->bind_param('is', $id,  $hash_key);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	if($row["active"] == 0){
		$stmt = $conn->prepare("UPDATE myshop SET active = ? WHERE id = ?");
		$stmt->bind_param('ii', $active, $id);
		if($stmt->execute()){
			header("Location:http://www.farmingarms.com/log/index.php?msg=Your Acount has been activated");
		}
		else{
							header("Location:http://www.farmingarms.com/log/index.php?msg=Your Acount has been Already activated");
		}
	}
   	$stmt->close();

}
else{
			header("Location:http://www.farmingarms.com/log/index.php?msg=Registration Not Found");
}
?>