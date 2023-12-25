<?php require_once('./session/session.php');
?>
<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);

//vérification de la connexion
if (!$connexion) {
    die("La connexion à échouer: " . mysqli_connect_error());
}
$sql = "SELECT projection.jour, cinema.nom, film.titre FROM `projection`
        JOIN `cinema` ON projection.num_cinema = cinema.num_cinema
        JOIN `film` ON projection.num_film = film.num_film";
$projection = mysqli_query($connexion, $sql);
$resultat = mysqli_query($connexion, $sql);
//vérification de l'exécution de la requête
if (!$resultat) {
    die("La requête à échoué: " . mysqli_connect_error($connexion));
}

mysqli_close($connexion);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css">
    <title>Film projeter</title>
</head>

<body>
    <span class="session">
        <div>
            <span class="nom"><?= $user['prenom'] . " " . $user['nom'] ?></span>
            <button class="btn2"><a href="accueil.php">Accueil</a></button>
            <button class="btn1_1"><a href="deconnexion.php">Se deconnecter</a></button>
        </div>
    </span>
    <table>
        <h1>Listes des films projéter</h1>
        <tr>
            <th>Nom du cinema</th>
            <th>Titre du film</th>
            <th>Jour</th>

        </tr>

        <?php foreach ($projection as $projections) : ?>
            <tr>
                <td><?= $projections['nom'] ?></td>
                <td><?= $projections['titre'] ?></td>
                <td><?= $projections['jour'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>