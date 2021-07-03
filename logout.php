<?php

  require("./config.php");

  unset($_SESSION["user_id"]);
  unset($_SESSION["name"]);
  unset($_SESSION["user_type"]);

  
  header("Location: ./");