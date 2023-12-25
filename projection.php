<?php require_once('./session/session.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cinema.css">
    <title>Projection</title>
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


    $sql = "SELECT * FROM cinema";
    $resultat = $connexion->query($sql);

    $options = '';

    $sql1 = "SELECT * FROM film";
    $options1 = '';
    $resultat1 = $connexion->query($sql1);
    if ($resultat->num_rows > 0) {
        while ($row = $resultat->fetch_assoc()) {
            $options .= '<option value="' . $row['num_cinema'] . '">' . $row['nom'] . ' ' . $row['adresse'] . '</option>';
        }
    }
    if ($resultat1->num_rows > 0) {
        while ($row = $resultat1->fetch_assoc()) {
            $options1 .= '<option value="' . $row['num_film'] . '">' . $row['titre'] . ' ' . $row['genre'] . ' ' . $row['annee'] . '</option>';
        }
    }
    $connexion->close();
    ?>
    <form id="cinema" method="post" action="projection1.php" enctype="multipart/form-data">
        <div class="jouer">
            <h1>Projection</h1>
            <label class="label">Nom du cinema</label>
            <select name="num_cinema" id="num_cinema">
                <?php echo $options; ?>
            </select><br>
            <!--<input type="text" name="num_cinema" id="num_cinema"><br><br>-->
            <label class="label" for="text">Titre du film</label>
            <select name="num_film" id="num_film">
                <?php echo $options1; ?>
            </select><br>
            <!--<input type="text" name="num_film" id="num_film"><br><br>-->
            <label for="Rôle" class="label">Jour</label>
            <input type="date" name="jour" id="jour"><br><br>
            <div>
                <input title="Envoyer ces informations" (onclick)="verifier()" type="submit" value="Enregistrer">
                <input title="Recommencer la saisie" type="reset" value="Effacer">
            </div>
            <p style="color: red;" id="erreur"></p>
            <div>
    </form>
    <script src="scripts/script_poject.js"></script>
</body>

</html>