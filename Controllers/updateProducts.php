<?php

require("models/products.php");

$productsModel = new Products();

$products = $productsModel->seeProducts();

    if(isset($_POST["send"])){
        $product = $productsModel->updateProducts($_POST);   
        $message = 'The product with the name ' .$_POST["product_name"].' was updated successfully';
    }   

    require("views/updateProducts.php");
?>