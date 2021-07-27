<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.topnav {
  overflow: hidden;
  background: #82b5a5;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  position:sticky;
  text-decoration:none;
  font-size:300px;
}

.topnav a {
  float: left;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 20px;
}

.leftNav{
    float:right;
    font-size: 30px;
    padding: 5px 14px;
}
.topnav a{
    color:white !important;
 
}
.leftNav:hover {
  color: black;
}
@media only screen and (max-width: 600px) {
    .logo{
        display:none
    }
    .topnav{
        display:flex;
    }
    .topnav a{
        position:relative;
        text-align:center;
        font-size:20px;
    }
}
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
<a href="./"><img src="http://localhost/greenies/imagens/logo.svg" class="logo" alt="" srcset=""></a>
<div class="leftNav">
  <a href="./">Home</a>
  <a href="?controller=admin">AdminArea</a>
<?php

   if (isset($_SESSION["name"])) {
       ?>
     <a><?=$_SESSION["name"]?></a>
     <a href="?controller=logout">Logout</a>

<?php
   } else {
       die();
   }
?>
</div>
</div>
</script>

</body>
</html>