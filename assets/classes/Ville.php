<?php

include "./assets/function/database.php";

class Ville
{

    private string $nom;
    private string $pays;
    private string $capital;
    private static array $villes = [];

    public function __construct(string $name)
    {
        self::chargerVille();
        $this->nom = $name;
        $this->pays = self::$villes[$name]->pays;
        $this->capital = self::$villes[$name]->capital;
    }

    public static function chargerVille()
    {

        $villes = selectCities(dataConnect());

        foreach ($villes as $ville) {

            self::$villes[$ville->nom] = $ville;
        }
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nouveauNom): void
    {
        $this->nom = $nouveauNom;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $nouveauPays): void
    {
        $this->pays = $nouveauPays;
    }

    public function getCapital(): string
    {
        return $this->capital;
    }

    public function setCapital(string $nouvelCapital): void
    {
        $this->capital = $nouvelCapital;
    }

    public function __toString(): string
    {
        return "Nom : " . $this->nom . "<br>" .
            "Pays : " . $this->pays . "<br>" .
            "Capital : " . $this->capital . "<br><br>";
    }
}
