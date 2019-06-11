<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bakeology</title>
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

<h2 style='font-size:32px;text-shadow: 0 0 3px #302D29, 0 0 5px #302D29;' class="title text-center">FAQs</h2>



<div style="background-color: rgb(0,0,0,.5);">
<ol type="1" style="color: white" font-weight="bold">

<li><p style="color: white"><b>How far in advance do I need to order my cake?</b> House cakes can be ordered with 48 hours advance notice.Maximum 5-6 hours of time will be taken prior to the delivery after you place the order.The sooner you contact us, the better.</p></li>

<br>

<li><p style="color: white"><b>Do we need to keep the cake refrigerated or can it sit out at room temperature? </b> Our cakes should be refrigerated.  We recommend taking them out 1-1 1/2 hours before serving for better flavor.</p></li>

<br>

<li><p style="color: white"><b>Do you ship? </b> No, unfortunately we do not ship our products.</p></li>

<br>

<li><p style="color: white"><b>Do you have vegan products?  </b> We have a very limited selection of vegan products - many of our breads are vegan.</p></li>

<br>

<li><p style="color: white"><b>Will you make me a cake from my own recipe?   </b> No, unfortunately we are unable to make custom recipes.</p></li>

<br>

<li><p style="color: white"><b>Do you have vegan products?  </b> We have a very limited selection of vegan products - many of our breads are vegan.</p></li>

<br>

<li><p style="color: white"><b>What methods of payment do you accept?   </b>  Our online website at this point is limited to cash on delivery mode of payment.</p></li>

<br>

<li><p style="color: white"><b>Can I order breads and cookies and pastries online?    </b> Ofcourse, you can order them online as you do it for pastries and cakes they will be delivered to you.</p></li>

<br>

<li><p style="color: white"><b>Can we change our billing address at the time of delivery to deliver the product at different spot?</b> Yes at the time of placing order the billing address can be changed and it can be set to destination where you want to deliver the product.</p></li>

<br>

<li><p style="color: white"><b>What happens if I'm not home to receive my delivery?</b> While Magnolia Bakery does not require a signature for your delivery, we can only guarantee the quality of our product if it is received by the shipping time selected by the customer at the time of purchase. According to FedEx policy, their drivers will only leave the package at a recipient’s door, or other secure location, if the driver believes it is ‘safe’ and reasonable to do so.  </p></li>

<br>



</ol>
</div>
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