<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/login_signup_forgot.css">
    <link rel="stylesheet" href="./css/add_realestate.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Přidat nemovitost</title>
</head>

<body>
    <?php
    include "navigation.php"
    ?>
    <div class="add-realestate-wrapper">
        <form class="form" action="./helpers/check_add_realestate.php" method="post" enctype="multipart/form-data">
            <label for="nadpis">Nadpis nemovitosti:</label>
            <textarea id="nadpis" name="nadpis"></textarea>
            <label for="cena">Cena:</label>
            <textarea id="cena" name="cena"></textarea>
            <label for="lokalita">Lokalita:</label>
            <textarea id="lokalita" name="lokalita"></textarea>
            <label for="typNemovitosti">Typ nemovitosti:</label>
            <textarea id="typNemovitosti" name="typNemovitosti"></textarea>
            <label for="plocha">Plocha:</label>
            <textarea id="plocha" name="plocha"></textarea>
            <label for="popis">Popis nemovitosti:</label>
            <textarea id="popis" name="popis"></textarea>
            <label for="fileToUpload">Vyber hlavní fotku nemovitosti</label>
            <input type="file" name="fileToUpload" id="fileToUpload" />

            <input class="primary-button" type="submit" value="Vložit nemovitost" name="submit">


        </form>
    </div>
</body>

</html>