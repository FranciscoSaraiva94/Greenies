<?php
require("models/products.php");
require("models/promotions.php");

$productsModel = new Products();

// display os items no select //
$products = $productsModel->seeProducts();
$promosModel = new promotions();


if(isset($_POST["send"])){
    $product =   $productsModel->seeProduct($_POST);
    $promo   =   $promosModel->setPromo($_POST, $product);
}

require("views/promotions.php");





