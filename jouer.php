<?php require_once('./session/session.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cinema.css">
    <title>Jouer</title>
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
    <?php
    $serveur = "localhost";
    $utilisateur = "root";
    $motsdepasse = "";
    $basededonnes = "bdtp1";
    $connexion = new mysqli($serveur, $utilisateur, $motsdepasse, $basededonnes);

    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    }


    $sql = "SELECT * FROM individu";
    $resultat = $connexion->query($sql);
    $options = '';

    $sql1 = "SELECT * FROM film";
    $options1 = '';
    $resultat1 = $connexion->query($sql1);
    if ($resultat->num_rows > 0) {
        while ($row = $resultat->fetch_assoc()) {
            $options .= '<option value="' . $row['num_individu'] . '">' . $row['nom'] . ' ' . $row['prenom'] . '</option>';
        }
    }
    if ($resultat1->num_rows > 0) {
        while ($row = $resultat1->fetch_assoc()) {
            $options1 .= '<option value="' . $row['num_film'] . '">' . $row['titre'] . ' ' . $row['genre'] . ' ' . $row['annee'] . '</option>';
        }
    }



    $connexion->close();
    ?>

    <form id="cinema" method="post" action="jouer1.php" enctype="multipart/form-data">
        <div class="jouer">
            <h1>Jouer</h1>
            <label class="label">Nom de l'acteur</label>
            <select name="num_acteur" id="num_acteur">
                <?php echo $options; ?>
            </select><br>
            <label class="label" for="text">Titre du film</label>
            <select name="num_film" id="num_film">
                <?php echo $options1; ?>
            </select><br>
            <label for="Rôle" class="label">Rôle</label>
            <input type="text" name="role" id="role"><br><br>
            <input title="Envoyer ces informations" (onclick)="verifier()" type="submit" value="Enregistrer">
            <input title="Recommencer la saisie" type="reset" value="Effacer">
        </div>
        <p style="color: red;" id="erreur"></p>
        <div>

            <div>
    </form>
    <script src="scripts/script_jouer.js"></script>
</body>

</html>