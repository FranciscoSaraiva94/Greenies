
<?php
    include("formIncludes.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
    <style>
        .text-center{
            padding-top:50px;
        }

    .details{
        color:black;
        padding-bottom:10px;
    }
    </style>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="?controller=access&action=login" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
						<a class="navbar-brand" href="#"><img src="http://localhost/greenies/images/logo.svg" class="logo" alt=""
								srcset=""></a>
					</span>
					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <h6 class="details">Please enter your e-mail</h6>
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
					</div>
                    <h6 class="details">Please enter your password</h6>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="send" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				<div class="text-center p-t-115">
<?php
    if (isset($message)) {
        echo '<p role="alert" style="color:red;">';
        echo $message;
        echo '<p>';
    }
?>
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
</body>

</html>