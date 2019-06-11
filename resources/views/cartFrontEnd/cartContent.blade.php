<?php
    session_start();

	use App\Product;
	use App\Customer;

    if(!isset($_SESSION['email'])){
		echo "<script>
                        window.location='http://localhost/Bakeology/public/';
            </script>";
	}    
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Bakeology - Cart</title>
<style>
.cell{
	margin:10px;
	padding:10px;
	padding-left:30px;
	padding-righ:30px;
}
</style>
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
						<div style="visibility:hidden"><img height="90" src="{{asset('frontEnd')}}/images/down.png"/></div>
						<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class="title text-center">Cart</h2>
                    <?php
						$totalCost=0;

                        if(isset($_SESSION['cart'])){
                                echo "<div style='background-color:rgb(0,0,0,0.5)'>";
								echo "<table width='100%'>";
								echo "<tr style='border:1px solid white'>
										<th colspan='2' style='color:white'><center><u>ITEMS</u></center></th>
										<th style='color:white'><center><u>COST</u></center></th>
										<th> </th>
										<th colspan='3' style='color:white'><center><u>QUANTITY</u></center></th>
										<th> </th>
										<th style='color:white'><center><u>TOTAL</u></center></th>
										<th> </th>
										
									</tr>";
								
								foreach($_SESSION['cart'] as $key => $value){
									$productID=$key;
									$productQuantity=$value;
									$productName = DB::table('products')->where('ProductID',$productID)->value('ProductName');
                                    $productCost = DB::table('products')->where('ProductID',$productID)->value('ProductCost');
                                    $productImageName = DB::table('products')->where('ProductID',$productID)->value('ProductImageName');
									$productImagePath="http://localhost/Bakeology/public/Products/images/".$productImageName;
									
									$total=$productCost*$productQuantity;
									$totalCost=$totalCost+$total;
									echo "<tr>";
									echo "<td class='cell'><img height='130px' width='150px' src='".$productImagePath."' alt='".$productName."' /></td>";
									echo "<td class='cell' style='color:white;'>".$productName."</td>";
									echo "<td class='cell' style='color:white;'>₹".$productCost."</td>";
									echo "<td class='cell' style='color:white;'>x</td>";
									echo "<td width='3.5%'>
											<form action='http://localhost/Bakeology/public/reduceQuantity' method='get'>
												<div style='padding:3px;margin:3px'>
													<input style='visibility:hidden;width:5px'  name='product-id' value='".$productID."'>
													<button type='submit'>-</button>
												</div>
											</form>
										</td>";


									echo "<td><input type='text' style='width:30px' readonly value=".$productQuantity." min='1' style='align:center'></td>";
									
									
									echo "<td width='5%'>
											<form action='http://localhost/Bakeology/public/increaseQuantity' method='get'>
												<div style='padding:3px;margin:3px'>
													<button type='submit'>+</button>
													<input style='visibility:hidden;width:5px' name='product-id' value='".$productID."'>
												</div>
											</form>
										</td>";

									echo "<td class='cell' style='color:white;'>=</td>";

									echo "<td style='color:white'><center>".$total."</center></td>";

									echo "<td width='40%'>
											<form action='http://localhost/Bakeology/public/removeFromCart' method='get'>
												<div>
													<input style='visibility:hidden;width:400px' name='product-id' value='".$productID."'>
													<button type='submit' style='color:white;background-color:red'>x</button>
												</div>
											</form>
										</td>";
								echo "</tr>";
								}

								$cgst=(int)($totalCost*0.09);
								$sgst=(int)($totalCost*0.09);
								$totalCostWithTax=$totalCost+$cgst+$sgst;

                                echo "</table>";
								echo "</div>";   
								
								echo "<br><br><br><br><br>";
								
								echo "<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class='title text-center'>Cart Totals</h2>";
								echo "<div style='background-color:rgb(0,0,0,0.5)'>";
								echo "<center>";
								echo "<table>";
									echo "<tr>
											<td style='color:white' class='cell'>SUBTOTAL</td>
											<td style='color:white' class='cell'>:</td>
											<td style='color:white' class='cell'>₹ ".$totalCost."</td>
										</tr>";

										echo "<tr>
											<td style='color:white' class='cell'>CGST @9%</td>
											<td style='color:white' class='cell'>:</td>
											<td style='color:white' class='cell'>₹ ".$cgst."</td>
										</tr>";

										echo "<tr>
											<td style='color:white' class='cell'>SGST @9%</td>
											<td style='color:white' class='cell'>:</td>
											<td style='color:white' class='cell'>₹ ".$sgst."</td>
										</tr>";

										echo "<tr style='border: 1px solid white'>
											<td style='color:white' class='cell'>TOTAL</td>
											<td style='color:white' class='cell'>:</td>
											<td style='color:white' class='cell'>₹ ".$totalCostWithTax."</td>
										</tr>";

								echo "</table>";
								echo "</center>";
								echo "<br>";
								echo "</div>";
								echo "<br><br><br><br><br>";

								
								$name='';
								$address='';
								$phone='';
								
								$customers=Customer::all();
								foreach($customers as $customer){
									if($customer->Email==$_SESSION['email']){
										$name=$customer->Name;
										$address=$customer->Address;
										$phone=$customer->Phone;
									}
								}

								echo "<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class='title text-center'>Shipping Details</h2>";
								echo "<div style='background-color:rgb(0,0,0,0.5)'>";
								echo "<center>";
								echo "<form action='http://localhost/Bakeology/public/placeOrder' method='get'>";
								echo "<table>";
									echo "<tr>
											<td style='color:white' class='cell'>NAME</td>
											<td style='color:white' class='cell'>:</td>
											<td style='color:white' class='cell'>".$name."</td>
										</tr>";

										echo "<tr>
											<td style='color:white' class='cell'>CONTACT NUMBER</td>
											<td style='color:white' class='cell'>:</td>
											<td style='color:white' class='cell'>".$phone."</td>
										</tr>";

										echo "<tr>
											<td style='color:white' class='cell'>SHIPPING ADDRESS</td>
											<td style='color:white' class='cell'>:</td>
											<td>
												<textarea name='shipping-address' required rows='3' cols='30' style='background-color:rgb(255,255,255,0.7);margin-left:30px'>".$address."</textarea>
											</td>
										</tr>";

										echo "<td colspan='3'><button style='margin-left:170px;margin-top:30px' type='submit'>Place Order</button></td>";


								echo "</table>";
								echo "</form>";
								echo "</center>";
								echo "<br>";
								echo "</div>";
								echo "<br><br><br><br><br>";
								
                        }
                        else{
							echo "<div class='cell' style='background-color:rgb(0,0,0,0.5)'>";
							echo "<p style='color:white'>Your Cart is currently empty...</p><tr><tr>";
							echo "<a style='color:orange' href='http://localhost/Bakeology/public/shop'>Wanna go shopping?</a>";
							echo "</div>";
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