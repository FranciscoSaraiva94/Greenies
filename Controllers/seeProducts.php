<?php
require("models/products.php");

if (!$_SESSION["user_type"] || $_SESSION["user_type"]  === "user") {
    header("Location: ./");
    exit;
}


$productsModel = new Products();

$products = $productsModel->seeProducts();

require("views/seeProducts.php");
