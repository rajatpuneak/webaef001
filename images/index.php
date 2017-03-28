<?php
include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myitsno = mysqli_real_escape_string($db,$_POST['itsno']);
      $mysabilno = mysqli_real_escape_string($db,$_POST['sabilno']); 
      
      $sql = "SELECT name FROM login WHERE itsno = '$myitsno' and sabilno = '$mysabilno'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("myusername");
        //  $_SESSION['login_user'] = $myusername;
         
         header("location: http://localhost/step1.php");
         echo $row['name'];
      }else {
        //  <!--$error = "Your Login Name or Password is invalid";-->
         echo "ERROR!"; 
      }
   }
?>
    <!DOCTYPE html>
    <!--[if lt IE 7 ]>
<html class="ie ie6" lang="en">
   <![endif]-->
    <!--[if IE 7 ]>
   <html class="ie ie7" lang="en">
      <![endif]-->
    <!--[if IE 8 ]>
      <html class="ie ie8" lang="en">
         <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <html lang="en">
    <!--<![endif]-->

    <head>
        <!-- Basic Page Needs
                  ================================================== -->
        <meta charset="utf-8">
        <title>ANJUMAN-E-FATEMI</title>
        <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
        <meta name="author" content="www.zerotheme.com">
        <!-- Mobile Specific Metas
                  ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS
                  ================================================== -->
        <link rel="stylesheet" href="css/zerogrid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/responsiveslides.css">
        <script src="js/jquery183.min.js"></script>
        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 
                $("#slider").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: false,
                    speed: 500,
                    namespace: "rslides",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>
        <!--[if lt IE 8]>
               <div style=' clear: both; text-align:center; position: relative;'>
                  <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                  <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                  </a>
               </div>
               <![endif]-->
        <!--[if lt IE 9]>
               <script src="js/html5.js"></script>
               <script src="js/css3-mediaqueries.js"></script>
               <![endif]-->
    </head>

    <body>
        <div class="wrap-body">
            <!--////////////////////////////////////Header-->
            <div id="pgHeader">
                <!--<header>
                <div class="zerogrid">
                    <div class="wrap-header">
                        <center>
                            <div class="logo"><img alt="Aqa bismillah" src="images/ezgif.com-gif-maker.gif"></div>
                        </center>
                        <div class="row">
                            <div class="col-2-3">
                                <div class="wrap-col">
                                    <div class="logo">
                                        <h1>ANJUMAN-E-FATEMI</h1>
                                        <label>Dawoodi Bohara Jamaat Fatemi Mohalla, Poona</h5>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-1-3">
                                 <div class="wrap-col">
                                    <div class="logo"><img src="images/1.png" alt="" width="300" height="100" style="border:0" >
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <nav id="menu-wrap">
                              <div id="menu-trigger">Menu</div>
                              <ul id="menu" style="display: none;">
                                 <li><a href="index.php">Home</a></li>
                                 <li><a href="admin.html">Admin</a></li>
                                 <li><a href="committees.html">Committees</a></li>
                                 <li>
                                    <a href="#">FMB</a>				
                                    <ul>
                                       <li><a href="#">FMB Menu</a></li>
                                       <li><a href="#">Contact</a></li>
                                       <li><a href="#">FMB Registration</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="contact.html">Contacts</a></li>
                              </ul>
                           </nav>
                        </div>
                  </header>-->
                  </div>
                  <section id="container">
                  <div class="wrap-container">
                  <div class="zerogrid">
                  <div class="row" style="padding-left: 20px;">
                  <div class="col-1-3">
                  <div class="wrap-col">
                  <h4>Vajebaat Login</h4>
                  <span><form name="form1" id="ff" method="post" >
                  <div class="col-1-1">
                  <div class="wrap-col">
                  <input type="text" name="itsno" id="itsno" placeholder="ITS No." required="required">
                  </div>
                  </div>
                  <div class="col-2-1">
                  <div class="wrap-col">
                  <input type="text" name="sabilno" id="sabilno" placeholder="Sabil No." required="required">
                  </div>
                  </div>
                  <input class="sendButton" type="submit" name="Submit" value="Submit" onclick="vajebat.php">
                  </form></span>
                  </div>
                  </div>
                  <div class="col-1-3">
                  <div class="wrap-col">								
                  <div id="Announcment">							
                  <h4>Announcments</h4>
                  <div class="item-content">
                  Any Announcment will be displayed Here
                  </div>								
                  </div>
                  </div>
                  </div>
				  <div class="col-1-3">
                  <!--<div class="wrap-col">								-->
                  <div class="callbacks_container">
                  <ul class="rslides" id="slider" style="    width: 250%;    float: none;">
                  <li>                  <img src="images/adv1.jpg" alt="" width="90" height="100" style="border:0" >                  </li>
                  <li>                  <img src="images/adv2.jpg" alt="" width="90" height="100" style="border:0">                  </li>
                  <li>                  <img src="images/adv3.jpg"alt="" width="90" height="100" style="border:0">                  </li>
                  </ul>
                  </div>
                  <!--</div>-->
                  </div>
                  <div class="callbacks_container">
                  <ul class="rslides" id="slider">
                  <li>                  <img src="images/adv1.jpg" alt="" width="90" height="100" style="border:0" >                  </li>
                  <li>                  <img src="images/adv2.jpg" alt="" width="90" height="100" style="border:0">                  </li>
                  <li>                  <img src="images/adv3.jpg"alt="" width="90" height="100" style="border:0">                  </li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </section>
                  <section class="content-box box-2"><!--Start Box-->
                  <div class="row">
                  <div class="col-1-3">
                  <div class="slider">
                  <!-- Slideshow -->
                  </div>	
                  </div>
                  <div class="col-1-3">
                  </div>
                  <div class="col-1-3">
                  </div>
                  </div>
                  </section>
                  </div>
               </div>
               </section>
               <footer>
                  <div class="zerogrid">
                     <div class="wrap-footer">
                        <div class="row">
                           <div class="wrap-col">
                              <div class="copy-right">
                                 <center>
                                    <p class="footermargin">Anjuman-E-Fatemi is a non-profit organization administering and managing the affairs of the Dawoodi Bohra Community in Fatimanagar,Poona</p>
                                    <p class="footermargin" style="font-size: 60%;">Copyright 2015 - <a href="http://www.zerotheme.com" target="_blank" rel="nofollow">Free Html5 Templates</a> designed by ZEROTHEME</p>
                                 </center>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </footer>
               <script type="text/javascript">
                                                                                                $(function () {
                                                                                                    if ($.browser.msie && $.browser.version.substr(0, 1) < 7) {
                                                                                                        $('li').has('ul').mouseover(function () {
                                                                                                            $(this).children('ul').css('visibility', 'visible');
                                                                                                        }).mouseout(function () {
                                                                                                            $(this).children('ul').css('visibility', 'hidden');
                                                                                                        })
                                                                                                    }

                                                                                                    /* Mobile */
                                                                                                    $("#menu-trigger").on("click", function () {
                                                                                                        $("#menu").slideToggle();
                                                                                                    });

                                                                                                    // iPad
                                                                                                    var isiPad = navigator.userAgent.match(/iPad/i) != null;
                                                                                                    if (isiPad) $('#menu ul').addClass('no-transition');
                                                                                                });          
            </script>
               </div>
            </body>
         </html>