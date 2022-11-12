<?php
require dirname(__FILE__) . "/../database/db.php";
require dirname(__FILE__) . "/../database/db_realestates.php";

if (isset($_POST["submit"])) {
    session_start();
    $realestatesDb = new Realestates($connection);
    $realestatesDb->add_realestate($_POST["nadpis"], $_POST["cena"], $_POST["lokalita"], $_POST["typNemovitosti"], $_POST["plocha"], $_POST["popis"],  date('Y-m-d H:i:s'), $_SESSION["userId"]);
    header("Location: ../realestates.php");
} else {
    header("Location: ../add_realestate.php");
}
