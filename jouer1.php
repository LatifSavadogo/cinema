<?php
session_start();
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);
$role = $_POST['role'];
$num_film = $_POST['num_film'];
$num_acteur = $_POST['num_acteur'];

$sql = "INSERT INTO `jouer` (num_acteur, num_film, role)
VALUES ('$num_acteur', '$num_film', '$role')";


$resultat = $connexion->query($sql);
if (!$resultat){
die("Erreur dans la requête : " . $connexion->error);
}

if ($resultat === TRUE ) {
echo "Enregistrement réussi";
}else{
echo "Erreur lors de l'enregistrement : " . $connexion->error;
}
$connexion->close();

?>