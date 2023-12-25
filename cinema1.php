<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$sql = "INSERT INTO `cinema` (nom, adresse) 
        VALUES ('$nom','$adresse')";
    $resultat = $connexion->query($sql);

    if (!$resultat ) {
        die("Erreur dans la requête : " . $connexion->error);
    }

    if ($resultat === TRUE) {
        echo "Enregistrement réussi";
    } else {
        echo "Erreur lors de l'enregistrement : " . $connexion->error;
    }
    $connexion->close();

    ?>