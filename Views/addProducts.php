<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>Update Products</title>
    <style>
        .file{
        position:relative;
        font-size:13px;
        }
    </style>
</head> 
<body>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <form method="post" action="?controller=addProducts" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
                    <h2>Add Products</h2>
                <!-- <a class="navbar-brand" href="#"><img src="http://localhost/greenies/imagens/logo.svg" class="logo" alt=""
								srcset=""></a> -->
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder=" Product Name"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="stock" id="">
						<span class="focus-input100" data-placeholder="Stock"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="price" id="">
						<span class="focus-input100" data-placeholder="Price"></span>
					</div>
                    <div>
                    <label>
                        Product category
                        <select name="category"class="wrap-input100 validate-input">
                            <option class="focus-input100">Fruits</option>
                            <option class="focus-input100">Vegetables</option>
                        </select>
                    </label>
                    </div>
                        Product Photo
                    <div>
                        <input type="file" class="file" name="file">
                    </div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn" name="send">Add Product</button>
						</div>
					</div>
                    <div class="text-center p-t-115">
						<span class="txt1">
						</span>
<?php
    if(isset($message)){
        echo '<h5 role="alert">'.$message.'</h5>';
    }
?>
						<a href="?controller=admin" class="txt2" href="#">
							Return to admnistration area
						</a>
						<br>
						<a href="./" class="txt2" href="#">
							Return home
						</a>
					</div>
					</form>
					</div>
			</div>
		</div>
	</div>
</body>
<script src="loginFiles/js/main.js"></script>
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
</html>