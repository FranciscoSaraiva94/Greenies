<?php


require_once("models/products.php");
require_once("models/promotions.php");


$productsModel = new Products();
$promosModel = new promotions();

$products = $productsModel->seeProducts();
$promotions = $promosModel->getPromos();
$Promotions = $productsModel->checkPromo();

$cart_items = 0;

if (isset($_SESSION["cart"])) {
    $cart_items = $cart_items + count($_SESSION["cart"]);
}

require("views/home.php");
