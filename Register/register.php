<?php

	require("../config.php");
	if(isset($_POST["send"])) {
		if(
			filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
			$_POST["password"] === $_POST["repeat_password"] 

		){
				$query = $db->prepare("
				
				INSERT INTO USERS
				(email, password, name)
				VALUES (?,?,?)
				");

				$query->execute([
					$_POST["email"],
					password_hash($_POST["password"], PASSWORD_DEFAULT),
					$_POST["name"]
				]);	

				header("Location:http://localhost/greenies/Login/login.php");
				
			}
			else{
				echo "dados mal preenchidos";
			}
	}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="http://localhost/greenies/Register/Register.php"class= "login100-form validate-form">
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
						<a href="http://localhost/greenies/Login/login.php" class="txt2" href="#">
							Login
						</a>
						<br>
						<a href="/greenies/index/" class="txt2" href="#">
							Return home
						</a>
					</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>

</html>