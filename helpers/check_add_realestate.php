<?php
require dirname(__FILE__) . "/../database/db.php";
require dirname(__FILE__) . "/../database/db_realestates.php";

if (isset($_POST["submit"])) {
    session_start();

    $target_dir = "../uploads/";
    $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only images are allowed";
        die();
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  $target)) {
        echo "Soubor byl uložen";
    }

    $realestatesDb = new Realestates($connection);
    $realestatesDb->add_realestate($_POST["nadpis"], $_POST["cena"], $_POST["lokalita"], $_POST["typNemovitosti"], $_POST["plocha"], $_POST["popis"], basename($_FILES["fileToUpload"]["name"]),  date('Y-m-d H:i:s'), $_SESSION["userId"]);
    header("Location: ../realestates.php");
} else {
    header("Location: ../add_realestate.php");
}
