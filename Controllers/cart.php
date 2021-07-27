<?php

require("models/products.php");


$productsModel = new Products();


if (isset($_POST["send"])) {
    if (
        !empty($_POST["quantity"]) &&
        !empty($_POST["product_id"]) &&
        is_numeric($_POST["quantity"]) &&
        is_numeric($_POST["product_id"])&&
        $_POST["quantity"] >= 1
    ) {
        $product = $productsModel->cartProducts($_POST);
        if (!empty($product)) {
            $_SESSION["cart"][$product["product_id"] ]= [
                "quantity"      => (int)$_POST["quantity"],
                "name"          => $product["name"],
                "product_id"    => $product["product_id"],
                "price"         => $_POST["price"],
                "stock"         => $product["stock"],
                "discount"      => $_POST["discount"],
                "old_price"     => $_POST["oldPrice"]
            ];
        }
        header("Location: ?controller=cart");
    }
}
require("views/cart.php");
