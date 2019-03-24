<?php
$conn = new mysqli("208.91.198.197:3306", "common", "Common@007", "knv");
if (isset($_GET['city']) && isset($_GET['hname'])) {
  $city = $_GET['city'];
  $hname = $_GET['hname'];
  //$stmt = $conn->prepare("SELECT * FROM hotels WHERE city = ? AND hotelname = ?");
  //$stmt->bind_param('ss', $city, $hname);
  //  $stmt->execute();
  //$result = $stmt->get_result();
  //$row = $result->fetch_assoc();
  $query = "SELECT * FROM hotels WHERE city = '$city' AND hotelname = '$hname'";
  if ($result = $conn->query($query)) {
    $row = $result->fetch_assoc();
  } else {
    $row = null;
  }
  ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tacto</title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Balaji R || 9894476083">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- main sheet -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <!-- animate library -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- slide -->
    <script src="js/jssor.slider-26.8.0.min.js" type="text/javascript"></script>
    <!-- end slide -->
</head>

<body oncontextmenu="return false">
    <div class="animationload">
        <div class="loader">
            Loading...
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d44651;font-size: 20px !important;">
        <a class="navbar-brand" href="index.php" style="font-size: 30px !important;">Tacto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="add_res.php">Add Restaurant</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login/register.php">Sign-Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login/index.php">Log-In </a>
                </li>
            </ul>
        </div>
    </nav>
    <?php 
    if (empty($row)) {
      echo "<div class='show'>";
      ?>
    <div class="g-bg-color--sky-light">
        <div class="container">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".6s">
                <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs ">Result</h2>
            </div>
            <center>
                <h2>---- sorrry no results found ---</h2>
            </center>
            <center><a href="add_res.php"><button class="bot">Click to Add Restaurants</button></a></center>
        </div>
    </div>
    <?php echo "</div>";
  } ?>
    <?php 
    if (!empty($row)) {
      echo "<div class='show'>";
      ?>
    <div class="g-bg-color--sky-light">
        <div class="container">
            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".6s">
                <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs ">Result</h2>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".6s">
                        <?php 
                        echo  "City: <p class='g-font-size-32--xs g-font-size-20--md' style='color:green;'>" . $row['city'] . "</p>";
                        echo  "Rating <p class='g-font-size-32--xs g-font-size-20--md' style='color:green;'>" . $row['star'] . "</p>";
                        echo  "Address <p class='g-font-size-32--xs g-font-size-20--md' style='color:green;'>" . $row['address'] . "</p>";
                        echo "Phone number : <h2 class='g-font-size-32--xs g-font-size-36--md' style='color:red;'>" . $row['pno'] . "</h2>";
                        echo "Opening hours <h2 class='g-font-size-32--xs g-font-size-36--md' style='color:red;'>" . $row['time'] . "</h2>";
                        echo "Average Cost <h2 class='g-font-size-32--xs g-font-size-36--md' style='color:red;'>" . $row['average'] . "</h2>";
                        ?>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".6s">
                        <?php 
                        echo "<img class='imagep' src=img/hotel_image/" . $row['picture'] . "><br>";
                        echo "Restaurant Name:<h2 class='g-font-size-32--xs g-font-size-36--md' style='color:red;'>" . $row['hotelname'] . "</h2>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- review start -->
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-75--sm">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs ">Collected Reviews </h2>
            <div class="container">
                <?php 
                $stmt1 = $conn->prepare("SELECT * FROM review2  WHERE city = ? AND hotelname = ?");
                $stmt1->bind_param('ss', $city, $hname);
                $stmt1->execute();
                $result1 = $stmt1->get_result();
                $row1 = $result1->fetch_assoc();
                if (!empty($row1)) {
                  echo "<div class='show'>";
                  foreach ($result1 as $row2) {
                    ?>
                <div class="row">
                    <div class="col-sm">
                        <a href="#"><i class="fa fa-user"></i><?php echo $row2["name"] ?></a>
                    </div>
                    <div class="col-sm">
                        <a href="#"><i class="fa fa-clock-o"></i><?php echo $row2["time"] ?></a>
                    </div>
                    <div class="col-sm">
                        <a href="#"><i class="fa fa-calendar-o"></i><?php echo $row2["dat"] ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm ">
                        <p class="rev"><?php echo $row2["review"] ?></p>
                    </div>
                </div>
                <hr>
                <?php echo "</div>";
              }
            }
          } ?>

                <?php if (empty($row1)) {
                  echo "<div class='show'>";
                  ?>
                <div class="g-bg-color--sky-light">
                    <div class="container g-padding-y-80--xs g-padding-y-75--sm">
                        <h2 class="g-font-size-32--xs g-font-size-20--md g-text-center--xs g-margin-b-80--xs ">No Reviews Found</h2>
                    </div>
                </div>
                <?php echo "</div>";
              } ?>

            </div>
        </div>
    </div>
    <!-- review end -->
    <?php
 //      $city = $_GET['city'];
    //      $hname = $_GET['hname'];
    // $stmt = $conn->prepare("SELECT * FROM hotels WHERE city = ? AND hotelname = ?");
    // $stmt->bind_param('ss', $city, $hname);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     $row = $result->fetch_assoc();
    if (empty($row)) {
      echo "<div style='display:none;'>";
    } else {
      echo "<div class='show'>";
    }
    ?>
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-75--sm">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs ">Review Please</h2>
            <div class="g-text-center--xs g-margin-b-80--xs">
                <!-- start -->
                <center><span id="error1"><?php if (isset($_GET['msg1'])) {
                                            echo $_GET['msg1'];
                                          } ?></span></center><br>
                <form id="myFrm2" action="add.php" method="POST" autocomplete="off">
                    <input type="text" class="form-control" name="name" id="name" placeholder="* Name please *"><br>
                    <input type="hidden" name="city" value="<?php echo $_GET["city"]; ?>">
                    <input type="hidden" name="hotelname" value="<?php echo $_GET["hname"]; ?>">
                    <textarea type="text" class="form-control" rows="10" id="review" name="review" placeholder="*  Your Review Please *"></textarea><br>
                    <!-- <input type="file"  id="fileToUpload" name="fileToUpload"> -->
                    <button type="submit" style="width:300px;" class="bot" id="reviewb" name="reviewb"> Submit</button>
                </form>
                <!-- end -->
            </div>
        </div>
    </div>
    <?php echo "</div> </div>";
  }  ?>
    <footer style="background-color:#337ab7; !mportant" class="g-bg-color--dark">
        <!-- Links -->
        <div class="g-hor-divider__dashed--white-opacity-lightest">
            <div class="container g-padding-y-80--xs">
                <div class="row">
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">YouTube</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <h3 class="g-font-size-18--xs g-color--white">Tacto</h3>
                            <p class="g-color--white-opacity">Search Restaurant Easily</p>
                            <p class="g-color--white-opacity">--Chennai--</p>
                        </div>
                    </div>
                    <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <form id="myForm" action="add.php" method="POST" autocomplete="off">
                                    <center><span id="error1"><?php if (isset($_GET['msgp'])) {
                                                                echo $_GET['msgp'];
                                                              } ?></span></center><br>
                                    <li> <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"></li><br>
                                    <li> <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email"></li><br>
                                    <li><input type="text" class="form-control" id="pno" name="pno" placeholder="Enter Your Mobile Number"></li><br>
                                    <li><textarea type="text" rows="3" class="form-control" id="msg" name="msg" placeholder="Enter Your Message"></textarea></li><br>
                                    <li><button class="btn btn-info" id="feed" name="feed"> Submit</button></li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Links -->

        <!-- Copyright -->
        <div class="container g-padding-y-50--xs">
            <div class="row">
                <div class="col-xs-6">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".2s">
                        <a href="index.html">
                            <h3 class="s-header__logo-img s-header__logo-img-default" style="color:white;">Tacto</h3>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
    </footer>
    <!--loader-->
    <script type="text/javascript" src="js/loader1.js"></script>
    <script type="text/javascript" src="js/loader.js"></script>
    <!--end loader-->
    <!-- jquery for animation-->
    <script type='text/javascript' src='js/jquery-1.11.0.mine69f.js?ver=4.0.22'></script>
    <script type="text/javascript" src="js/jquery.wow.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- jquery library -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        //           $("#feed").click( function() {
        //      $.post( $("#myForm").attr("action"), 
        //      $("#myForm :input").serializeArray(), 
        //          function(info){
        //           alert(info);
        //           $("#error").html(info);
        //            $('#error').delay(3000).show().fadeOut('slow');
        //             $(".er").css("background", "#d6c1c1");
        //    });
        //  clearInput();
        // });

        // $("#myForm").submit( function() {
        //   return false; 
        // });
        // function clearInput() {
        //     $("#myForm :input").each( function() {
        //        $(this).val('');
        //     });
        // }
        // $( ".er" ).click(function() {
        //    $(".er").css("background", "white");
        // });
        $(document).ready(function() {
            $("form").attr('autocomplete', 'off');
        });
        $(document).ready(function() {
            $('#country').on('change', function() {
                var countryID = $(this).val();
                if (countryID) {
                    $.ajax({
                        type: 'POST',
                        url: 'add.php',
                        data: 'country_id=' + countryID,
                        success: function(html) {
                            $('#state').html(html);
                            $('#city').html('<option value="">Select state first</option>');
                        }
                    });
                } else {
                    $('#state').html('<option value="">Select country first</option>');
                    $('#city').html('<option value="">Select state first</option>');
                }
            });

            $('#state').on('change', function() {
                var stateID = $(this).val();
                if (stateID) {
                    $.ajax({
                        type: 'POST',
                        url: 'add.php',
                        data: 'state_id=' + stateID,
                        success: function(html) {
                            $('#city').html(html);
                        }
                    });
                } else {
                    $('#city').html('<option value="">Select state first</option>');
                }
            });
        });
    </script>
</body>

</html> 