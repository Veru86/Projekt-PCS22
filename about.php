<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Reality Kopicová</title>
</head>

<body>
    <?php
    include "./navigation.php"
    ?>
    <div class="about">
        <div class="flex1">
            <h1 class="flex1_item">Realitní makléř Petra Kopicová</h1>
            <div class="profile_picture flex1_item"><img src="./img/profile_picture.png" alt="Profilová fotografie realitní makléřky Petry Kopicové"></div>
            <h3 class="flex1_item">Jako realitní makléř jsem profesionál a proto prodám vaši nemovitost rychle a spolehlivě.</h3>
        </div>
        <div>
            <h2>Pár slov o mně...</h2>
            <p class="text">Jmenuji se Petra Kopicová a ve společnosti M&M reality pracuji na pobočce Jihlava a jsem součástí Zelené rodiny. Mým hlavním cílem je být profesionálem s lidským přístupem tak, abych dokázal pomoci při prodeji i koupi nemovitosti každému z Vás. Proto pracuji ve společnosti M&M reality, kde společně sdílíme stejné hodnoty, kdy na prvním místě je spokojenost klienta.</p>
        </div>
        <div class="flex2">
            <div>
                <h4>Působím převážně v regionech:</h4>
                <ul class="text">
                    <li>Vysočina</li>
                    <li>Jihočeský kraj</li>
                    <li>Středočeský kraj</li>
                </ul>
            </div>
            <div>
                <a href="contact.php" class="button">Domluvit schůzku</a>
                <div class="social">
                    <a href="https://www.facebook.com/kopicovap" class="socialitem"><img src="./img/facebook.png" alt="ikona Facebook"></a>
                    <a href="mailto: kopicovap@mmreality.cz" class="socialitem envelope"><img src="./img/envelope.png" alt="ikona email"></a>
                    <a href="" class="socialitem"><img src="./img/instagram.png" alt="ikona Instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer.php"
    ?>
</body>

</html>