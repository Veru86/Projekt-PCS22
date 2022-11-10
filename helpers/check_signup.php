<?php
require dirname(__FILE__) . "/../database/db.php";
require dirname(__FILE__) . "/../database/signer.php";

if (isset($_POST["Submit"])) {
    $userName = $_POST["UserName"];
    $password = $_POST["Password"];
    $confirmPassword = $_POST["ConfirmPassword"];
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    if (
        isset($userName) && isset($password) && isset($confirmPassword) &&
        !empty($userName) && !empty($password) && !empty($confirmPassword) &&
        isset($firstName) && isset($lastName) &&
        !empty($firstName) && !empty($lastName)
    ) {
        $signer = new Signer($connection);
        $signer->add_user($userName, $password, $confirmPassword, $firstName, $lastName);
    }
}

header("Location: ../login.php");
