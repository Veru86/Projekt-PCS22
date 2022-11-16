<?php
require dirname(__FILE__) . "/../interfaces/irealestates.php";
require_once dirname(__FILE__) . "/../models/realestates.php";
require_once dirname(__FILE__) . "/auth.php";

class Realestates implements IRealestate
{
    private mysqli $connection;
    private const TABLE_NAME = "Realestates";
    private Auth $auth;

    public function __construct(mysqli $conn)
    {
        $this->connection = $conn;
        $this->auth = new Auth($conn);
    }

    public function add_realestate($nadpis, $cena, $lokalita, $typ, $plocha, $popis, $fileToUpload, $dateAdded, $userId): void
    {
        $sql = "INSERT INTO " . self::TABLE_NAME . "(Nadpis, Cena, Lokalita, TypNemovitosti, Plocha, Popis, fileToUpload, DateAdded, UserId) VALUES('$nadpis', $cena, '$lokalita', '$typ', $plocha, '$popis', '$fileToUpload','$dateAdded', $userId);";
        if (!$this->connection->query($sql)) {
            throw new Exception("Přidání nové nemovitosti selhalo.");
        }
    }

    public function get_all_realestates(): array
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME . " ORDER BY DateAdded desc";
        $res = $this->connection->query($sql);

        $realestates = [];

        while ($row = $res->fetch_assoc()) {
            $realestate = new Realestate(); //tady popravdě nevím co s tím :) 
            $realestate->nadpis = $row["Nadpis"];
            $realestate->cena = $row["Cena"];
            $realestate->lokalita = $row["Lokalita"];
            $realestate->typ = $row["TypNemovitosti"];
            $realestate->plocha = $row["Plocha"];
            $realestate->popis = $row["Popis"];
            $realestate->fileToUpload = $row["fileToUpload"];
            $realestate->dateAdded = $row["DateAdded"];
            $realestate->userFullName = $this->auth->get_user_name($row["UserId"]);
            array_push($realestates, $realestate);
        }

        return $realestates;
    }
}
