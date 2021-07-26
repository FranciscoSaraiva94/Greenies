<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Greenies</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body {
  margin: 0;
}
.topnav {
  overflow: hidden;
  background: #82b5a5;
  position:sticky;
  text-decoration:none;
  
}

.topnav a {
  float: left;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 20px;
  text-decoration:none !important;
}

.leftNav{
    float:right;
    font-size: 17px;
    padding: 5px 14px;
}
.topnav a{
    color:white;
}

.leftNav:hover {
  color: #FFF !important;

}
@media only screen and (max-width: 700px) {
    .logo{
        display:none
    }
    .top nav a{
        margin:auto;
        font-size:15px;
    }
    .leftNav a{
        font-size:1.5rem;
        text-align:center;
    }
  }
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
<a href="#"><img src="http://localhost/greenies/imagens/logo.svg" class="logo" alt="" srcset=""></a>
<div class="leftNav">
  <?php
   if (isset($_SESSION["name"])) {
       ?>
    <a href="./">Home</a>
    <a href=""class="loggedUser"><?=$_SESSION["name"]?></a>
    <a href="?controller=logout">Logout</a>
<?php
   if ($_SESSION["user_type"] === "admin") {
       ?>
        <a href="?controller=admin">AdminArea</a>
<?php
   } ?>
<?php
   } else {
       ?>
   <a href="?controller=access&action=login">Login</a>
<?php
   }
?>
        </ul>
      </div>
</nav>
</div>
</script>

</body>
</html>