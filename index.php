<?php

session_start();

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$action = "";
if (!empty($url_parts[3])) {
    $action = strip_tags(trim($url_parts[3])); // a posição 3 do array url parts vai ser igual à variavel action que
    // login\ logout por exemplo
}


$controller = "home";

/* white list de controladores válidos */
$valid_controllers = ["cart", "reviewPurchase", "endPurchase", "promotions", "requests", "home", "access", "cart", "admin", "logout", "addProducts", "deleteProducts", "updateProducts", "seeProducts"];


if (
    !empty($url_parts[2]) &&
    in_array($url_parts[2], $valid_controllers)
) {
    $controller = $url_parts[2];
}

require("controllers/" .$controller . ".php");
