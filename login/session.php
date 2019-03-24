<?php 
session_start();
$now = time();
if((!isset($_SESSION['name'])) && (!isset($_SESSION['email'])))
{  
    header("Location:index.php");
}     
elseif($now > $_SESSION['expire']) {
            session_destroy();
            header("Location:index.php?msg=Timeout");
}
else
{
    $conn = new mysqli("208.91.198.197:3306", "BalajiNandha", "@Itengineer007", "farmingarms");
    $name= $_SESSION['name'];
    $email= $_SESSION['email'];
    if($result = $conn->prepare("select * from myshop where email=?"))
    {
        $result->bind_param('s', $email);
        $result->execute();
        $result = $result->get_result();
        $row = $result->fetch_assoc();
        if(($_SESSION["name"]!=$row["name"]) || ($_SESSION["email"]!=$row["email"])){
            header("Location:index.php");
        }
    }
    else
    {
        header("Location:index.php");
    }
}
?>
