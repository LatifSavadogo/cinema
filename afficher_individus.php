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
$sql = "SELECT * FROM `individu`";
$individu = mysqli_query($connexion, $sql);

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
    <title>Document</title>
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
        <h1>Listes des individus</h1>
        <tr>
            <!--<th>Numero</th>-->
            <th>Nom</th>
            <th>Prenom</th>

        </tr>

        <?php foreach ($individu as $individus) : ?>
            <tr>
                <td><?= $individus['nom'] ?></td>
                <td><?= $individus['prenom'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>