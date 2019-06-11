<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bakeology - Baking The Difference</title>
<link rel="shortcut icon" href="{{asset('frontEnd')}}/images/logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('frontEnd')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('frontEnd')}}/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="{{asset('frontEnd')}}/css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="{{asset('frontEnd')}}/css/swipebox.css">
<script src="{{asset('frontEnd')}}/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{{asset('frontEnd')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('frontEnd')}}/js/easing.js"></script>
<!--/web-font-->
	<link href='//fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- swipe box js -->
	<script src="{{asset('frontEnd')}}/js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
<!--animate-->
<link href="{{asset('frontEnd')}}/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('frontEnd')}}/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

</head>
<body>
<!--start-home-->
		<div class="banner" id="home">
		<div class="header-bottom wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href="{{ url('/') }}"><img src="{{asset('frontEnd')}}/images/logo.png" alt="logo" height="110" width="140" ></a>
					  
				   </div>
					<!--//logo-->
					
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="Home" href="{{ url('/') }}">Home</a></li>
								<li><a data-hover="Cakes" href="#about" class="scroll">Cakes</a></li>
								<li><a data-hover="Pastries" href="#pastries" class="scroll">Pastries</a></li>
								<li><a data-hover="Bakehouse" href="#services" class="scroll">Bakehouse</a></li>
							    <li><a data-hover="Gallery" href="#gallery" class="scroll">Gallery</a></li>
							    <li><a data-hover="About" href="#contact" class="scroll">About</a></li>
								<li><a data-hover="FAQs" href="{{ url('/faq') }}" >FAQs</a></li>
								<li><a data-hover='Shop' href="{{ url('/shop') }}" >Shop</a></li>
								<?php
									if(isset($_SESSION['email']))
										echo"<li><a data-hover='Logout' href='http://localhost/Bakeology/public/logout'>Logout</a></li>";
									else
										echo "<li><a data-hover='Login' href='http://localhost/Bakeology/public/login'>Login</a></li>"
								?>
								

								</ul>
							</nav>
							</div>
							<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
			 </div>
		</div>
	</div>
		<div class="banner-slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
					    <li>
						   <div class="banner-info">
							      <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Welcome</h3>
								  <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">TO BAKEOLOGY</p>
								     <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"/></div>
								 <span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">BAKING THE DIFFERENCE</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							    <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Happiness</h3>
								 <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">STARTS HERE</p>
								  <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"/></div>
								 <span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">BAKING THE DIFFERENCE</span>
							  </div>
						</li>
						<li>
						   <div class="banner-info">
							      <h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Experience</h3>
								  <p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">TASTE OF PARADISE</p>
								   <div class="arrows wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"/></div>
								   <span class="wow slideInUpslideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">BAKING THE DIFFERENCE</span>
						   </div>
					    </li>
					</ul>
			  </div>
		<!--banner Slider starts Here-->
	  	<script src="{{asset('frontEnd')}}/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
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
	      <!--banner Slider starts Here-->
		 </div>

		 <div class="down"><a class="scroll" href="#services"><img src="{{asset('frontEnd')}}/images/down.png" alt=""></a></div>
	</div>

