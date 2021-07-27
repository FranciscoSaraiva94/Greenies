<?php
    require("navbars/homeNav.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
 
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
  foreach ($products as $product) {
      $discount = 0;
      $old_price = $product["price"];
      foreach ($promotions as $promotion) {
          if (array_key_exists("product_id", $promotion) && $promotion["product_id"] === $product["product_id"]) {
              $discount = $promotion["discountPrice"];
          } else {
          }
      }
      echo'
    <article class="menu-item">
            <img class="photo" src="'.$product["photo"].'">
            <div class="itemInfo">
            <h4 class="nomeDoProduto">'.$product["name"].'</h4>';
      if ($discount) {
          echo '<h4 class="precoDoProduto text-primary"><s><small>'.$product["price"].'€ </small></s>'.$discount.'€/kg</h4>';
          $product["price"] = $discount;
      } else {
          echo '<h4 class="precoDoProduto">'.$product["price"].'€/kg</h4>';
      }
      echo '
      <form method="post" action="?controller=cart">
          <label>
            <input type="number" class="value" value = "1" min="1" max="'.$product["stock"].'" name="quantity">
            <input type="hidden" name="product_id" value="'.$product["product_id"].'">
            <input type="hidden" name="product_name" value="'.$product["name"].'">
            <input type="hidden" name="price" value="'.$product["price"].'">
            <input type="hidden" name="discount" value="'.$discount.'">
            <input type="hidden" name="oldPrice" value="'.$old_price.'">
            <button name="send" class="cartButtonAdd">ADICIONAR <img src="imagens/cartblue.svg" alt="cart" id="secondCart"></button>
          </label>
        </form>
    </article>      
    ';
  }
?>

</div>
     
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