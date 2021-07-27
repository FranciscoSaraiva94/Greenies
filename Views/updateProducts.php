
<!DOCTYPE html>
<html lang="en">
<?php
    require("formIncludes.php");
?>
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
				<form method="POST" action="?controller=updateProducts" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
                    <h2> Update Products </h2>
                <!-- <a class="navbar-brand" href="#"><img src="http://localhost/greenies/imagens/logo.svg" class="logo" alt=""
								srcset=""></a> -->
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
						<input class="input100" type="text" name="stock" id="">
						<span class="focus-input100" data-placeholder="New Stock"></span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="price" id="">
						<span class="focus-input100" data-placeholder="New Price"></span>
					</div>
                        New photo
                    <div>
                        <input type="file" class="file" name="file">
                    </div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn" name="send">Update product</button>
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
?>						<a href="?controller=admin" class="txt2" href="#">
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
</html>