<?php

require("models/products.php");


// no printing strings or else gg json

header("Content-type: application/json");

if(!isset($_POST["request"])){
    header("HTTP/1.1 400 Bad Request");
    die ('{"status":"Error"}');
}

if (
    $_POST["request"] === "removeProduct" &&
    !empty($_POST["product_id"]) &&
    is_numeric($_POST["product_id"])

) {
    unset($_SESSION["cart"][(int)$_POST["product_id"] ]);
    echo '{"status":"OK"}';
}
else if (
    $_POST["request"] === "changeQuantity" &&
    !empty($_POST["product_id"]) &&
    is_numeric($_POST["product_id"]) &&
    !empty($_POST["quantity"]) &&
    is_numeric($_POST["quantity"]) &&
    (int)$_POST["quantity"] > 0
) {
    $productsModel = new Products();
    $product = $productsModel->updateQuantities($_POST);
    if(!empty($product)) {
        
        $_SESSION["cart"][$product["product_id"]]["quantity"] = (int)$_POST["quantity"];
   
        echo '{"status":"OK"}';
   
       }
   };
