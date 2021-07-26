

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require("formIncludes.php");
?>
</head>
    
    <title>Update Products</title>
    <style>
        .file{
        position:relative;
        font-size:13px;
        }

        .text-center{
            padding-top:10px;
        }
    </style>
</head> 
<body>
<?php
    require("adminNav.php");
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <form method="post" action="?controller=addProducts" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
                    <h2>Add Products</h2>
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
 if (isset($message)) {
     echo '<p role="alert" style="color:red;">';
     echo $message;
     echo '<p>';
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
</html>