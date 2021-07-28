<?php

if (!isset($_SESSION["cart"])) {
    echo 'please select some items first';
    die();
}
require("views/reviewPurchase.php");
