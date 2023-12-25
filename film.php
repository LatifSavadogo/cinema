<?php require_once('./session/session.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cinema.css">
    <title>Films</title>
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


    if ($resultat->num_rows > 0) {
        while ($row = $resultat->fetch_assoc()) {
            $options .= '<option value="' . $row['num_individu'] . '">' . $row['nom'] . ' ' . $row['prenom'] . '</option>';
        }
    }


    $connexion->close();
    ?>
    <form id="cinema" action="film1.php" method="post" enctype="multipart/form-data">
        <div class="film" id="film">
            <h1>Films</h1>

            <label class="label" for="text">Nom de realisateur: </label>
            <select name="num_realisateur" id="num_realisateur">
                <?php echo $options; ?>
            </select><br>
            <div>
                <label class="label" for="text">Titre: </label><br>
                <input type="text" name="titre" id="titre">

            </div><br>
            <div>
                <label class="label" for="text">Genre: </label>
                <input type="text" name="genre" id="genre">

            </div><br>
            <label class="label" for="text">Année: </label>
            <input type="text" name="annee" id="annee"><br>
            <div>
                <label class="label" for="text">Affiche: </label>
                <input type="file" name="image" id="image"><br>
            </div><br>
            <div>
                <input title="Envoyer ces informations" (onclick)="verifier()" type="submit" name="submit" value="Ajouter le film">
                <input title="Recommencer la saisie" type="reset" value="Effacer">
            </div>
            <p style="color: red;" id="erreur"></p>
    </form>
    <script src="scripts/script_film.js"></script>
</body>

</html>