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
    $product =   $productsModel->seeProduct($_POST);
    $promo   =   $promosModel->setPromo($_POST, $product);
    $promotedProduct = $promosModel->getPromo($product);
    echo '<pre> Percentagem de desconto : ';
    print_r($promotedProduct["discountPercentage"]);
    echo '</pre>';
    echo '<pre>';
    print_r($product["price"]);
    echo '</pre>';
    if ($promotedProduct["name"] === $product["name"]) {
        $discountPer = ($promotedProduct["discountPercentage"] / 100) * $product["price"];
        $actualPrice = $product["price"] - $discountPer;
        $discountedPrice = $promosModel->insertNewPrice($actualPrice, $promotedProduct["name"], $product["name"]);
        $message = 'It was applied a '.$promotedProduct["discountPercentage"].'% discount on the product '.$promotedProduct["name"].'. The new price is '.$actualPrice.'€/kg';
    }
}


require("views/promotions.php");