<!--/products-->
		  <div class="about" id="about">
		     <div class="container">
			 <!--/about-section-->
			   <div class="about-section">
				<div class="col-md-7 ab-left">
				  <div class="grid">
			        <div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="{{asset('frontEnd')}}/images/cake1.jpg" alt="img25" height="480" width="1987"/>
						<figcaption>
							<h4>Bakeology</h4>
							<p>Cake me away.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="{{asset('frontEnd')}}/images/cake2.jpg" alt="img25" height="480" width="1987"/>
						<figcaption>
							<h4>Bakeology</h4>
							<p>Take a break,buy a cake.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="clearfix"> </div>
				 </div>
			   </div>
			   <div class="col-md-5 ab-text">
			             <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Cakes</h3>
						  <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"/></div>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">From the inception of cakes they have remained one of the eatables with varied varities and we are here to serve you the best of it which will unwrap your smile.</p>
						  <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="{{url('/shop')}}" class="hvr-bounce-to-bottom">Get Started</a>
						  </div>

					</div>
					<div class="clearfix"> </div>
			 </div>
			  <!--//about-section-->
			  <!--/about-section2-->
			   <div class="pastries" id="pastries">
			        <div class="col-md-5 ab-text two">
			             <h3 class="tittle wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">Pastries</h3>
						 <div class="arrows-two wow slideInDown"  data-wow-duration="1s" data-wow-delay=".5s"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"/></div>
						  <p class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">Pastries are piece of cake that symbols the taste and it's variant's temptations in an extravagent form.</p>
						 <div class="start wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">
						     <a href="{{url('/shop-pastry')}}" class="hvr-bounce-to-bottom">Let's Go</a>
						  </div>

					</div>
						<div class="col-md-7 ab-left">
				  <div class="grid">
			        <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
					<img src="{{asset('frontEnd')}}/images/p1.jpg" alt="img25" height="480" width="1987"/>
						<figcaption>
							<h4>Bakeology</h4>
							<p>A piece of cake.</p>
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f  wow slideInRight"  data-wow-duration="1s" data-wow-delay=".2s">
					<figure class="effect-jazz">
						<img src="{{asset('frontEnd')}}/images/p2.jpg" alt="img25" height="480" width="1987"/>
						<figcaption>
							<h4>Bakeology</h4>
							<p>One bite and you’ll overrule all objections.</p>
						
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="clearfix"> </div>
				 </div>
			   </div>
					<div class="clearfix"> </div>
			 </div>
			  <!--//about-section2-->
			</div>
	     </div>
<!--//products-->
<!-- service-type-grid -->
	<div class="service" id="services">
		<div class="container">
		    <h3 class="tittle">Bakehouse</h3>
			<div class="arrows-serve"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"></div>
				<div class="inst-grids">
					<div class="col-md-3 services-gd text-center wow slideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="{{url('/shop-bakehouse/#cookie')}}" class="hi-icon"><img src="{{asset('frontEnd')}}/images/cookie.jpg" alt="cookie" height="64" width="64" /></a>
						</div>
						<h4>Cookies</h4>
						 <p>They are a fine blend of sweetness added with a crisp crunch in it's constitution. Baked for the best taste.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInDown"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="{{url('/shop-bakehouse/#cupcake')}}" class="hi-icon"><img src="{{asset('frontEnd')}}/images/cupcake.jpg" alt=" " height="64" width="64"/></a>
						</div>
						<h4>Cupcakes</h4>
						 <p>These delicious treats are individual cakes typically decorated with icing and frosting. They are fairly easy to make and appeal to people of all ages looking for a tasty treat in a small size.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInUp"  data-wow-duration="1s" data-wow-delay=".2s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="{{url('/shop-bakehouse/#bread')}}" class="hi-icon"><img src="{{asset('frontEnd')}}/images/bread.png" alt=" " height="64" width="64" /></a>
						</div>
						<h4>Bread</h4>
						 <p>The bread had a crunch to the crust that brought so many good memories, and the crumb was that wholesome taste of rustic grain.</p>
					</div>
					<div class="col-md-3 services-gd text-center wow slideInRight"  data-wow-duration="1s" data-wow-delay=".3s">
						<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
							<a href="{{url('/shop-bakehouse/#drink')}}" class="hi-icon"><img src="{{asset('frontEnd')}}/images/drinks_bev.jpg" alt=" " height="74" width="84" /></a>
						</div>
						<h4>Drinks & Beverages</h4>
						 <p>The liquids that pursue the ability to quench your thirst.</p>
					</div>
					<div class="clearfix"> </div>		
				</div>

		</div>
	</div>

