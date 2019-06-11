<?php
	session_start();
	if (!isset($_SESSION['adminEmail'])) {
		echo "<script>
                        window.location='http://localhost/Bakeology/public/adminLogin';
            </script>";
	}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Bakeology - Add Product</title>
<link rel="shortcut icon" href="{{asset('frontEnd')}}/images/logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--cart(css)-->
<link href="{{asset('admin/frontEnd')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('admin/frontEnd')}}/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('admin/frontEnd')}}/css/prettyPhoto.css" rel="stylesheet">
<link href="{{asset('admin/frontEnd')}}/css/price-range.css" rel="stylesheet">
<link href="{{asset('admin/frontEnd')}}/css/responsive.css" rel="stylesheet">
<!---->

<link href="{{asset('admin/frontEnd')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('admin/frontEnd')}}/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="{{asset('admin/frontEnd')}}/css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="{{asset('admin/frontEnd')}}/css/swipebox.css">


<script src="{{asset('admin/frontEnd')}}/js/jquery-1.11.1.min.js"></script><!--change here for removing header effect--> 

<script type="text/javascript" src="{{asset('admin/frontEnd')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('admin/frontEnd')}}/js/easing.js"></script>
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
	<script src="{{asset('admin/frontEnd')}}/js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
<!--animate-->
<link href="{{asset('admin/frontEnd')}}/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('admin/frontEnd')}}/js/wow.min.js"></script>
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
								<li class="active"><a data-hover="Customers" href="{{url('/admin-customers')}}">Customers</a></li>
								<li><a data-hover="Cakes" href="{{url('/admin-cakes')}}">Cakes</a></li>
								<li><a data-hover="Pastries" href="{{url('/admin-pastries')}}">Pastries</a></li>
								<li><a data-hover="Bakehouse" href="{{url('/admin-bakehouse')}}">Bakehouse</a></li>
							    <li><a data-hover="Add_Products" href="{{url('/admin-addProducts')}}">Add_Products</a></li>
							    <li><a data-hover="Order_Details" href="{{url('/admin-orderDetails')}}">Order_Details</a></li>
							    <li><a data-hover="Logout" href="{{url('/logoutAdmin')}}">Logout</a></li>
								
								


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
						<div style="visibility:hidden"><img height="90" src="{{asset('frontEnd')}}/images/down.png"/></div>
						<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class="title text-center">Add Products</h2> 
	
					</div>
					
					
					<div style='background-color:rgb(0,0,0,0.5);margin:5px;padding:5px;'>
						<center>
							<form action="{{ url('/addProduct') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
								<table>
									<tr>
										<td style='margin:5px;padding:10px;color:white'>Product Name</td>
										<td style='margin:5px;padding:10px;color:white'>:</td>
										<td style='margin:5px;padding:10px;'><input type='text' name='product-name' required></td>
									</tr>

									<tr>
										<td style='margin:5px;padding:10px;color:white'>Product Category</td>
										<td style='margin:5px;padding:10px;color:white'>:</td>
										<td style='margin:5px;padding:10px;'>
											<select name="product-category">
    											<option value="cake">Cake</option>
    											<option value="pastry">Pastry</option>
    											<option value="bread">Bread</option>
    											<option value="cookie">Cookie</option>
												<option value="cupcake">Cup-cake</option>
												<option value="drink">Drink/Beverage</option>
  											</select>
										</td>
									</tr>

									<tr>
										<td style='margin:5px;padding:10px;color:white'>Product Image</td>
										<td style='margin:5px;padding:10px;color:white'>:</td>
										<td style='margin:5px;padding:10px;'><input type='file' name='product-image' style='color:white' required></td>
									</tr>

									<tr>
										<td style='margin:5px;padding:10px;color:white'>Product Availability</td>
										<td style='margin:5px;padding:10px;color:white'>:</td>
										<td style='margin:5px;padding:10px;'>
											<input type="radio"  name="product-availability" checked value="yes"> <span style='color:white'>Yes</span><&nbsp>
											<input type="radio" name="product-availability" value="no"> <span style='color:white'>No</span>
										</td>
									</tr>

									<tr>
										<td style='margin:5px;padding:10px;color:white'>Product Cost (₹)</td>
										<td style='margin:5px;padding:10px;color:white'>:</td>
										<td style='margin:5px;padding:10px;'><input type='number' name='product-cost' min='0' required></td>
									</tr>
									<tr>
										<td style='margin:10px;padding:30px;' colspan='3'><center><button type='submit'>Add Product</button></center></td>
									</tr>
								</table>
							</form>
						</center>
					</div>

				</div>
			</div>
		</div>
	
	
	
	

  
    <script src="{{asset('admin/frontEnd')}}/js/jquery.js"></script>
	<script src="{{asset('admin/frontEnd')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('admin/frontEnd')}}/js/jquery.scrollUp.min.js"></script>
	<script src="{{asset('admin/frontEnd')}}/{{asset('admin/frontEnd')}}{{asset('admin/frontEnd')}}//js/price-range.js"></script>
    <script src="{{asset('admin/frontEnd')}}{{asset('admin/frontEnd')}}//js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('admin/frontEnd')}}/js/main.js"></script>


    
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