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
        <form class="form" action="./helpers/check_signup.php" method="post">
            <label for="UserName">Email:</label>
            <input type="email" name="UserName" required placeholder="petrnovak@gmail.com">
            <label for="password">Heslo:</label>
            <input type="password" name="Password" required>
            <label for="password">Potvrdit heslo:</label>
            <input type="password" name="ConfirmPassword" require>
            <label for="FirstName">Jméno:</label>
            <input type="text" name="FirstName" required placeholder="Petr">
            <label for="LastName">Příjmení:</label>
            <input type="text" name="LastName" required placeholder="Novák">
            <input type="submit" value="Zaregistrovat se" name="Submit" onclick="validate(this.parentNode)">
        </form><br>
        <a href="./login.php">Zpět na přihlášení</a>
    </div>
</body>
<script src="./js/validate_signup.js"></script>

</html>