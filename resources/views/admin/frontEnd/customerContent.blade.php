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
<title>Bakeology - Customers</title>
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
						<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class="title text-center">Customers</h2> 
	
					</div>
					
					<?php

						use App\Customer;

						$customers=Customer::all();

						echo "<div style='background-color:rgb(0,0,0,0.5);margin:5px;padding:5px;'>";
							echo "<table width='100%' style='border:1px solid white'>";
								echo "<tr>
										<th style='color:white' width='10%'><center>ID</center></th>
										<th style='color:white' width='15%;'>NAME</th>
										<th style='color:white' width='20%'><center>EMAIL</center></th>
										<th style='color:white' width='15%'><center>Ph.-NUMBER</center></th>
										<th style='color:white' width='40%'><center>ADDRESS</center></th>
									</tr>";
							echo "</table>";
						echo "</div>";

						echo "<div style='background-color:rgb(0,0,0,0.5);margin:5px;padding:5px'>";
							echo "<table width='100%'>";

							foreach($customers as $customer){
								echo "<tr>
										<td style='margin:5px;padding:10px;color:white' width='10%'><center>".$customer->CustomerID."</center></th>
										<td style='margin:5px;padding:10px;color:white' width='15%'>".$customer->Name."</th>
										<td style='margin:5px;padding:10px;color:white' width='20%'>".$customer->Email."</th>
										<td style='margin:5px;padding:10px;color:white' width='15%'><center>".$customer->Phone."</center></th>
										<td style='margin:5px;padding:10px;color:white' width='40%'>".$customer->Address."</th>
									</tr>";
							}
								
							echo "</table>";
						echo "</div>";
					?>

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