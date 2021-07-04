<?php

require("models/products.php");

$productsModel = new Products();

    if(isset($_POST["send"])){
        $product = $productsModel->updateProducts($_POST);   
        $message = 'The product with the id '.$_POST["product_id"].' and with the name of ' .$_POST["name"].' was updated successfully';
    }   

    require("views/updateProducts.php");
?>