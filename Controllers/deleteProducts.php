<?php

if (!$_SESSION["user_type"] || $_SESSION["user_type"] === "user") {
    header("Location: ./");
    exit;
}

require("models/products.php");
$productsModel = new Products();
$products = $productsModel->seeProducts();

if (isset($_POST["send"])) {
    $deletedProduct = $productsModel->deleteProduct($_POST);
    $message = 'The product ' . $_POST["product_name"] . ' was removed successfully';
}

require("views/deleteProducts.php");
