<?php

interface IRealestate
{
    public function get_all_realestates(): array;
    public function add_realestate($nadpis, $cena, $lokalita, $typ, $plocha, $popis, $fileToUpload, $dateAdded, $userId): void;
}
