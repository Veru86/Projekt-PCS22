<?php

require_once dirname(__FILE__) . "/../models/crypt.php";
require dirname(__FILE__) . "/../interfaces/iauth.php";

class Auth implements IAuth
{
    private mysqli $connection;
    private const TABLE_NAME = "USERS";
    private Crypt $crypt;

    public function __construct(mysqli $conn)
    {
        $this->connection = $conn;
        $this->crypt = new Crypt();
    }

    public function check_user(string $userName, string $password): int
    {
        $encrypted_password = $this->crypt->encrypt($password);
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE UserName = '$userName' AND password = '$encrypted_password'";
        $res = $this->connection->query($sql);
        if ($res->num_rows === 0) {
            return null;
        }

        $user = $res->fetch_assoc();
        return $user["Id"];
    }

    //nejspíš tuto funkci nepotřebuji - možno využít v případě více uživatelů
    public function get_user_name(int $userId): string
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE Id = $userId";

        $res = $this->connection->query($sql);
        if ($res->num_rows === 0) {
            return null;
        }

        $user = $res->fetch_assoc();
        return $user["FirstName"] . " " . $user["LastName"];
    }

    public function logout(): void
    {
        session_start();
        setcookie("username", "", time() - 86400 * 5);
        unset($_COOKIE["username"]);
        setcookie("password", "", time() - 86400 * 5);
        unset($_COOKIE["password"]);
        setcookie("remember", "", time() - 86400 * 5);
        unset($_COOKIE["remember"]);
        unset($_SESSION["email"]);
        unset($_SESSION["heslo"]);
        header("Location: ../index.php");
        return;
    }
}
