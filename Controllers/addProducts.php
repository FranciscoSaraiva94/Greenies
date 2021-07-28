<?php


if (!$_SESSION["user_type"] || $_SESSION["user_type"]  === "user") {
    header("Location: ./");
    exit;
}

require("models/products.php");


$productsModel = new Products();

if (isset($_POST["send"])) {
    $file = $_FILES["file"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file["type"];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ["jpg", "jpeg", "png", "pdf"];

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = './images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            
                print_r($fileDestination);
                print_r($_POST);
                $product = $productsModel->createProduct($_POST, $fileDestination);

                $message = 'The product '.$_POST["name"]. " was added correctly";
            } else {
                $message ='file is too big';
            }
        } else {
            $message = 'there was an error';
        }
    } else {
        $message = 'you cannot upload files of this type';
    }
}

require("views/addProducts.php");
