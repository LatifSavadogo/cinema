<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$num_cinema=$_POST['num_cinema'];
$num_film = $_POST['num_film'];
$jour = $_POST['jour'];

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);

$sql = "INSERT INTO `projection`(num_cinema, num_film, jour) 
        VALUES ('$num_cinema','$num_film','$jour')";
  
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