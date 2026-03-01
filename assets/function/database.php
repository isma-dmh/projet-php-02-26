<?php

function dataConnect(): PDO
{
    try {

        $pdo = new PDO("mysql:host=localhost;dbname=projet_mars_2026", "root", "", [PDO::ATTR_ERRMODE]);
        return $pdo;
    } catch (PDOException $e) {

        die("Erreur de connextion : " . $e->getMessage());
    }
}


function selectCities(PDO $pdo){

$cities = $pdo->query("SELECT * FROM villes");
$cities = $cities->fetchAll(PDO::FETCH_OBJ);

return $cities;

}