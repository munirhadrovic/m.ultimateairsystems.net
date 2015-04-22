<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
		<title>Ultimate Air Systems</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function(){
				$('#menu-seo1').slicknav({
					prependTo:'#navigation-menu-seo1'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
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
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
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
		    $(function() { 
		    	var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("boo-boo-records-inc-san-luis-obispo","300","RED","y","y","2");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})
		    ();
    	</script>
    	<div id="fb-root"></div>
		<script>
		   $(function(d, s, id) {
      			var js, fjs = d.getElementsByTagName(s)[0];
      			if (d.getElementById(id)) return;
      			js = d.createElement(s); js.id = id;
      			js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
      			fjs.parentNode.insertBefore(js, fjs);
    		}(document, 'script', 'facebook-jssdk'));
		</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="#page1"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>">
			<br>
			<img src="img/credit_cards2.jpg" alt=""><br>
			<h1>Powered by <a href="http://mobilegrows.com/">MobileGrows</a> | <a href="http://ultimateairsystems.net/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  
		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider.png" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider2.png" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/Screenshot_8.png" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>				      
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn velikodugme buttons-radius" href="tel:<?php echo $telephone ?>"><img src="img/call-01.png" alt="" style="width: 37px; padding-top: 5px;"><br>Call Us</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<!-- <div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
					</div> -->	
					<div class="ui-block-b"><a class="ui-btn velikodugme buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>"><img src='img/mail.png' style='width: 50px; padding-top: 5px;'><br>Contact Us</a></div>   
				</fieldset>				
				
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Company Profile</a></div>
				</div>    
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#seopage" data-transition="<?php echo $transitionefect ?>">Expertise</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#seopage1" data-transition="<?php echo $transitionefect ?>">Projects</a></div>
				</div>
				         				
		
		  </div>
		  <h2>Welcome</h2>
            <p>Since 1994, we have provided exceptional hvac service to a variety of clients in the public and private sectors, including commercial , residential ,and restaurants  facilities.</p>
            <p>Our goal is to maintain a long-lasting relationship with our clients based on exceptional service and cost-effective solutions that meet our clients’ needs. </p>
            <p>We take all necessary measures to ensure  customers success by striving to meet and exceed our client’s expectations. All our service techs are EPA certified, so we can apply the 
            necessary expertise to ensure your air conditioning system is working properly and efficiently.</p><br>

            <h2>Our Services</h2>
            <p>For more than 10 years we have been providing services in the Hvac sector,from Maintenance , Service , Replacements , Refrigeration , and New Construction.</p>
            <p><a href="#seopage">Learn More</a></p><br>

			<h2>Our Solution</h2>
			<ul>
				<li>Save money on electric bills</li>
				<li>We have Rebates on systems that qualify </li>
				<li>Tax credits , Manufacture rebates</li>
				<li>UV light filtration</li>
				<li>Maintenace Agreements</li>
				<li>Call free estimates</li>
			</ul>
			<img src="img/TAX_CREDIT.jpg" alt="">
            
        </div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 company///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Expertise</a></li>
							<li><a href="#seopage1" data-transition="<?php echo $transitionefect ?>">Projects</a></li>						
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    
					<h2>Company Profile</h2>
					<p>We are a privately owned company founded in 1996.But with over 10 years experience in the area. We started in Residential Hvac and evolved into a full-service Air Conditioning  company with expertise across all Hvac areas. Today we successfully manage projects in the Serivce end, and New Construction. We are a full service Air Conditioning and provide a wide variety of services, ranging from single Air 
					Conditioning replacement to  large 17 tons Industrial installations. </p>
					<p>When schedules matter, we offer a competitive advantage you can count on. We provide outstanding support to our field operations that makes projects run smoothly.
					 In the field, we maintain a steady workforce of skilled service technicians.</p>
					<p>You will find that our employees take great pride in both the quality of their work, and the visual beauty of 
					their finished product.</p><br>
					<img src="img/RUUD-Logo.jpg" alt="">
					

					<p>Latest News :<br>Dunkin Donuts will start construction Jan 2012  (Golden Gate)(Courthouse Feb 12)
					Will install 2 new Carrier Package Units on roof with complete exhaust hoods and walkin  refrigerator
					 and walkin freezer.</p>
					 <p>Jimmy Johns Gourmet Sandwiches (Feb 12)</p>
					 <p>Metro Pcs (Ft.Lauderdale Feb 12)</p>
					 <p>Beacon House (57 Residential Units March 12)</p>

                </div>
			</div>		
		</div>
		
		<!-- page 2 company///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Company Profile</a></li>
								<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Expertise</a></li>
								<li><a href="#seopage1" data-transition="<?php echo $transitionefect ?>">Projects</a></li>						
							</ul>
					</section>
					<div>	
						<h2>CONTACT US</h2>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo expertise ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Company Profile</a></li>
								<li><a href="#seopage1" data-transition="<?php echo $transitionefect ?>">Projects</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>

					<h2>Expertise</h2>
					<p>Mechanical and HVAC Engineering Services</p>
					<p>Among other services, we are experienced in developing a complete and coordinated filtration systems package</p>
					<ul>
						<li>Duct Sanitizing</li>
						<li>UV Lights</li>
						<li>Upgraded filter</li>			
					</ul>
					<img src="img/ultramax-prod-gold-resi.gif" alt="">

					<p>We are also experienced with the development Restaurant Ventilation from Exhaust Hoods to inline Ventilation  equipment and exhaust fans , 
					often required for a Restaurant County Codes.</p>
					<p>Specific engineering systems that we have developed design/specification packages for include:</p>
					<ul>
						<li>Exhaust</li>
						<li>Exhaust Hoods</li>
						<li>Refrigeration </li>
						<li>Supplemental cooling systems</li>
						<li>Special computer room HVAC systems</li>
					</ul>
					<img src="img/uv_light.jpg" alt="">
				</div>
			</div>
		
		</div>
<!--page seo expertise ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!--page seo1 projects  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<div id="seopage1" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo1">
							<ul id="menu-seo1">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Company Profile</a></li>
								<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Expertise</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>

					<h2>Projects</h2>
					<p>With over 10 years of experience in residential and commercial projects, we have solutions for all of your project requirements. 
					Here are some highlights of recent projects:</p>
					<p>(Here are some pictures of the New York City Restaurant)</p>
					
					<img src="img/WP_000055_1__450x600.jpg" alt="">

					<h3>Morgan & Morgan Law Firm.</h3>
					<p>Control system design including Zonex Damper System, Control Dampers for fresh air intakes and computer room Air Conditioning System</p>
					<br>
					<h3>Projects Completed</h3>
					<p>Cossette Residence</p>  <p>Dunkin Donuts (Eagle Creek)</p>
 					<p>Raymond James Investments</p>  <p>Morgan & Morgan Law Firm</p>       
 					<p>dunkin Donuts</p>  <p>Real Fitness (Naples)</p>
 					<p>Ritrovo (NYC).</p>  <p> Polisseni Residence</p>
 					<p>Mr Brown residence.</p><br>

 					<h3>Upcoming Projects</h3>
 					<p>Salon Zenergy.</p>        <p>Dr.Black</p>
					<p>California Closets</p>    <p>Welsh Companies</p>
					<p>BB&T Bank.</p>            <p>Super Soccer</p>
					<br>
					<img src="img/WP_000058_1__450x600.jpg" alt="">
					<p><b>Federal Government Buildings<br>United States Post Offices</b></p>


				</div>
			</div>		
		</div>

<!--page seo1 projects///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesfully!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was NOT sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	</body>
</html>
