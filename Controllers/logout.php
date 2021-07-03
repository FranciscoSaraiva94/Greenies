<?php

  require("models/users.php");   
  session_destroy();
  header("Location: ?controller=home");