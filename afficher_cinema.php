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
$sql = "SELECT * FROM `cinema`";
$ligne = mysqli_query($connexion, $sql);
$resultat = mysqli_query($connexion, $sql);

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
    <title>Liste des cinemas</title>
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
        <h1>Listes des cinéma</h1>
        <p>
            <tr>
                <!--<th>Numéro du cinema :</th>-->
                <th>Nom :</th>
                <th>Adresse :</th>
            </tr>
        </p>
        <?php foreach ($ligne as $lignes) : ?>
            <tr>
                <td><?= $lignes['nom'] ?></td>
                <td><?= $lignes['adresse'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


</body>

</html>