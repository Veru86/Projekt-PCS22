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
    <link rel="stylesheet" href="./css/footer.css">
    <title>Reality Kopicová</title>
</head>

<body>
    <?php
    include "navigation.php"
    ?>
    <div class="main">
        <div class="profile_picture"><img src="./img/profile_picture.png" alt="Profilová fotografie realitní makléřky Petry Kopicové"></div>
        <div class="content">
            <h3>Vítám vás na mých stránkách</h3>
            <div class="text">
                Prodej nemovitosti je pro většinu lidí největší obchod v jejich životě. Věřím, že výběr správného obchodního partnera - zprostředkovatele je tedy nesmírně důležitý.
            </div>
            <a href="contactform.php" class="myButton">Domluvit schůzku</a>
            <div class="social">
                <a href="https://www.facebook.com/kopicovap" class="socialitem"><img src="./img/facebook.png" alt="ikona Facebook"></a>
                <a href="mailto: kopicovap@mmreality.cz" class="socialitem envelope"><img src="./img/envelope.png" alt="ikona email"></a>
                <a href="" class="socialitem"><img src="./img/instagram.png" alt="ikona Instagram"></a>
            </div>
        </div>
    </div>

    <?php
    include "footer.php"
    ?>
</body>

</html>