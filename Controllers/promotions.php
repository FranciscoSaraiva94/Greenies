<?php

if (!$_SESSION["user_type"] || $_SESSION["user_type"]  === "user") {
    header("Location: ./");
    exit;
}
require("models/products.php");

$productsModel = new Products();

$products = $productsModel->seeProducts();

if (isset($_POST["send"]) &&
    is_numeric($_POST["discountPercentage"]) &&
    $_SESSION["user_type"] === "admin" &&
    !empty($_POST["discountPercentage"])
) {
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
    $message = 'The product ' .$name. ' is now being promoted with a new price of ' .$actualPrice. '€';
}

require("views/promotions.php");
