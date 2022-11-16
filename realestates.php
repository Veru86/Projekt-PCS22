<?php
session_start();

// require dirname(__FILE__) . "/helpers/check_cookie.php";
// require_once dirname(__FILE__) . "/database/auth.php";
// require dirname(__FILE__) . "/database/db.php";

// $auth = new Auth($connection);

// if (!isset($_SESSION["email"])) {
//     header("Location: login.php");
// }

// if (!$auth->check_user($_SESSION["email"], $_SESSION["heslo"])) {
//     header("Location: login.php");
// }
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
    <link rel="stylesheet" href="./css/realestates.css">
    <title>Reality Kopicová</title>
</head>

<body>
    <?php
    include "navigation.php"
    ?>

    <?php
    include "navigation_for_signer.php"
    ?>

    <div class="main_realestates">
        <h1>Nemovitosti v mé nabídce</h1>
        <div class="realestates-wrapper">
            <?php
            require_once dirname(__FILE__) . "/database/db_realestates.php";
            require dirname(__FILE__) . "/database/db.php";

            $realestateDb = new Realestates($connection);
            $realestates = $realestateDb->get_all_realestates();
            foreach ($realestates as $realestate) {
                echo "<div class='realestate'>" .
                    "<div class='realestate_head'>" .
                    "<h2>$realestate->nadpis</h2>" .
                    "</div>" .
                    "<div class='realestate_full'>" .
                    "<img class='mainFoto' src=./uploads/$realestate->fileToUpload>" .
                    "</img>" .
                    "<div class='info_full'>" .
                    "<div class='info'>" .
                    "<p><b>Cena: </b>$realestate->cena Kč</p>" .
                    "<p><b>Lokalita: </b>$realestate->lokalita</p>" .
                    "<p><b>Typ nemovitosti: </b>$realestate->typ</p>" .
                    "<p><b>Plocha: </b>$realestate->plocha m2 </p>" .
                    "</div>" .
                    "<div class='popis'>" .
                    "<h3>Popis nemovitosti:</h3>" .
                    $realestate->popis .
                    "</div>" .
                    "</div>" .
                    "</div>" .
                    "</div>";
            }
            ?>
        </div>

    </div>

    <?php
    include "footer.php"
    ?>
</body>

</html>