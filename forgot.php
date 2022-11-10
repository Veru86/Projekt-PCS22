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
        <h3>Obnovit heslo</h3>
        <form action="./helpers/update_password.php" method="post">
            Email: <input type="email" name="username" id=""><br><br>
            Nove heslo: <input type="password" name="new_password" id=""><br><br>
            Potvrdit heslo: <input type="password" name="confirm_new_password" id=""><br><br>
            <input type="submit" value="Obnovit heslo" name="update_password">
        </form><br><br>
        <a href="./login.php">Zpět na přihlášení</a>
    </div>
</body>

</html>