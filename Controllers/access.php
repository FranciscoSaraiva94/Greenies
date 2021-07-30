<?php

require("models/users.php");

$usersModel = new Users();

if ($action === "login") {
    if (isset($_POST["send"])) {
        $user = $usersModel->getUser($_POST["email"]);
        if (!empty($user) &&
            password_verify($_POST["password"], $user["encrypted_password"])
        ) {
            if ($user["user_type"] === "admin") {
                $_SESSION["user_type"] =  $user["user_type"];
                $_SESSION["user_id"]   =  $user["user_id"];
                $_SESSION["name"]      =  $user["name"]. ' (admin)';
                header("Location: ../admin");
            } elseif ($user["user_type"] === "user") {
                $_SESSION["user_type"] = $user["user_type"];
                $_SESSION["user_id"]   = $user["user_id"];
                $_SESSION["name"]      = $user["name"];
                header("Location: ../");
            }
        }
        $message = 'Invalid Login, please try again';
    }

    require("views/login.php");
} elseif ($action === "register") {
    if (isset($_POST["send"])) {
        $uniqueEmail = $usersModel->checkEmail($_POST["email"]);
        if (empty($uniqueEmail)) {
            $user = $usersModel->createUser($_POST);
            if ($user) {
                header("Location: login");
            } else {
                echo 'preencha os dados corretamente';
            }
        } else {
            echo 'e-mail já existe';
        }
    }
    require("views/register.php");
}
