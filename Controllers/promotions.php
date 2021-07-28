<?php

if (!$_SESSION["user_type"] || $_SESSION["user_type"]  === "user") {
    header("Location: ./");
    exit;
}
require("models/products.php");

$productsModel = new Products();
//display os items no select//
$products = $productsModel->seeProducts();


if (isset($_POST["send"])) {
    require("models/promotions.php");
    $promosModel = new promotions();
    $product = $productsModel->seeProduct($_POST);
    $discountPercentage = $_POST["discountPercentage"];
    $price = $product["price"];
    $name  = $product["name"];
    $id    = $product["product_id"];
    $promotedPrice = ($discountPercentage / 100) * $price;
    $actualPrice = $price - $promotedPrice;
    $promosModel = new promotions();
    $promo = $promosModel->setPromo($id, $price, $discountPercentage, $actualPrice, $name);
}


require("views/promotions.php");
