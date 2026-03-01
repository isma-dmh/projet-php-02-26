<?php

include "./header.php";
include "./assets/classes/Utilisateur.php";
var_dump($_POST);

if (isset($_POST["lastname"], $_POST["firstname"], $_POST["pseudo"], $_POST["age"], $_POST["password"], $_POST["city"])) {

    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $pseudo = $_POST["pseudo"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    $city = $_POST["city"];

    $user = new Utilisateur($lastname, $firstname, $pseudo, $password, $age, $city);
}

?>

<div id="blocInfo">
    <div id="circle"></div>
    <div id="info">
        <h1 id="fullname"><?php echo $user->getNom() . " " . $user->getPrenom(); ?></h1>
        <p class="blue">@<?php echo $user->getPseudo();?></p>
        <div id="fullinfo"></div>
    </div>
</div>

<?php

include "./footer.php";

?>