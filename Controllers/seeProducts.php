<?php

if (!$_SESSION["user_type"] || $_SESSION["user_type"]  === "user") {
    header("Location: ./");
    exit;
}
require_once("models/products.php");
require_once("models/promotions.php");
$productsModel = new Products();
$promosModel = new Promotions();

$products = $productsModel->seeProducts();
$promotions = $productsModel->checkPromos();


require("views/seeProducts.php");
