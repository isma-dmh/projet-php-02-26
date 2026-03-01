<?php

include "./assets/classes/Ville.php";

class Utilisateur
{

    private string $nom;
    private string $prenom;
    private string $pseudo;
    private string $password;
    private int $age;
    private Ville $ville;

    public function __construct(string $lastname, string $firstname, string $pseudo, string $password, string $age, string $city)
    {
        $this->nom = $lastname;
        $this->prenom = $firstname;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->age = (int)$age;
        $this->ville = new Ville($city);
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nouveauNom): void
    {
        $this->nom = $nouveauNom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $nouveauPrenom): void
    {
        $this->prenom = $nouveauPrenom;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $nouveauPseudo): void
    {
        $this->pseudo = $nouveauPseudo;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $nouveauPassword): void
    {
        $this->password = $nouveauPassword;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(string $nouvelAge): void
    {
        $this->age = (int)$nouvelAge;
    }

    public function getVille(): string
    {
        return $this->ville->getNom();
    }

    public function getPays(): string
    {
        return $this->ville->getPays();
    }

    public function getCapital(): string
    {
        return $this->ville->getCapital();
    }

    public function __toString(): string
    {
        return "Nom : " . $this->nom . "<br>" .
            "Prénom : " . $this->prenom . "<br>" .
            "Pseudo : " . $this->pseudo . "<br>" .
            "Password : " . $this->password . "<br>" .
            "Age : " . $this->age . "<br>" .
            "Ville : " . $this->ville->getNom() . "<br>" .
            "Pays : " . $this->ville->getPays() . "<br>" .
            "Capital : " . $this->ville->getCapital() . "<br><br>";
    }
}
