<?php

include "./header.php";
include "./assets/function/database.php";

$pdo = dataConnect();
$villes = selectCities($pdo);

?>

<div class="blocForm">
    <div class="blocTitle">
        <h1>Créer un compte</h1>
        <p class="secondary littleText">Rejoignez CityApp et partagez votre ville</p>
    </div>

    <form action="./profil.php" method="post" id="enregistrement">

        <div class="blocInput">
            <label class="secondary littleText" for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Dupont" required>
        </div>

        <div class="blocInput">
            <label class="secondary littleText" for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Jean" required>
        </div>

        <div class="blocInput">
            <label class="secondary littleText" for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="jean_dupont" required>
        </div>

        <div class="blocInput">
            <label class="secondary littleText" for="age">Age</label>
            <input type="number" name="age" id="age" placeholder="25" required>
        </div>

        <div class="blocInput full">
            <label class="secondary littleText" for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="●●●●●●●●" required>
        </div>

        <div class="blocInput full">
            <label class="secondary littleText" for="city">Votre ville</label>
            <select type="text" name="city" id="city" placeholder="Bruxelles" required>

                <option value="">— Choisissez une ville —</option>
                <?php foreach ($villes as $ville): ?>
                    <option value="<?php echo $ville["nom"] ?>"><?php echo $ville["nom"] . " (" . $ville["pays"] . ")" ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <button class="blue" type="submit"> Créer mon compte →</button>

    </form>

    <div class="readySubmit">
        <p class="secondary">Déja un compte ? </p>
        <a href="./connexion.php">Se connecter</a>
    </div>

</div>

<?php include "./footer.php" ?>