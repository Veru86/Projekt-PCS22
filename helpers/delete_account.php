<?php

require dirname(__FILE__) . "/../database/db.php";
require dirname(__FILE__) . "/../database/signer.php";
require dirname(__FILE__) . "/../database/auth.php";

if (isset($_POST["delete_account"])) {
    session_start();
    $signer = new Signer($connection);
    $signer->delete_account($_SESSION["email"]);
    $auth = new Auth($connection);
    $auth->logout();
}
