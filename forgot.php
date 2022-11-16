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
        <form class="form" action="./helpers/update_password.php" method="post">
            <label for="username">Email:</label>
            <input type="email" name="username" id="username">
            <label for="password">Nové heslo:</label>
            <input type="password" name="new_password" id="password">
            <label for="password">Potvrdit heslo:</label>
            <input type="password" name="confirm_new_password" id="password">
            <input type="submit" value="Obnovit heslo" name="update_password">
        </form>
        <a href="./login.php">Zpět na přihlášení</a>
    </div>
</body>

</html>