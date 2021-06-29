<?php

  require("./config.php");

  unset($_SESSION["user_id"]);
  unset($_SESSION["name"]);

  
  header("Location: /greenies/index/");