<!--Gallery-->
<div class="gallery" id="gallery">
	<div class="container">
		<h3 class="tittle">Gallery</h3>
		<div class="arrows-serve"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"></div>
				<div class="gallery-grids">
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal1.jpg" alt=" " width="300" height="325" />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>Be there! Buy them! Eat them!</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal3.jpg" alt=" " width="300" height="325" />
								<div class="gal-text-box" >
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>Customised cakes-your wish, our command.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal2.jpg" alt=" " width="130" height="232" />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>A cake so yummy, it will fill your tummy.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal4.jpg" alt=" "  width="130" height="232"/>
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>Chunk of happiness.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal7.jpg" alt=" " width="130" height="232" />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>Delightful version of cake .</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal8.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal8.jpg" alt=" " width="130" height="232"/>
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>Chilled Temptation.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal5.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal5.jpg" alt=" " width="300" height="325" />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>Be happy, donut worry.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="{{asset('frontEnd')}}/images/gal6.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="{{asset('frontEnd')}}/images/gal6.jpg" alt=" " width="300" height="325"/>
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Bakeology</h4>
										<span class="separator"></span>
										<p>Love at first bite.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //gallery -->

  <!--bottom-->
	    <div class="bottom">
		<div class="container">
		       <div class="bottom-top">
			    <h3 class=" wow flipInX"  data-wow-duration="1s" data-wow-delay=".3s">We Are Sharing</h3>
				<span>DELICIOUS TREATS</span>
				   <p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".5s">Since the eastablishment of this bakery, the efforts are made such that the best quality eatables are delivered to the customers and that they are loved and acknowledged pragmatically.</p>
				   
			   </div>
		</div>
	</div>

	 <!--/contact-->
	 <div class="section-contact" id="contact">
	    <div class="container">
           <div class="contact-main">
				    <div class="col-md-6 contact-grid wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					<h3 class="tittle wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Contact Us</h3>
						<div class="arrows-three"><img src="{{asset('frontEnd')}}/images/border.png" alt="border"></div>
							<p class="wel-text wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".4s">We would love to hear your valuable and constructive feedback.Feel free to drop your thoughts on the services provided by us.</p>
						    <form action="{{route('customer.feedback')}}" method="get" id="filldetails">
					  <div class="field name-box">
							<input type="text" name="name" id="name" placeholder="Who Are You?" required=""/>
							<label for="name">Name</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field email-box">
							<input type="text" id="email" name="email" placeholder="example@email.com" required=""/>
							<label for="email">Email</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field phonenum-box">
							<input type="text" id="email" name="phone" placeholder="Phone Number" required=""/>
							<label for="email">Phone</label>
							<span class="ss-icon">check</span>
					  </div>

					  <div class="field msg-box">
							<textarea id="msg" name="message" rows="4" placeholder="Your message goes here..." required=""/ ></textarea>
							<label for="msg">Message</label>
							<span class="ss-icon">check</span>
					  </div>
						<div class="send wow shake"  data-wow-duration="1s" data-wow-delay=".3s">
											<input type="submit" value="Send" >
										</div>
					 
			  </form>

					   </div>
					<div class="col-md-6 contact-in wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
						<h4 class="info">About us </h4>
						<p class="para1">Our Bakeology is focused on getting you what you need and getting you on your way. We believe in providing best services and producing quality products like Cakes,Pastries,Cookies,Cupcakes,Bread,Drinks & Beverages.We have been gaining the trust of customers since 1998. Our team is ready and waiting for your order.. </p>
						<div class="con-top">
							<h4>Nadiad</h4>
								<ul>
								<li>Bakeology</li> 
								<li>Opposite Prime apts.</li>  
								<li>Indira Gandhi marg,</li> 
								<li>Nadiad-387002</li> 
								<li>Ph:9879890999 </li>
								<li>Shop Time : 7am to 11pm</li>
								<li><a href="mailto:bakeologybakery2019@gmail.com">bakeologybakery2019@gmail.com</a></li>
							  </ul>
						</div>
						
					</div>
					
						<div class="clearfix"> </div>
			      </div>
				   <!--map-->
				    <div class="map wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".5s">
					  <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Indira%20Gandhi%20Marg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
 </iframe>
					</div>
				<!--//map-->
			 </div>
		</div>
		<!--//contact-->
<!--footer-->
		<div class="footer text-center">
						<div class="container">
							<!--logo2-->
								   <div class="logo2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
									  <a href="{{url('/')}}"><h2>B<span>akeology</span></h2></a>
									  <p>Baking the difference</p>
								   </div>
					<!--//logo2-->
								<a href="#contact" class="flag_tag2 scroll">Where to find us?</a>
									<ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="https://twitter.com/" class="tw"></a></li>
										<li><a href="https://www.facebook.com/" class="fb"> </a></li>
										<li><a href="https://www.instagram.com/" class="in"> </a></li>
										<li><a href="https://www.youtube.com/" class="dott"></a></li>
										 <div class="clearfix"></div>
									</ul>
									<p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">&copy; .All rights reserved</p>

					 </div>
	     </div>
		<!--start-smooth-scrolling-->
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
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>