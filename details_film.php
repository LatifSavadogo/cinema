<?php require_once('./session/session.php');
?>
<?php
$connexion = new mysqli("localhost", "root", "", "bdtp1");
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);

//vérification de la connexion
if (!$connexion) {
    die("La connexion à échouer: " . mysqli_connect_error());
}
$sql = "SELECT * FROM film";
$film = mysqli_query($connexion, $sql);
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
    <title>Detail du film</title>
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
        <h1>Listes des films</h1>
        <tr>
        <tr>
            <!--<th>Réalisateur :</th>-->
            <th>Titre :</th>
            <th>Genre :</th>
            <th>Année :</th>
            <th>Affiche :</th>

        </tr>
        </tr>

        <?php foreach ($film as $films) : ?>
            <tr>
                <td><?= $films['titre'] ?></td>
                <td><?= $films['genre'] ?></td>
                <td><?= $films['annee'] ?></td>
                <td><?= $films['affiche'] ?></td>
                <td><a class="a1" href="Film/Image/?= $films['affiche'] ?>">Télécharger l'affiche</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>