<?php

    require("./config.php");
    session_destroy();
    echo"admin to rule em all";

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
?>