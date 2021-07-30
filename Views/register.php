<?php
    include("formIncludes.php")
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../loginFiles/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../main.css">
<style>
         
    .details{
        color:black;
    }
    .text-center{
            padding-top:50px;
    }
</style>
	<title>Register</title>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="register"class= "login100-form validate-form">
					<span class="login100-form-title p-b-48">
						<img src="http://localhost/greenies/images/logo.svg"></a>
					</span>
						<label class="wrap-input100 validate-input">
                        <h6 class="details">Name</h6>
							<input class="input100" type="text" name="name" required>
							<span class="focus-input100"></span>
					</label>
					</span>
                            <h6 class="details">Email</h6>  
						<label class="wrap-input100 validate-input">
							<input class="input100" type="email" name="email" required>
							<span class="focus-input100"></span>
					</label>
                    <h6 class="details">Address</h6>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" name="address" required>
						<span class="focus-input100"></span>
					</label>
                    <h6 class="details">Postal_code</h6>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" name="postal_code" required>
						<span class="focus-input100"></span>
					</label>
                    <h6 class="details">Phone</h6>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" required name="phone" required>
						<span class="focus-input100"></span>
					</label>
                    <h6 class="details">City</h6>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" required name="city" required>
						<span class="focus-input100"></span>
					</label>
                    <h6 class="details">Country</h6>
					<label class="wrap-input100 validate-input">
						<input class="input100" type="text" required name="country" required>
						<span class="focus-input100"></span>
					</label>  
                    <h6 class="details">Password</h6>
					<label class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" required name="password">
						<span class="focus-input100"></span>
					</label>
                    <h6 class="details">Repeat Password</h6>
					<label class="wrap-input100 validate-input" required data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" required name="repeat_password">
						<span class="focus-input100"></span>
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
						<a href="login" class="txt2" href="#">
							Login
						</a>
						<br>
						<a href="../" class="txt2" href="#">
							Return home
						</a>
					</div>
			</div>
		</div>
	</div>
</body>

</html>