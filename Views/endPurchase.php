<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
    require("navbars/checkoutNav.php");
?>
    <style>
        .jumbotron{
            background-color:white;
        }
        .btn-primary{
            background-color:#15ca52;
        }
    </style>
<div class="jumbotron text-center">
  <h1 class="display-5">Thank You <?=$_SESSION["name"]?>!</h1>
  <p class="lead"><strong>An invoice</strong> with the details of your most recent purchase has been sent to your         <strong>e-mail<strong>
  </p>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="./" role="button">Continue to homepage</a>
  </p>
</div>
    
</body>
</html>
