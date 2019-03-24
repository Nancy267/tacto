<?php 
if(isset($_POST["country_id"])){
    //Get all state data
  include('config.php');
  $country_id= $_POST['country_id'];
    $query = "SELECT * FROM states WHERE country_id = '$country_id' 
  ORDER BY state_name ASC";
  $run_query = mysqli_query($con, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0){
        echo '<option value="">Select state</option>';
        while($row = mysqli_fetch_array($run_query)){
    $state_id=$row['state_id'];
    $state_name=$row['state_name'];
        echo "<option value='$state_id'>$state_name</option>";
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"])){
  include('config.php');
  $state_id= $_POST['state_id'];
    //Get all city data
    $query = "SELECT * FROM cities WHERE state_id = '$state_id' 
  ORDER BY city_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select city</option>';
        while($row = mysqli_fetch_array($run_query)){
    $city_id=$row['city_id'];
    $city_name=$row['city_name']; 
        echo "<option value='$city_name'>$city_name</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
$conn = new mysqli("208.91.198.197:3306", "common", "Common@007", "knv");
  // Check connection
  if ($conn->connect_error) 
  {
      die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST["feed"])){
if($_POST['name'] =="" or $_POST['email']=="" or $_POST['pno'] =="" or $_POST['msg']=="" )
{
    header("Location:http://farmingarms.com/task/index.php?msgp=All Field Required");
}
else{
   if(!preg_match('/^[7-9]{1}[0-9]{9}$/', $_POST['pno']))
    {
     header("Location:http://farmingarms.com/task/index.php?msgp=Invalid Mobile Number!");
    }
        elseif(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/', $_POST['email']))
    {
       header("Location:http://farmingarms.com/task/index.php?msgp=Invalid Email ID!");
    }
    
elseif ($data=$conn->prepare("INSERT INTO feedback1 (name,email,pno,msg,time) VALUES(?,?,?,?,?)"))
     {
                $timezone = "Asia/Kolkata";
        date_default_timezone_set($timezone);
        $time = date('d/m/Y h:i:s', time());
             $data->bind_param("sssss", $_POST['name'], $_POST['email'], $_POST['pno'], $_POST['msg'],$time);
             $data->execute();
       $data->close();       
       header("Location:http://farmingarms.com/task/index.php?msg=Feedback Submitted Sucessfully!");
   }
    else{
      header("Location:http://farmingarms.com/task/index.php?msg=Operation !");
    }
    }
}
if(isset($_POST["add"])){
$res=0;
if($_POST['hotelname'] =="" or $_POST['address']=="" or $_POST['pno'] =="" or $_POST['star']=="" or $_POST['average_cost'] =="" or $_POST['city']=="" or $_POST['time']=="" )
{
    header("Location:http://farmingarms.com/task/add_res.php?msg=All Field Required");
}

else{
  $target_dir = "img/hotel_image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
$res=1;
}
if($res==1){
if((!preg_match('/^[7-9]{1}[0-9]{9}$/', $_POST['pno']))) {
    header("Location:http://farmingarms.com/task/add_res.php?msg=Invalid Phone Number");
}
elseif (file_exists($target_file)) {
    header("Location:http://farmingarms.com/task/add_res.php?msg=Sorry, file already exists");
}
elseif ($_FILES["fileToUpload"]["size"] > 500000) {
 header("Location:http://farmingarms.com/task/add_res.php?msg=Sorry, your file is too large");
}
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    header("Location:http://farmingarms.com/task/add_res.php?msg=Sorry, only JPG, JPEG, PNG & GIF files are allowed");
}
else{
  $file_name = $_FILES['fileToUpload']['name'];
$connection=$conn->prepare("INSERT INTO hotels (hotelname,address,pno,star,average,city,picture,time) VALUES(?,?,?,?,?,?,?,?)");
$connection->bind_param("ssssssss",$_POST['hotelname'], $_POST['address'], $_POST['pno'], $_POST['star'], $_POST['average_cost'],$_POST['city'],$file_name,$_POST['time']);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
 $connection->execute();
   $connection->close();
   header("Location:http://farmingarms.com/task/add_res.php?msg=Restaurant has been Added Sucessfully");
    }
   }  
}
if(isset($_POST["reviewb"])){
if(isset($_POST["review"])){
$hotelname = $_POST['hotelname'];
$city = $_POST['city'];
$review = $_POST['review'];     
$name = $_POST['name'];     
$timezone = "Asia/Kolkata";
date_default_timezone_set($timezone);
$time = date('h:i:s', time());
$dat = date('d/m/Y', time());
$connection=$conn->prepare("INSERT INTO review2 (name, time, dat, hotelname,city,review) VALUES(?,?,?,?,?,?)");
$connection->bind_param("ssssss",$name, $time, $dat, $hotelname, $city, $review); 
$connection->execute();
$connection->close(); 
//echo "Thank for your review";
header("Location:http://farmingarms.com/task/review.php?city=".$city."&hname=".$hotelname."&msg1=Thank for your review");
}
else{
header("Location:http://farmingarms.com/task/review.php?city=".$city."&hname=".$hotelname."&msg1=All Field Required");
//echo "All Field Required";

}
}
    ?>