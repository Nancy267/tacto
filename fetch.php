<?php
$connect = mysqli_connect('208.91.198.197:3306', 'common', 'Common@007', 'knv');
$output = '';
if (isset($_POST["query"]) && isset($_POST["query1"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $search1 = mysqli_real_escape_string($connect, $_POST["query1"]);
    $query = "
  SELECT * FROM hotels
  WHERE hotelname LIKE '%" . $_POST["query1"] . "%' AND city LIKE '%" . $search . "%'";
    $msg = "<h2>Search results by hotelname</h2>";
  } elseif (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM hotels
  WHERE city LIKE '%" . $search . "%'";
    $msg = "<h2>Search results by city</h2>";
  }
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
   <center>' . $msg . '</center>
    <tr>
     <th>Hotel Name</th>
     <th>Phone Number</th>
     <th>Address</th>
    </tr>
 ';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
   <tr>
    <td>' . $row["hotelname"] . '</td>
    <td>' . $row["pno"] . '</td>
    <td>' . $row["address"] . '</td>
   </tr>
  ';
      }
    echo $output;
  } else {
    echo 'Data Not Found';
    echo "<center><a href='add_res.php'><button class='bot'>Click to Add Restaurants</button></a></center>";
  }
 