<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tacto</title>
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="Balaji R || 9894476083">
        <!-- bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- main sheet -->
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <!-- animate library -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
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
    include('config.php');    
    $query = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query = mysqli_query($con, $query);
    $count = mysqli_num_rows($run_query);
    ?>
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-75--sm">
              <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs ">Add New Restaurants</h2>
                <div class="g-text-center--xs g-margin-b-80--xs">
                  <!-- start -->
                  <form id="myForm1w" action="add.php" method="POST" autocomplete="off" enctype="multipart/form-data">
<center><span id="error1"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?></span></center><br>
                                <input type="text" class="form-control"  id="hotelname" name="hotelname" placeholder="*  Restaurant Name *"><br>
                               <input type="text" class="form-control"  id="address" name="address" placeholder="* Address *"><br>
                              <input type="text" class="form-control" id="pno" name="pno"  placeholder="Phone Number"><br>
                               <input type="text" class="form-control"  id="average cost" name="average cost" placeholder="Average cost for spending"><br>
                    <div class="container">
                          <div class="row">
                            <div class="col-sm">
                             <select class="custom-select select1" name="country" id="country">
                          <option value="">Select country</option>
                          <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
                $country_id=$row['country_id'];
                $country_name=$row['country_name'];
                echo "<option value='$country_id'>$country_name</option>";
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
                        </select>
                            </div>
                            <div class="col-sm">
                             <select class="custom-select select2" name="state" id="state">
                          <option value="">Select country first</option>
                        </select>
                            </div>
                            <div class="col-sm">
                        <select class="custom-select  select3"  name="city" id="city">
                          <option value="">Select state first</option>
                        </select>
                            </div>
                            <div class="col-sm">
                        <select class="custom-select  select3"  name="star" id="star">
                          <option value="">Star</option>
                          <option value="One Star">One Star</option>
                          <option value="Two Star">Two Star</option>
                          <option value="Three Star">Three Star</option>
                          <option value="Four Star">Four Star</option>
                          <option value="Five Star">Five Star</option>
                        </select>
                            </div>
                            <div class="col-sm">
                        <select class="custom-select  select3"  name="time" id="time">
                          <option value="">Opening Hours</option>
                          <option value="10.00am to 05.00pm">10.00am to 05.00pm</option>
                          <option value="09.00am to 06.00pm">09.00am to 06.00pm</option>
                          <option value="12.00 to 06.00pm">12.00 to 06.00pm</option>
                          <option value="24 Hours">24 Hours</option>
                        </select>
                            </div>
                        </div>
                </div><br>
      <center><div class="form-group">
        <div class="col-sm-6">
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload">
        <label class="custom-file-label" for="fileToUpload">Choose file</label>
      </div>
      <div class="input-group-append">
        <span class="input-group-text" id="">Picture</span>
      </div>
    </div>
    </div>
  </div></center>
  <!-- <input type="file"  id="fileToUpload" name="fileToUpload"> -->
         <button type="submit" style="width:300px;" class="bot" id="add" name="add"> Submit</button>
  </form>
                  <!-- end -->
                    </div>
                </div>
            </div>
        <footer style="background-color:#337ab7; !important" class="g-bg-color--dark">
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
                                <form  action="add.php" method="POST" autocomplete="off">
                                <center><span id="error1"><?php if(isset($_GET['msgp'])){ echo $_GET['msgp']; } ?></span></center><br>
                                <li> <input type="text" class="form-control"  id="name" name="name" placeholder="Enter Your Name"></li><br>
                               <li> <input type="text" class="form-control"  id="email" name="email" placeholder="Enter Your Email"></li><br>
                                <li><input type="text" class="form-control" id="pno" name="pno"  placeholder="Enter Your Mobile Number"></li><br>
                                <li><textarea type="text"  rows="3" class="form-control" id="msg" name="msg" placeholder="Enter Your Message"></textarea></li><br>
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
         <script  type="text/javascript" src="js/loader1.js"></script>
         <script  type="text/javascript" src="js/loader.js"></script>
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
//           $("#error").html(info); 
//            $('#error').delay(3000).show().fadeOut('slow');
//    });
//  clearInput();
// });
// $("#myForm").submit( function() {
//   return false; 
// });
//  $("#myForm1").submit( function() {
//   return false; 
// });
function clearInput() {
    $("#myForm :input").each( function() {
       $(this).val('');
    });
}
function clearInput() {
    $("#myForm1 :input").each( function() {
       $(this).val('');
    });
}
$(document).ready(function(){
$("form").attr('autocomplete', 'off');
});
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'add.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'add.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
</body>
</html>