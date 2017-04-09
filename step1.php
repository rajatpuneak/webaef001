<?php
   include('session.php');   


   if($_SERVER["REQUEST_METHOD"] == "POST") {
// Fetching variables of the form which travels in URL
//if($name !=''&& $email !=''&& $contact !=''&& $address !='')
//{
//  To redirect form on a particular page

header("location: step2.php");
}
//else{
?>

    <!DOCTYPE html>

    <html lang="en">

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
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


        <!-- CSS
        ================================================== -->
        <!--------inner form css------------>
        <link rel="stylesheet" href="./css/responsive.min.css">
        <link rel="stylesheet" href="./css/docs.css">
        <link rel="stylesheet" href="./css/prism.min.css">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <!--------inner form cssend------------>

        <link rel="stylesheet" href="css/zerogrid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <!--<link rel="stylesheet" href="css/responsiveslides.css">-->
        <script src="js/jquery183.min.js"></script>
        <!--<script src="js/responsiveslides.min.js"></script>-->
        <!--<script>
            // You can also use "$(window).load(function() {"
            $(function () {                // Slideshow 
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
        </script>-->

        <!---------css for table-------->
        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
                border-color: #ccc;
                margin: 0px auto;
            }
            
            .tg td {
                font-family: Arial, sans-serif;
                font-size: 14px;
                padding: 9px 9px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: #ccc;
                color: #333;
                background-color: #fff;
            }
            
            .tg th {
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                padding: 9px 9px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: #ccc;
                color: #333;
                background-color: #f0f0f0;
            }
            
            .tg .tg-e3zv {
                font-weight: bold
            }
            
            .tg .tg-hgcj {
                font-weight: bold;
                text-align: center
            }
            
            .tg .tg-4eph {
                background-color: #f9f9f9
            }
            
            @media screen and (max-width: 767px) {
                .tg {
                    width: auto !important;
                }
                .tg col {
                    width: auto !important;
                }
                .tg-wrap {
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                    margin: auto 0px;
                }
            }
            
            .col-s-6 .row {
                padding-bottom: 10px;
            }
            
            .col-s-6 .row label {
                font-weight: bold;
            }
            
            .col-s-6 .row p {
                margin: 0px;
            }
        </style>
        <script>
            $(function () {
                $("#pgHeader").load("header.html");
            });
        </script>
        <!------------>
    </head>

    <body>
        <div class="wrap-body">
            <!--////////////////////////////////////Header-->
            <div id="pgHeader">
            </div>
            <section id="container">
                <div class="wrap-container" id="detailFormContainer">
                    <div class="zerogrid">
                        <div class="row" style="padding-left: 20px;">
                            <div class="col-1-1">
                                <div class="wrap-col">
                                    <!-------------------------->
                                    <section id="horizontal">
                                        <h1>Please correct details wherever necessary</h1>
                                       <form name="form2" id="ff" method="post" >
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-s-6">
                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="NAME">Name :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <input type="text" id="NAME" disabled="" value="<?php echo  $hofdata["name"] ?>">
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="emailId">Email Id :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <input type="text" id="emailId" Disabled="" value="<?php echo  $hofdata["emailid"]?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="fmbThaliSelect">Do you Recieve FMB Thali</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <select id="fmbThaliSelect">
                                    <option value="1" <?php if ($hofdata["fmb_thali"]==1) echo 'selected="selected"';?>>Yes</options>
                                    <option value="2" <?php if ($hofdata["fmb_thali"]==0) echo 'selected="selected"';?>>No</options>

                                          </select>
                                                            </div>
                                                        </div>

                                                          <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="QarzanHasanaSelect">Have You Registered For Qarzan Hasana Scheme :</label>
                                                            </div>
                                                            <div class="col-s-8" style="align-self: bottom">
                                                                <select id="QarzanHasanaSelect">
                                                                        <option value="1" <?php if ($hofdata["qarzan"]==1) echo 'selected="selected"';?>>Yes</options>
                                                                        <option value="2" <?php if ($hofdata["qarzan"]==0) echo 'selected="selected"';?>>No</options>

                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-s-6">
                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="Jamat_ID">ITS No. :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <input type="text" id="itsno" disabled="" value=<?php echo  $hofdata["itsno"] ?> >
                                                                <!--<p>*Un-Editable Text</p>-->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="sector">Sector :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <b><input type="text" id="sector" disabled="" value="<?php echo  $hofdata["sector"] ?>"></b>
                                                                <!--<p>*Un-Editable Text</p>-->
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="sector">Sub Sector :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <b><input type="text" id="sector" disabled="" value="<?php echo  $hofdata["sub_sector"] ?>"></b>
                                                                <!--<p>*Un-Editable Text</p>-->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="Mobile">Mobile :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <input type="text" id="Mobile" value=<?php echo  $hofdata["mobile_no"] ?>>
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                    </div>
                                                </div>
                                            </fieldset>
                                            </section>
                                            <section class="content-box box-1">
                                            <div class="tg-wrap">
                                                <table class="tg">
                                                    <tr>
                                                        <th class="tg-hgcj">ITS No.</th>
                                                        <th class="tg-e3zv">Name</th>
                                                        <th class="tg-e3zv">Contact</th>
                                                    </tr>
                                                    
                                                <?php $sql2 = "SELECT *  FROM familydata WHERE hofitsno = '$hofits'";
                                                     $result2 = mysqli_query($db,$sql2);
                                                    $count2 = mysqli_num_rows($result2);
      if($count2<1)
      {

          echo "<tr> <td></td><td>";
          echo  "No Family Record Found";
          echo "</td><td></td></tr>";
        
      } 
      else
      {
        
        
        //echo $familydata['itsno'];
        while ($familydata= mysqli_fetch_array($result2))
        {
            
            echo '<tr>
                 <td> '.$familydata['itsno'].'</td>
                  <td>'.$familydata['name'].'</td>
                 <td>'.$familydata['contact'].'</td>
                 </tr>';
        }
      }
    
 ?>
 
                                                </table>
                                            </div>
                                            <p></p>
                                            <div class="wrap-col">
                                            
                                           <input class="sendButton" type="submit" name="Submit" value="Next" >
                                            </div>
                                        </form>
                                    </section>
                                    <!-------------------------->
                                </div>
                            </div>
                        </div>
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
                                        <p class="footermargin">Anjuman-E-Fatemi is a non-profit organization administering and managing the affairs
                                            of the Dawoodi Bohra Community in Fatimanagar,Poona</p>
                                        <p class="footermargin" style="font-size: 60%;">Copyright 2015 - <a href="http://www.zerotheme.com" target="_blank" rel="nofollow">Free Html5 Templates</a>                                            designed by ZEROTHEME</p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <script type="text/javascript">
                $(function () {
                    if (navigator.userAgent.match(/msie [6]/i)){
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
        <script src="./css/jquery-2.1.3.min.js.download"></script>
        <script src="./css/js.cookie.js.download"></script>
        <script src="./css/prism.js.download"></script>
        <script src="./css/responsive.min.js.download"></script>
        <script src="./css/docs.min.js.download"></script>
    </body>

    </html>