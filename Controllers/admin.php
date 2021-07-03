<?php

require("models/base.php");


if($_SESSION["user_type"] === "user"){
    header("Location: ./");
    exit;
}

    echo "admin to rule em all";

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    require("views/admin.php");
