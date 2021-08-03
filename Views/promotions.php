
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require("formIncludes.php");
?>
<title>Update Products</title>
</head>
<style>
    .file{
    position:relative;
    font-size:13px;
    }
    .text-center{
        padding-top:50px;
    }
</style>
<body>
<?php
    require("navbars/adminNav.php");
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="promotions" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
                        <h2> Promote Product </h2>
					</span>
					Product to Update
					<div class="wrap-input100 validate-input">
						<select name="product_name">
                        
	<?php
        foreach ($products as $product) {
            echo '<option>' .$product["name"]. '</option>';
        }
    ?>
						</select>
					</div>
                    <div class="wrap-input100 validate-input">
                        <h6 class="details">Discount Percentage</h6>
						<input class="input100" type="number" name="discountPercentage" id="">
						<span class="focus-input100"></span>
					</div>
					<input type="hidden" name="product_id" value="<?=$product["product_id"]?>">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn" name="send">Promote product</button>
						</div>
					</div>
                    <div class="text-center p-t-115">
						<span class="txt1">
						</span>
<?php
 if (isset($message)) {
     echo '<p role="alert" style="color:red;">';
     echo $message;
     echo '<p>';
 }
?>						<a href="admin" class="txt2" href="#">
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

