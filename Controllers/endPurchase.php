<?php

require("models/orderDetails.php");
require("models/orders.php");
require("models/products.php");
require("models/users.php");


if (isset($_POST["send"]) &&
    isset($_SESSION["cart"]) &&
    !empty($_POST["card_name"])&&
    !empty($_POST["number"])&&
    !empty($_POST["CV"])&&
    mb_strlen($_POST["card_name"]) > 3&&
    mb_strlen($_POST["card_name"]) < 60 &&
    (int)$_POST["number"] &&
    is_numeric($_POST["total"]) &&
    mb_strlen($_POST["number"]) >= 11&&
    mb_strlen($_POST["number"]) <= 19 &&
    filter_var($_POST["card-email"], FILTER_VALIDATE_EMAIL)
) {
    $ordersDetailsModel = new OrderDetails;
    $ordersModel = new Orders;
    $productsModel = new Products;
    $usersModel = new Users;
    $id = $_SESSION["user_id"];
    $email = $_POST["card-email"];
    $total = $_POST["total"];
    $getAddress = $usersModel->getAddress($id);
    $insertOrder = $ordersModel->setOrder($id, $email, $total);
    foreach ($_SESSION["cart"] as $item) {
        $insertOrderDetail = $ordersDetailsModel->insertOrderDetails($item, $insertOrder);
        $updateStock = $productsModel->updateStock($item);
    }
    unset($_SESSION["cart"]);
    require("views/endPurchase.php");
} else {
    echo '400 Bad Request';
}
