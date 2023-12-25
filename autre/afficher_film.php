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
    
    $sql = "SELECT num_film,num_realisateur, titre, affiche, annee, genre FROM film ";

    $resultat = mysqli_query($connexion, $sql);
    $sql1 = mysqli_fetch_assoc($resultat);
    if (!$resultat) {
        die("La requête à échoué: " . mysqli_connect_error($connexion));
    }
    $enregistrement = mysqli_fetch_object($resultat);
    echo "<h1 >Film</h1>";
    while ($ligne = mysqli_fetch_assoc($resultat)) {

        echo "<div style='text-align:center; font-size:large;'>
    <strong style='color:white;'> Numéro Du film </strong> : " . $ligne["num_film"] . ";" . " " .
            "<strong style='color:white;'> Numéro du réalisateur:</strong>"  . $ligne["num_realisateur"] . ";" . " " .
            "<strong style='color:white;'> Titre: <strong style='color:white;'> " . $ligne["titre"] . ";" . " " .
            "<strong style='color:white;'> Genre: <strong style='color:white;'> " . $ligne["genre"] . ";" . " " .
            "<strong style='color:white;'>Année: <strong style='color:white;'> " . $ligne["annee"] . ";" . " " .
            "<img src = 'Film/Image/' style='color:white;' alt ='Image du film'  >" .$ligne["affiche"].
            "<br>" . "<br>" . "  " . "</div>";
    }
    mysqli_close($connexion);
    /**<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);

//vérification de la connexion
if (!$connexion) {
    die("La connexion à échouer: " . mysqli_connect_error());
}
$affiche = "Film/Image";
$sql = "SELECT num_film, titre, affiche FROM film";

$resultat = mysqli_query($connexion, $sql);

mysqli_close($connexion);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des films</title>
</head>
<body>
    <h1>Listes des films</h1>
    <?php
        while($row  = mysqli_fetch_assoc($resultat)){
            $num_film = $row['num_film'];
            $titre = $row['titre'];
            $affiche = $row['affiche'];

            echo "<a href='details_film.php?
            num_film=$num_film'>";
            echo"<img src='$affiche' alt = 'Image du film $titre'>";
            echo"</a>";
        }
        </body>
    </html> */

    ?>