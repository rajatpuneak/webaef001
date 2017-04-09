<?php
include("config.php");
 
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
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
				nav: true,
				speed: 500,
				namespace: "callbacks",
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


</head>

<body>
	<div class="wrap-body">
<div id="pgHeader">
		
</div>
<section id="container">
	<div class="wrap-container">
		<div class="zerogrid">
			<div class="row">
				
				
				<div class="col-1-3">
					<div class="wrap-col">
						
											
											<div class="col-1-1">
												<div class="wrap-col">
                                                     
													<a href="hof_form.php">HOF Form</a>
												</div>
											</div>
											<div class="col-2-1">
												<div class="wrap-col">
													<a href="family_form.php">Family Member Form</a>
												</div>
											</div>
									
										
										
						
						
					</div>
				</div>
				
					<div class="col-1-3">
						<div class="wrap-col">
							
								
							
						</div>
					</div>
					
			</div>
		</div>
	</div>
</section>
		
			<section class="content-box box-2"><!--Start Box-->
				<div class="row">
					<div class="col-1-3">
						
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
</body></html>