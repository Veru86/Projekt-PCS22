<?php

require dirname(__FILE__) . "/../database/db.php";
require dirname(__FILE__) . "/../database/signer.php";

if (isset($_POST["update_password"])) {
    if (
        isset($_POST["username"]) && isset($_POST["new_password"]) && isset($_POST["confirm_new_password"]) &&
        !empty($_POST["username"]) && !empty($_POST["new_password"]) && !empty($_POST["confirm_new_password"])
    ) {
        $username = $_POST["username"];
        $newPassword = $_POST["new_password"];
        $confirmNewPassword = $_POST["confirm_new_password"];
        $signer = new Signer($connection);
        $signer->update_password($username, $newPassword, $confirmNewPassword);
        header("Location: ../login.php");
    }
}
