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
        <h3>Přihlásit se</h3>
        <form action="./helpers/check_login.php" method="post">
            Email: <input type="email" name="username"><br><br>
            Heslo: <input type="password" name="password"><br><br>
            <input type="checkbox" name="remember" value="1"> Zapamatovat si mě<br><br>
            <input type="submit" value="Přihlásit se" name="submit">
        </form><br>
        <a href="./signup.php">Zaregistrovat se</a>
        <a href="./forgot.php">Zapoměl(a) jste heslo?</a>
    </div>
</body>

</html>