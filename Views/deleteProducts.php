
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("formIncludes.php")
?>
</head>
<body>
<?php
    require("navbars/adminNav.php");
?>
    <style>
        .text-center{
            padding-top:50px;
        }
    </style>
    
<form action="?controller=deleteProducts" method="post">	
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="?controller=updateProducts" class="login100-form validate-form">
                    <span class="login100-form-title p-b-48">
                    <h2>Delete Products</h2>
                    </span>
            Product to Remove
                    <div class="wrap-input100 validate-input">
                    <select name="product_name">
<?php
    foreach ($products as $product) {
        echo '<option>' .$product["name"]. '</option>';
    }
?>
                        </select>
                    </div>
                <div>
                    <label>
                    Reason to remove
                    <select name="reason"class="wrap-input100 validate-input">
                        <option class="focus-input100">No stock</option>
                        <option class="focus-input100">dislike Vegetables</option>
                    </select>
                </label>
            </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn" name="send">Delete Product</button>
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
