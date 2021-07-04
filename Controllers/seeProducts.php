<?php
require("models/products.php");


$productsModel = new Products();

$products = $productsModel->seeProducts();

require("views/seeProducts.php");





