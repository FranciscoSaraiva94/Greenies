<?php

require("models/products.php");

$productsModel = new Products();

if($_SESSION["user_type"] === "user"){
    header("Location: ./");
    exit;
}

if(isset($_POST["send"])) {
    $file = $_FILES["file"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file["type"];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ["jpg", "jpeg", "png", "pdf"];

    if(in_array($fileActualExt, $allowed) ){

        if($fileError === 0){
            if($fileSize < 5000000) {
               $fileNameNew = uniqid('', true).".".$fileActualExt;
               $fileDestination = './imagens/'.$fileNameNew;
               move_uploaded_file($fileTmpName, $fileDestination);

            $product = $productsModel->createProduct($_POST, $fileDestination);
               $message = 'O produto '.$_POST["name"]. " foi adicionado corretamente";
            }else{
                echo 'file is too big';
            }
        }else{
            echo 'there was an error';
        }
    }else{
        echo 'you cannot upload files of this type';
    }
}
require("views/addProducts.php");

