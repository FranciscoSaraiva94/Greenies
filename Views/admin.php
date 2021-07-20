<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    <style>

        ul{
            text-align:center;
        }
      
        .logo{
            position: relative;
            left: 70%;
        }
        .h2{
            position: relative;
            left: 70%;
        }

}
    </style>
</head>
<body>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <a class="navbar-brand" href="#"><img src="http://localhost/greenies/imagens/logo.svg" class="logo" alt=""
								srcset=""></a> 
            <article enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
                    <h2>Admin Area</h2>
					</span>
                    <ul>
                            <li><a href="?controller=addProducts">Add Products</a></li>
                            <li><a href="?controller=deleteProducts">Delete products</a></li>
                            <li><a href="?controller=updateProducts">Update Products</a></li>
                            <li><a href="?controller=seeProducts">See current Products</a></li>
							<li><a href="?controller=promotions">Promote Products</a></li>
                            <li><a href="./">Return to the main page</a></li>
                     </ul>
            </article>
            
					</div>
			</div>
		</div>
        
	</div>

    </nav>
</div>
</form>
</body>
</html>