<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Greenies</title>
  <link rel="stylesheet" href="homeFiles/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

</head>

<body>


<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
 
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>

          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="http://localhost/greenies/imagens/logo.svg" class="logo" alt="" srcset=""></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav" id="navItems">
          <li><a href="#">Produtos <span class="sr-only"></span></a></li>
          <li><a href="#">Publicações</a></li>
          <li><a href="#">Contactos</a></li>
       
<?php
   if (isset($_SESSION["name"])) {
       ?>
  <li>
    <a href=""class="loggedUser"><?=$_SESSION["name"]?></a>
  </li>
    <li><a href="?controller=logout"class="logout">Logout</a>
  </li>
<?php
   if ($_SESSION["user_type"] === "admin") {
       ?>
        <li><a href="?controller=admin"class="admin">AdminZone</a></li>
<?php
   } ?>
<?php
   } else {
       ?>
   <li><a href="?controller=access&action=login">Login</a></li>
<?php
   }
?>
     <li class="carrinho"><a href="?controller=cart"><img src="imagens/cartblack.svg">(<?=$cart_items?>)</a></li>
        </ul>
      </div>
  </nav>
  <p>
  </p>
  <main>
    <section class="intro">
      <div class="texto">
        <h1 class="frase">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</h1>
        <button class="introBtn">Conheça os nossos produtos <img src="http://localhost/greenies/imagens/seta.svg" alt=""></button>
      </div>
      <img src="http://localhost/greenies/imagens/pablo-healthy-life.png" class="img1" alt="ilustration">
    </section>

  <!--
    <header class="list" id="promotions">As nossas promoções</header>
    <div class="carousel">
      <section class="main-carousel">
        <div class="carousel-cell">
          <img src="./imagens/promotionEsparg.png">
        </div>
        <div class="carousel-cell">
          <img src="imagens/promotionbanana.png">
        </div>
        <div class="carousel-cell">
          <img src="imagens/promotionkiwi.png">
        </div>
      </section>
    </div>
-->
    <div class="grid-mobile">
      <header class="list">Os nossos produtos</header>
      <section class="loja">
        <div class="produtos">
          <div class="secondNav">
            <div class="filterBtns">
              <button type="button" class="filterBtn" data-btn="todos">Todos</button>
              <button type="button" class="filterBtn" data-btn="legumes">Legumes</button>
              <button type="button" class="filterBtn" data-btn="frutas">Frutas</button>
            </div>
            <form class="search-container">
              <input type="text" placeholder="Procurar..." name="search">
              <img src="http://localhost/greenies/imagens/lupa.svg" alt="search">
            </form>
          </div>
        </div>
    </div>
    <div class="itemSection">

<?php

$product_price = 0;

  foreach ($products as $product) {
      $product_price = $product["price"];
      foreach ($promotions as $promotion) {
          if (isset($product["name"]) && $product["name"] === $promotion["name"]) {
              $product_price = $promotion["discountPrice"];
          } else {
              $product_price = $product["price"];
          }
      }
      echo
    '<article class="menu-item">
            <img class="photo" src="'.$product["photo"].'">
            <div class="itemInfo">
            <h4 class="nomeDoProduto">'.$product["name"].'</h4>
            <h4 class="precoDoProduto">'.$product_price.'€/kg
            </h4>
      <form method="post" action="?controller=cart">
          <label>
            <input type="number" class="value" value = "1" min="1" max="'.$product["stock"].'" name="quantity">
            <input type="hidden" name="product_id" value="'.$product["product_id"].'">
            <input type="hidden" name="product_name" value="'.$product["name"].'">
            <input type="hidden" name="price" value="'.$product_price.'">
            <button name="send" class="cartButtonAdd">ADICIONAR <img src="imagens/cartblue.svg" alt="cart" id="secondCart"></button>
          </label>
        </form>
    </article>      
    ';
  }
?>

<!--
<div class="cartButtons">
      <div class="minusAndAdd">
        <button type="button" class="cartButtonMinus">-</button>
        <h5 class="itemQuantity">0</h5>
        <button type="button" class="cartButtonPlus" id="add" alt="" srcset="">+</button>
      </div>
  -->
</div>
      <!--<article class="menu-item">
          <img src="./imagens/alface.jpg" alt="menu item" class="photo"/>
          <div class="itemInfo">
              <h4 class="nomeDoProduto">Alface</h4>
              <h4 class="precoDoProduto">€/kg</h4>
               <div class="cartButtons">
                   <div class="minusAndAdd">
                        <button class="cartButtonMinus">-</button>
                        <h5 class="itemQuantity">0</h5>
                        <button class="cartButtonPlus" id="add" alt="" srcset="">+</button>
                   </div>  
              <button class="cartButtonAdd">ADICIONAR <img src="/imagens/cartblue.svg" alt="cart" id="secondCart"></button>
            </div>
          </div>
        </article>      
         -->
    </div>
  </main>

  <div class="footer">
    <p>Todos os direitos reservados © Greenies 2021</p>
  </div>
</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="script.js"></script>
</html>