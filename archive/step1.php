

 <?php
   include('session.php');

   
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
    <script>
            $(function () {
                $("#pgHeader").load("header.html");
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
                  <div class="col-1-1">
                  <div class="wrap-col">
 <h2>Please correct details wherever necessary</h2>
                  </div>
                  </div>
                  </div>
                  </div>
               </div>
                  <div class="wrap-container">
                  <div class="zerogrid">
                  <div class="row" style="padding-left: 20px;">
                  <div class="col-1-1">
                  <div class="wrap-col">
<table class="tbl" align="Left" cellpadding="15" cellspacing="15"
				width="100%">
				<tbody>
					<tr>
						<td align="right" style="width:20%">Name </td> 
						<td align='left'  style="width:20%"><?php echo  $hofdata["name"]; ?></td>
						<td align="left"  style="width:20%">Ejamaat Id  </td><td align='left'><?php echo  $hofdata["itsno"]; ?></td>
						<td align="right"  style="width:20%">*Mohallah  </td><td align='left'  style="width:20%">
															<strong>Fatima Nagar </strong>		
								<input type='hidden' name="hofdata[mohalla]" value="Fatima Nagar ">
																	
						</td>
						
					</tr>
					<tr>
						<td align="right">Email : </td><td align='left'><input name="hofdata[email]" class="textbox"
							id="emailid" tabindex="1"
							value=<?php  $hofdata["emailid"] ?> ></td>
						<td align="right">Mobile : </td><td align='left'><input name="hofdata[MOBILE_NO]" class="textbox"
							id="tel_mobile" tabindex="1"
							value=<?php echo  $hofdata["mobile_no"] ?> /></td>
						
						
					</tr>
										<tr>
						<td colspan='3' align="right">Do you Recieve FMB Thali : </td><td align='left'>
							<select name="hofdata[fmbthali]" id='fmbthali' style="width: 205px;">
							<option>Select</option>
							<option value='yes' selected>Yes</option>
							<option value='no' >No</option>
							</select>
							<script type="text/javascript">
							var fmbthali = new LiveValidation('fmbthali');
							fmbthali.add( Validate.Exclusion, { within: [ 'Select' ],failureMessage: "Please Select Value" } );
							</script>
						</td>
						<td align="right">&nbsp; </td>
						<td align="right">&nbsp; </td>						
					</tr>
					<tr>
						<td colspan='3' align="right">Have You Registered For Qarzan Hasana Scheme : </td><td align='left'>
							<select name="hofdata[qarzan]" id='qarzan' style="width: 205px;">
							<option>Select</option>
							<option value='yes' selected>Yes</option>
							<option value='no' >No</option>
							</select>
							<script type="text/javascript">
							var qarzan = new LiveValidation('qarzan');
							qarzan.add( Validate.Exclusion, { within: [ 'Select' ],failureMessage: "Please Select Value" } );
							</script>
						</td>
						<td align="right">&nbsp; </td>
						<td align="right">&nbsp; </td>
						
					</tr>
					<tr>
						<td colspan="8">
						<table width="100%" border="1" class="tbl">
							<tbody>
								<tr>
									<th scope="col"><strong>Ejamaat Id</strong></th>
									<th scope="col">Family Member Name</th>
									<th scope="col">Mobile No</th>
									
<!--									<th scope="col">Age</th>-->
<!--									<th scope="col">Misaq</th>-->
<!--									<th scope="col">Marital Status</th>-->
<!--									<th scope="col">Wafat</th>-->
								</tr>
																<tr>
									<td><input type="text"
										value="30345339"
										name="familyinfo[30345339][ejamaatid]"
										readonly="readonly" /></td>
									<td>
                                    <input type="text"  readonly
										value=" Shireen Aliasgar Chai wala"
										name="familyinfo[30345339][name]" /></td>
									<td><input type="text"
										value="918605480738"
										name="familyinfo[30345339][MOBILE_NO]" /></td>
									

								</tr>
																<tr>
									<td><input type="text"
										value="40901428"
										name="familyinfo[40901428][ejamaatid]"
										readonly="readonly" /></td>
									<td>
                                    <input type="text"  readonly
										value=" Zohratussharaf Aliasgar Chai wala"
										name="familyinfo[40901428][name]" /></td>
									<td><input type="text"
										value="918605480738"
										name="familyinfo[40901428][MOBILE_NO]" /></td>
									

								</tr>
																<tr>
									<td><input type="text"
										value="40917199"
										name="familyinfo[40917199][ejamaatid]"
										readonly="readonly" /></td>
									<td>
                                    <input type="text"  readonly
										value=" Ummehani Aliasgar Chaiwala"
										name="familyinfo[40917199][name]" /></td>
									<td><input type="text"
										value="918605480902"
										name="familyinfo[40917199][MOBILE_NO]" /></td>
									

								</tr>
															</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td colspan="8" align="center" style="text-align: center;">
                     	<input name="btnUpdate" value="Next" class="btnactive"
							type="submit" />
            </td>
					</tr>
			</table>
			</td>
		</tr>
		  <tr>
    	<td style="font-size: 11px;color:#014D5F;text-align: center;">Powered By Softronikx Technologies & Solutions Pvt Ltd.</td>
    </tr>
	</tbody>
</table>
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
            </body>
         </html>