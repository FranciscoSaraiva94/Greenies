<?php

require("models/products.php");

    $productsModel = new Products();
    $products = $productsModel->seeProducts();

    if(isset($_POST["send"])){
        $deletedProduct = $productsModel->deleteProduct($_POST);   
        $message = 'O produto ' .$_POST["product_name"].' foi removido com sucesso';
    }   

    require("views/deleteProducts.php");
?>
