<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/contact.css">
    <title>Reality Kopicová</title>
</head>

<body>
    <?php
    include "navigation.php"
    ?>
    <main>
        <div class="contact">
            <div class="osobni">
                <h2>Kontakt</h2>
                <p><b>Mobil</b></p>
                <a href="tel:+420725934350">+420 725 934 350</a>
                <p><b>E-mail</b></p>
                <a href="mailto:kopicovapetra@mmreality.cz">kopicovapetra@mmreality.cz</a>
            </div>

            <div class="pobocka">
                <h2>Najdete mě na pobočce Havlíčkův Brod</h2>
                <p><b>Mobil</b></p>
                <a href="tel:+420603140083">+420 603 140 083</a>
                <p><b>E-mail</b></p>
                <a href="mailto:havlickuvbrod@mmreality.cz">havlickuvbrod@mmreality.cz</a>
                <p><b>Adresa</b></p>
                <p>Beckovského 2045 <br> 580 01</p>
                <p>Provozní doba</p>
                <p><b>PO - ČT</b>: 9:00 - 12:00; 13:00 - 17:00</p>
                <p><b>PÁ</b>: 9:00 - 12:00; 13:00 - 16:00</p>
            </div>

            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=beckovsk%C3%A9ho%202045&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://123movies-to.org"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 300px;
                            width: 400px;
                        }
                    </style>
                    <a href="https://www.embedgooglemap.net"></a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 300px;
                            width: 400px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </main>
    <?php
    include "footer.php"
    ?>
</body>

</html>