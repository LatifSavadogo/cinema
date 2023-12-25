<?php require_once('./session/session.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cinema.css">
    <title>Individus</title>
</head>

<span class="session">
    <div>
        <span class="nom"><?= $user['prenom'] . " " . $user['nom'] ?></span>
        <div class="btn_n">
            <button class="btn2"><a href="accueil.php">Accueil</a></button><br>
            <button class="btn1_1"><a href="deconnexion.php">Se deconnecter</a></button>
        </div>
    </div>
</span>

<body>
    <form id="cinema" method="post" action="individus1.php" enctype="multipart/form-data">
        <div class="individu" id="individu">
            <h1>Individus</h1>
            <label class="label" for="text">Nom: </label>
            <input type="text" id="nom" name="nom"><br>
            <label class="label" for="text">Prénom: </label>
            <input type="text" id="prenom" name="prenom"><br>
            <div>
                <input title="Envoyer ces informations" (onclick)="verifier()" type="submit" value="Enregistrer">
                <input title="Recommencer la saisie" type="reset" value="Effacer">
            </div>
            <p style="color: red;" id="erreur"></p>
    </form>
    <script src="scripts/script_indiv.js"></script>
</body>

</html>