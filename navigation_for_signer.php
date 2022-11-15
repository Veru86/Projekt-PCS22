<nav class="nav_for_signer">
    <?php


    require dirname(__FILE__) . "/helpers/check_cookie.php";
    require_once dirname(__FILE__) . "/database/auth.php";
    require dirname(__FILE__) . "/database/db.php";

    $auth = new Auth($connection);

    if (!isset($_SESSION["email"])) {
        return;
    }
    //spojit do jedné podmínky - or operátor
    if (!$auth->check_user($_SESSION["email"], $_SESSION["heslo"])) {
        return;
    }
    ?>

    <a class="add-post-btn" href="./add_realestate.php">+</a>
    <form action="./helpers/logout.php" method="post">
        <input class="primary-button" type="submit" value="Odhlásit se" name="logout">
    </form>
    <form action="./helpers/delete_account.php" method="post">
        <input class="primary-button" type="submit" value="Smazat účet" name="logout">
    </form>
</nav>