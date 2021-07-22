<?php


if (!$_SESSION["user_type"] || $_SESSION["user_type"]  === "user") {
    header("Location: ./");
    exit;
}

require("models/products.php");

$productsModel = new Products();

require("views/admin.php");
