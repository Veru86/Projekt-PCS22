<?php

require dirname(__FILE__) . "/../database/db.php";
require dirname(__FILE__) . "/../database/auth.php";

if (isset($_POST["logout"])) {
    $auth = new Auth($connection);
    $auth->logout();
}
