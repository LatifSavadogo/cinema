<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";

$connexion = new mysqli($serveur,$utilisateur,$motdepasse,$baseDeDonnee);


$num_film = $_POST['num_film'];
$num_realisateur = $_POST['num_realisateur'];
$titre = $_POST['titre'];
$genre = $_POST['genre'];
$annee = $_POST['annee'];
$num_individu = $_POST['num_individu'];
$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;
$num_cinema = $_POST['num_cinema'];
$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$num_acteur = $_POST['num_acteur'];
$role = $_POST['role'];

$sql = "INSERT INTO `film`(num_film, num_realisateur, titre, genre, annee) 
        VALUES ('$num_film','$num_realisateur','$titre','$genre','$annee')";
        
$sql1 = "INSERT INTO `individu` (num_individu, nom, prenom)
        VALUES ('$num_individu', '$nom', '$prenom')";

$sql2 = "INSERT INTO `cinema` (num_cinema, nom, adresse) 
        VALUES ('$num_cinema','$nom','$adresse')";
$sql3 = "INSERT INTO `jouer` (num_acteur, num_film, role)
        VALUES ('$num_acteur', '$num_film', '$role')";
   
   $resultat = $connexion->query($sql);
   $resultat1 = $connexion->query($sql1); 
   $resultat2 = $connexion->query($sql2); 
   $resultat3 = $connexion->query($sql3);      
    
    if (!$resultat || !$resultat1 || !$resultat2 || !$resultat3){
        die("Erreur dans la requête : " . $connexion->error);
       }

    if ($resultat === TRUE ) {
      echo "Enregistrement réussi";
    }else{
        echo "Erreur lors de l'enregistrement : " . $connexion->error;
    }
      $connexion->close();

?>