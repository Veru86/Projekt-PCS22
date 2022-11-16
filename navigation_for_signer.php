<nav>
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
    <div class="nav_for_signer">
        <a class="add-post-btn myButton nav_for_signer_item" href="./add_realestate.php">+</a>
        <form action="./helpers/logout.php" method="post" class="nav_for_signer_item">
            <input class="myButton" type="submit" value="Odhlásit se" name="logout">
        </form>
        <form action="./helpers/delete_account.php" method="post" class="nav_for_signer_item">
            <input class="myButton" type="submit" value="Smazat účet" name="logout">
        </form>
    </div>
</nav>