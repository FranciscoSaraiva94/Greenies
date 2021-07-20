<?php

session_start();
/* controller default */
$controller = "home";

/* white list de controladores válidos */
$valid_controllers = ["cart", "promotions", "requests", "home", "access", "cart", "admin", "logout", "addProducts", "deleteProducts", "updateProducts", "seeProducts"];


if(
    isset($_GET["controller"]) && 
    in_array($_GET["controller"], $valid_controllers)
) {
    $controller = $_GET["controller"];
}

require("controllers/" .$controller . ".php");