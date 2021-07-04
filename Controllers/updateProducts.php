<?php

require("models/products.php");

$productsModel = new Products();

    if(isset($_POST["send"])){
        $product = $productsModel->updateProducts($_POST);   
        $message = 'O produto com o id '.$_POST["product_id"].' e com o nome ' .$_POST["name"].' foi alterado com sucesso';
    }   

    require("views/updateProducts.php");
?>