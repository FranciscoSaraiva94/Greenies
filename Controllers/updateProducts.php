<?php

if (!$_SESSION["user_type"] || $_SESSION["user_type"]  === "user") {
    header("Location: ./");
    exit;
}
require("models/products.php");
require("models/promotions.php");

$productsModel = new Products();
$promosModel= new promotions();

$products = $productsModel->seeProducts();
if (
    isset($_POST["send"]) &&
    !empty($_POST["stock"]) || !empty($_POST["price"])) {
    if ($_POST["price"] === "") {
        $getPrice = $productsModel->getPrice($_POST["product_name"]);
        $noDiscountPrice = $getPrice;
    }
    $file = $_FILES["file"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file["type"];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ["jpg", "jpeg", "png", "pdf", ""];
    if (in_array($fileActualExt, $allowed)) {
        $discountPercentage = $promosModel->getPercentage($_POST["product_name"]);
        $product = $productsModel->noImageUpdate($_POST);
        $noDiscountPrice = $_POST["price"];
        $id = $productsModel->getId($_POST["product_name"]);
        $discountPercentage = $discountPercentage["discountPercentage"];
        $discountPrice = ($discountPercentage / 100) * $noDiscountPrice;
        $actualPrice = $noDiscountPrice - $discountPrice;
        $message = 'The product with the name ' .$_POST["product_name"].' was updated successfully';
        if ($fileSize < 10) {
            if ($discountPercentage) {
                $updatePromoPrice = $promosModel->updatePromoPrice($id, $discountPercentage, $noDiscountPrice, $actualPrice, $_POST["product_name"]);
                $message;
            } else {
                $product = $productsModel->noImageUpdate($_POST);
                $message;
            }
        } else {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = './images/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            $product = $productsModel->updateProducts($_POST, $fileDestination);
            $message;
        }
    } else {
        $message = 'you cannot upload files of this type';
    }
}
    require("views/updateProducts.php");
