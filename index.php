<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tacto</title>
        <meta name="keywords" content="tacto" />
        <meta name="description" content="Task is given by Gumbr">
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
        <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $Cols: 1,
              $Align: 0,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
        </script>
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
        <a class="nav-link" data-toggle="modal" data-target="#myModal" href="login/register.php">Sign-Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#myModal" href="login/index.php">Log-In </a>
      </li>
    </ul>
  </div>
  </nav>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:600px;overflow:hidden;visibility:hidden;">
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/slide/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:800px;overflow:hidden;">
            <div data-p="225.00">
                <img data-u="image" src="img/slide/i2.jpg" />
            </div>
              <div data-p="225.00">
                <img data-u="image" src="img/slide/i4.jpg" />
            </div>
            <div data-p="225.00">
                <img data-u="image" src="img/slide/i3.jpg" />
            </div>
             <div data-p="225.00">
                <img data-u="image" src="img/slide/i5.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
                <div  class="container g-padding-y-50--xs g-padding-y-45--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
            <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Our Services</h2>
            </div>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <i class="fa fa-search-plus g-font-size-30--xs g-color--primary"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                            <h3 class="g-font-size-18--xs">Search a Restaurants</h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="fa fa-plus g-font-size-28--xs g-color--primary"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                            <h3 class="g-font-size-18--xs">Add your Restaurants</h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="fa fa-upload g-font-size-30--xs g-color--primary"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                            <h3 class="g-font-size-18--xs">Order online your favorite recipes </h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-75--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".6s">
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Find the best restaurants, cafes, and bars in India</h2>
                </div>
                <form method="GET" action="review.php">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                    <div class="container">
                          <div class="row">
                                <?php
    include('config.php');    
    $query = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query = mysqli_query($con, $query);
    $count = mysqli_num_rows($run_query);
    ?>
                            <div class="col-sm">
                             <select class="custom-select select1" name="country" id="country" required>
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
                             <select class="custom-select select2" name="state" id="state" required>
                          <option value="">Select country first</option>
                        </select>
                            </div>
                            <div class="col-sm">
                        <select class="custom-select  select3"  name="city" id="city" required>
                          <option value="">Select state first</option>
                        </select>
                            </div>
                          </div>
                        </div>
                </div>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">    
                        <center><div class="col-sm-6">
                    <div class="form-group box" >
                    <input class="form-control"  type="text" name="hname" id="hname" placeholder="* Search here *" required>
                    <button  name="button" class="button1 btn btn-success">click for full view</button>
                    </div>
                        </div>
                    </div>
                    </form>
                    <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              <span id="result"></span>
                            </div>
                            <div class="col-sm">
                              <span id="result1"></span>
                            </div>
                          </div>
                        </div>
                    </div>
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
//           alert(info);
//            $('#error').delay(3000).show().fadeOut('slow');
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
// search
  function load_data(query)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    success:function(data)
    {
     $('#result').html(data);
    }
   });
  }
    function load_data1(query,query1)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query,query1:query1},
    success:function(data)
    {
     $('#result1').html(data);
    }
   });
  }
  $('#city').on('change',function(){
   var search = $(this).val();
   if(search != '')
   {
    load_data(search);
   }
  });
    $("#hname").keydown(function(){
   var search1 = $(this).val();
   var search = $("#city").val();
   if(search != '' && search1 !='')
   {
    load_data1(search,search1);
   }
  });
 });
</script>
</body>
</html>