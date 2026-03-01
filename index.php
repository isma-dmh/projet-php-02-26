<?php

include "./header.php";
include "./assets/function/database.php";

$pdo = dataConnect();
$cities = selectCities($pdo);

?>


<div id="heroHeader">
    <h4 id="welcome">✨ Bienvenue sur CITYAPP</h4>
    <h1 id="decouverte">Découvrez les <span> plus belles </span>villes d'Europe</h1>
    <p id="description">Une plateforme moderne pour explorer les villes,créer votre profil et partager votre ville natale.</p>
    <div id="link">
        <a href="./enregistrement.php" class="blue">Créer un compte</a>
        <a href="./connexion.php" id="connect">Se connecter</a>
    </div>
</div>

<main>

    <div id="blocVideo">
        <div id="blocTitle">
            <div class="barre"></div>
            <h3 id="videoTitle">Vidéo de présentation</h3>
        </div>

        <video src="./assets/video/europe.mp4" controls loop autoplay>

            <a href="./assets/video/europe.mp4">MP4</a>

        </video>

    </div>

    <div id="blocTable">
        <div id="blocTitle">
            <div class="barre"></div>
            <h3 id="tableTitle">Les 10 Villes les plus visitées d'Europe</h3>
        </div>
    </div>

    <table>

        <thead>
            <tr>
                <th class="id">#</th>
                <th>VILLE</th>
                <th>PAYS</th>
                <th>CAPITAL</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($cities as $city): ?>
                <tr>
                    <td class="id secondary"><?php echo $city->id_ville ?></td>
                    <th><?php echo $city->nom ?></th>
                    <td><?php echo $city->pays ?></td>
                    <td class="<?php if ($city->nom == $city->capital): ?>txtGreen<?php else: ?>txtBlue<?php endif;?>"><?php echo $city->capital ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <?php
    include "./footer.php"
    ?>