<?php
	session_start();	
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Bakeology - Bakehouse</title>
<link rel="shortcut icon" href="{{asset('frontEnd')}}/images/logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--cart(css)-->
<link href="{{asset('shopFrontEnd')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('shopFrontEnd')}}/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('shopFrontEnd')}}/css/prettyPhoto.css" rel="stylesheet">
<link href="{{asset('shopFrontEnd')}}/css/price-range.css" rel="stylesheet">
<link href="{{asset('shopFrontEnd')}}/css/responsive.css" rel="stylesheet">
<!---->

<link href="{{asset('shopFrontEnd')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('shopFrontEnd')}}/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="{{asset('shopFrontEnd')}}/css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="{{asset('shopFrontEnd')}}/css/swipebox.css">


<script src="{{asset('shopFrontEnd')}}/js/jquery-1.11.1.min.js"></script><!--change here for removing header effect--> 

<script type="text/javascript" src="{{asset('shopFrontEnd')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('shopFrontEnd')}}/js/easing.js"></script>
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
	<script src="{{asset('shopFrontEnd')}}/js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
<!--animate-->
<link href="{{asset('shopFrontEnd')}}/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('shopFrontEnd')}}/js/wow.min.js"></script>
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
                      <a href="{{ url('/') }}"><h2 style="font-size: 65px;color:#EFA52C">B<span>akeology</span></h2></a>
					  
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="Home" href="{{ url('/') }}">Home</a></li>
								<li><a data-hover="Cakes" href="http://localhost/Bakeology/public/shop">Cakes</a></li>
								<li><a data-hover="Pastries" href="http://localhost/Bakeology/public/shop-pastry">Pastries</a></li>
								<li><a data-hover="Bakehouse" href="{{ url('/shop-bakehouse') }}">Bakehouse</a></li>
							    <li><a data-hover="Account" href="{{ url('/enterAccount') }}">Account</a></li>
							    <li><a data-hover="Cart" href="{{url('/enterCart')}}">Cart</a></li>
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







	<!--CartPage-->
	<div>
					<div class="features_items"><!--features_items-->
						<div id="bread" style="visibility:hidden"><img height="90" src="{{asset('frontEnd')}}/images/down.png"/></div>
						<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class="title text-center">Breads</h2>

						<?php
							use App\Product;

							$products=Product::all();

							if(isset($_SESSION['email'])){
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="bread" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<form action='http://localhost/Bakeology/public/addToCart' method='get'>
																<input style='visibility:hidden' name='product-id' value='".$product->ProductID."'>
																<button type='submit' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button>
															</form>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}
							}
							else{
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="bread" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<a href='http://localhost/Bakeology/public/login' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}
							}
						?> 
	
					</div>




                    <div class="features_items"><!--features_items-->
						<div id="cookie" style="visibility:hidden"><img height="90" src="{{asset('frontEnd')}}/images/down.png"/></div>
						<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class="title text-center">Cookies</h2>

						<?php

							$products=Product::all();
							
							if(isset($_SESSION['email'])){
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="cookie" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<form action='http://localhost/Bakeology/public/addToCart' method='get'>
																<input style='visibility:hidden' name='product-id' value='".$product->ProductID."'>
																<button type='submit' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button>
															</form>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}
							}
							else{
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="cookie" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<a href='http://localhost/Bakeology/public/login' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}
							}
							
						?> 
	
					</div>



                    <div id="cupcake" class="features_items"><!--features_items-->
						<div style="visibility:hidden"><img height="90" src="{{asset('frontEnd')}}/images/down.png"/></div>
						<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;'  class="title text-center">Cupcakes</h2>

						<?php

							$products=Product::all();
							
							if(isset($_SESSION['email'])){
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="cupcake" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<form action='http://localhost/Bakeology/public/addToCart' method='get'>
																<input style='visibility:hidden' name='product-id' value='".$product->ProductID."'>
																<button type='submit' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button>
															</form>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}
							}
							else{
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="cupcake" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<a href='http://localhost/Bakeology/public/login' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}	
							}
							
						?> 
	
					</div>



                    <div id="drink" class="features_items"><!--features_items-->
						<div style="visibility:hidden"><img height="90" src="{{asset('frontEnd')}}/images/down.png"/></div>
						<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;'  class="title text-center">Drinks & Beverages</h2>

						<?php

							$products=Product::all();
							
							if(isset($_SESSION['email'])){
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="drink" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<form action='http://localhost/Bakeology/public/addToCart' method='get'>
																<input style='visibility:hidden' name='product-id' value='".$product->ProductID."'>
																<button type='submit' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button>
															</form>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}
							}
							else{
								foreach($products as $product){
									if($product->ProductAvailability=="yes" && $product->ProductCategory=="drink" ){
										$productName=$product->ProductName;
										$productCost=$product->ProductCost;
										$productImageName=$product->ProductImageName;
										$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
	
										echo"<div class='col-sm-3'>
												<div class='product-image-wrapper'>
													<div class='single-products'>
														<div style='background-color: rgba(0,0,0,.5);' class='productinfo text-center'>
															<img height='220' src='".$productImagePath."' alt='".$productName."' />
															<h2 style='color:white'>₹".$productCost."</h2>
															<p style='color:white;font-size:18px;'><b>".$productName."</b></p>
															<a href='http://localhost/Bakeology/public/login' style='border:1px solid black' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
														</div>
													</div>
												</div>
											</div>";
									}
									
								}
							}
							
						?> 
	
					</div>
					
				</div>
			</div>
		</div>
	
	
	
	

  
    <script src="{{asset('shopFrontEnd')}}/js/jquery.js"></script>
	<script src="{{asset('shopFrontEnd')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('shopFrontEnd')}}/js/jquery.scrollUp.min.js"></script>
	<script src="{{asset('shopFrontEnd')}}/{{asset('shopFrontEnd')}}{{asset('shopFrontEnd')}}//js/price-range.js"></script>
    <script src="{{asset('shopFrontEnd')}}{{asset('shopFrontEnd')}}//js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('shopFrontEnd')}}/js/main.js"></script>


    <div class="footer text-center">
						<div class="container">
							<!--logo2-->
								   <div class="logo2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
									  <a href="{{url('/')}}"><h2>B<span>akeology</span></h2></a>
									  <p>Baking the difference</p>
								   </div>
					<!--//logo2-->
					<a href="{{url('/#contact')}}" class="flag_tag2">Where to find us?</a>
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