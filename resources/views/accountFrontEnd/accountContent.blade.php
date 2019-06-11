<?php
	session_start();
	
	use App\Customer;

	$name='';
	$address='';
	$phone='';
	$password='';
	$email='';

	if(!isset($_SESSION['email'])){
		echo "<script>
                        window.location='http://localhost/Bakeology/public/';
                    </script>";
	}
	else{
		$email=$_SESSION['email'];
		$customers=Customer::all();
		foreach($customers as $customer){
			if($customer->Email==$email){
				$name=$customer->Name;
				$address=$customer->Address;
				$phone=$customer->Phone;
				$password=$customer->Password;
		}
	}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bakeology - My Account</title>
	<link rel="shortcut icon" href="{{asset('frontEnd')}}/images/logo.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('signupFrontEnd')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('{{asset('signupFrontEnd')}}/images/back6.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form action="{{route('customer.editCustomer')}}" method="get" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						My Account
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<?php
						echo"<input class='input100' readonly type='text' value='".$name."' name='name' placeholder='Name...'>"
						?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<?php
						echo"<input class='input100' readonly type='text' value='".$email."' name='email' placeholder='Email addess...'>"
						?>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">New Password</span>
						<?php
						echo"<input class='input100'  type='password' value='".$password."' id='pass' name='pass' placeholder='********'>"
						?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password doesn't match">
						<span class="label-input100">Repeat Password</span>
						<?php
						echo"<input class='input100'  type='password' value='".$password."' id='repeat-pass' name='repeat-pass' placeholder='********'>"
						?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid 10 digit number is required">
						<span class="label-input100">Contact-Number</span>
						<?php
						echo"<input class='input100'  type='text' value='".$phone."' name='contact-number' placeholder='Contact Number...'>"
						?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<span class="label-input100">Address</span>
						<?php
						echo"<input class='input100'  type='text' value='".$address."' name='address' placeholder='Address...'>"
						?>
						<span class="focus-input100"></span>
					</div>

		

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Save Changes
							</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{asset('signupFrontEnd')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('signupFrontEnd')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('signupFrontEnd')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('signupFrontEnd')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('signupFrontEnd')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('signupFrontEnd')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{asset('signupFrontEnd')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('signupFrontEnd')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('signupFrontEnd')}}/js/main.js"></script>

</body>
</html>