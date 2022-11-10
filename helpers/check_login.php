<?php

require dirname(__FILE__) . "/../database/db.php";
require dirname(__FILE__) . "/../database/auth.php";

$auth = new Auth($connection);

if (isset($_POST["submit"])) {
    $userName = $_POST["username"];
    $password = $_POST["password"];
    if (!empty($userName) && !empty($password) && isset($userName) && isset($password)) {
        if (!empty($_POST["remember"])) {
            if (!isset($_COOKIE["remember"])) {
                setcookie("remember", 1, time() + 86400 * 5); //Vyprší za 5 dnů
            }
            if (!isset($_COOKIE["username"])) {
                setcookie("username", $userName, time() + 86400 * 5); // Vyprší za 5 dnů
            }
            if (!isset($_COOKIE["password"])) {
                setcookie("password", $password, time() + 86400 * 5); // Vyprší za 5 dnů
            }
        }

        $userId = $auth->check_user($userName, $password);

        if ($userId != null) {
            session_start();
            $_SESSION["userId"] = $userId;
            $_SESSION["email"] = $userName;
            $_SESSION["heslo"] = $password;
            header("Location: ../realestates.php");
        } else {
            header("Location: ../login.php");
        }
    } else {
        header("Location: ../login.php");
    }
} else {
    header("Location: ../login.php");
}
