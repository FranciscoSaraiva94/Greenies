<?php

require("models/orderDetails.php");
require("models/orders.php");
require("models/products.php");

if (isset($_POST["send"])) {
    $ordersDetailsModel = new OrderDetails;
    $ordersModel = new Orders;
    $productsModel = new Products;
    $id = $_SESSION["user_id"];
    $email = $_POST["email"];
    $total = $_POST["total"];
    print_r($_POST);

    $insertOrder = $ordersModel->setOrder($id, $email, $total);

    foreach ($_SESSION["cart"] as $item) {
        $insertOrderDetail = $ordersDetailsModel->insertOrderDetails($item, $insertOrder);
        $updateStock = $productsModel->updateStock($item);
    }
}
