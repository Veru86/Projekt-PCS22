<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/contactform.css">
    <title>Reality Kopicová</title>
</head>

<body>
    <?php
    include "navigation.php"
    ?>

    <h2>Kontaktní formulář</h2>
    <form class="contactform" action="sendemail.php" method="post">
        <input name="email" size="25" value="Váš@mail.com"><br>
        <input name="predmet" size="45" value="Nemovitost, která Vás zajímá/kterou chcete prodat"><br>
        <!-- <div>
            <p>Chci:</p>
            <input type="radio" id="prodat" name="chci" value="prodat">
            <label for="prodat">Prodat</label><br>
            <input type="radio" id="koupit" name="chci" value="koupit">
            <label for="koupit">Koupit</label><br>
        </div> -->
        <textarea name="zprava" rows="6" cols="55">Zpráva...</textarea><br>
        <strong>1 + 1 = </strong> <input name="spam" size="10"> <br>
        <input type="submit" value="Odeslat">
    </form>

    <?php
    include "footer.php"
    ?>
</body>

</html>