<?php include "./header.php" ?>

<div class="blocForm">
    <div class="blocTitle">
        <h1>Connexion</h1>
        <p class="secondary littleText">Bon retour ! Entrez vos identifiants</p>
    </div>

    <form action="" method="post">

        <div class="blocInput full">
            <label class="secondary littleText" for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" placeholder="jean_dupont">
        </div>

        <div class="blocInput full">
            <label class="secondary littleText" for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="●●●●●●●●">
        </div>


        <button class="blue" type="submit"> Se connecter →</button>

    </form>

    <div class="readySubmit">
        <p class="secondary">Pas encore de compte? </p>
        <a href="./enregistrement.php">S'enregistrer'</a>
    </div>

</div>

<?php include "./footer.php" ?>