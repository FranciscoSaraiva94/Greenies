<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="registerFiles/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="registerFiles/css/util.css">
	<link rel="stylesheet" type="text/css" href="registerFiles/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="?controller=access&action=register"class= "login100-form validate-form">
					<span class="login100-form-title p-b-48">
						<img src="http://localhost/greenies/imagens/logo.svg"></a>
					</span>
						<label class="wrap-input100 validate-input">
							<input class="input100" type="text" name="name" required>
							<span class="focus-input100" data-placeholder="Nome"></span>
					</label>
					</span>
						<label class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
							<input class="input100" type="email" name="email" required>
							<span class="focus-input100" data-placeholder="Email"></span>
					</label>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" name="morada" required>
						<span class="focus-input100" data-placeholder="Address"></span>
					</label>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" name="postal_code" required>
						<span class="focus-input100" data-placeholder="Postal_code"></span>
					</label>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" name="phone" required>
						<span class="focus-input100" data-placeholder="Phone"></span>
					</label>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" name="City" required>
						<span class="focus-input100" data-placeholder="City"></span>
					</label>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Country" required>
						<span class="focus-input100" data-placeholder="Country"></span>
					</label>
					<label class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" required name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</label>
					<label class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" required name="repeat_password">
						<span class="focus-input100" data-placeholder="Repeat password"></span>
					</label>
					<input type="text">
					<label class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="send" class="login100-form-btn">
								Register
							</button>
						</label>
					</div>
					</form>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already Have an account?
						</span>
						<a href="?controller=access&action=login" class="txt2" href="#">
							Login
						</a>
						<br>
						<a href="?controller=home.php" class="txt2" href="#">
							Return home
						</a>
					</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="registerFiles/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="registerFiles/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="registerFiles/vendor/bootstrap/js/popper.js"></script>
	<script src="registerFiles/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="registerFiles/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="registerFiles/vendor/daterangepicker/moment.min.js"></script>
	<script src="registerFiles/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="registerFiles/js/main.js"></script>
</body>

</html>