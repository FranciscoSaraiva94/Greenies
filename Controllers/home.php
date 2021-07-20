<?php


require("models/products.php");

$productsModel = new Products();

$products = $productsModel->seeProducts();

$cart_items = 0;

if(isset($_SESSION["cart"])){
    $cart_items = $cart_items + count($_SESSION["cart"]);
}

require("views/home.php");
?>