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
        <button class="introBtn">Get to know our products<img src="http://localhost/greenies/images/seta.svg" alt=""></button>
      </div>
      <img src="http://localhost/greenies/images/pablo-healthy-life.png" class="img1" alt="ilustration">
    </section>
    <div class="grid-mobile">
      <header class="list">Our products</header>
        <section class="loja">
        <div class="produtos">
          <div class="secondNav">
            <div class="filterBtns">
              <button type="button" class="filterBtn" data-btn="All">All</button>
              <button type="button" class="filterBtn" data-btn="Veggies">Veggies</button>
              <button type="button" class="filterBtn" data-btn="fruits">Fruits</button>
            </div>
            <form class="search-container">
              <input type="text" placeholder="Search..." name="search">
              <img src="http://localhost/greenies/images/lupa.svg" alt="search">
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
      <form method="post" action="cart">
          <label>
            <input type="number" class="value" value = "1" min="1" max="'.$product["stock"].'" name="quantity">
            <input type="hidden" name="product_id" value="'.$product["product_id"].'">
            <input type="hidden" name="product_name" value="'.$product["name"].'">
            <input type="hidden" name="price" value="'.$product["price"].'">
            <input type="hidden" name="discount" value="'.$discount.'">
            <input type="hidden" name="oldPrice" value="'.$old_price.'">
            <button name="send" class="cartButtonAdd">ADICIONAR <img src="images/cartblue.svg" alt="cart" id="secondCart"></button>
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
  <script src="./js/script.js"></script>
</html>