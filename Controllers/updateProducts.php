<?php

require("models/products.php");


$productsModel = new Products();

$products = $productsModel->seeProducts();

    if(isset($_POST["send"])){
        $file = $_FILES["file"];
        $fileName = $file["name"];
        $fileTmpName = $file["tmp_name"];
        $fileSize = $file["size"];
        $fileError = $file["error"];
        $fileType = $file["type"];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = ["jpg", "jpeg", "png", "pdf", ""];
        if(in_array($fileActualExt, $allowed) ){
                if($fileSize < 10) {
                    $product = $productsModel->noImageUpdate($_POST);
                    $message = 'Product price and Stock changed';
                }else{
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = './imagens/'.$fileNameNew;
                   move_uploaded_file($fileTmpName, $fileDestination);

                    $product = $productsModel->updateProducts($_POST, $fileDestination);
 
                    $message = 'The product with the name ' .$_POST["product_name"].' was updated successfully';
                }
    }else{
        $message = 'you cannot upload files of this type';
    }
}
    require("views/updateProducts.php");
?>