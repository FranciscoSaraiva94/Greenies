
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginFiles/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="?controller=access&action=login" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
						<a class="navbar-brand" href="#"><img src="http://localhost/greenies/imagens/logo.svg" class="logo" alt=""
								srcset=""></a>
					</span>
					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="send" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					</form>
					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>
						<a href="?controller=access&action=register" class="txt2" href="#">
							Sign Up
						</a>
						<br>
						<a href="./" class="txt2" href="#">
							Return home
						</a>
					</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="loginFiles/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginFiles/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginFiles/vendor/bootstrap/js/popper.js"></script>
	<script src="loginFiles/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginFiles/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginFiles/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginFiles/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="loginFiles/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="loginFiles/js/main.js"></script>

</body>

</html>