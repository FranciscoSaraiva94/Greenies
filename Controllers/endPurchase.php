<?php

require_once("models/orderDetails.php");
require_once("models/orders.php");
require_once("models/products.php");
require_once("models/users.php");


if (!$_SESSION["user_type"]) {
    header("Location: ./");
    exit;
}
if (
    isset($_POST["send"]) &&
    isset($_SESSION["cart"]) &&
    !empty($_POST["card_name"])&&
    !empty($_POST["number"])&&
    !empty($_POST["CV"])&&
    !empty($_POST["total"])&&
    !empty($_POST["year"])&&
    $_POST["year"] >= date("Y") &&
    !empty($_POST["month"])&&
    $_POST["month"] <= 12 &&
    $_POST["month"] >= 1 &&
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
    $_SESSION["email"] = $email;
    require("controllers/mailer.php");
    unset($_SESSION["cart"]);
} else {
    echo 'preencha os dados corretamente';
}
