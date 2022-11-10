<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/login_signup_forgot.css">
    <title>Reality Kopicová</title>
</head>

<body>
    <?php
    include "navigation.php"
    ?>
    <div class="login_signup_forgot">
        <h3>Zaregistrovat se</h3>
        <form action="./helpers/check_signup.php" method="post">
            Email: <input type="email" name="UserName"><br><br>
            Heslo: <input type="password" name="Password"><br><br>
            Potvrdit heslo: <input type="password" name="ConfirmPassword"><br><br>
            Jméno: <input type="text" name="FirstName"><br><br>
            Příjmení: <input type="text" name="LastName"><br><br>
            <input type="submit" value="Zaregistrovat se" name="Submit">
        </form><br>
        <a href="./login.php">Zpět na přihlášení</a>
    </div>
</body>

</html>