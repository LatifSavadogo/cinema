<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);

$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;

$sql = "INSERT INTO `individu` (nom, prenom)
        VALUES ('$nom', '$prenom')";
$resultat = $connexion->query($sql);


if (!$resultat) {
    die("Erreur dans la requête : " . $connexion->error);
}

if ($resultat === TRUE) {
    echo "Enregistrement réussi";
} else {
    echo "Erreur lors de l'enregistrement : " . $connexion->error;
}
$connexion->close();

?>