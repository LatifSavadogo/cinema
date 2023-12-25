
<?php 

    if(!isset($_POST['num_film'])){
    $serveur = "localhost";
    $utilisateur = "root";
    $motdepasse = "";
    $baseDeDonnee = "bdtp1";
    
    $num_film= require_once('film1.php');
    $titre = require_once('film1.php');
    $num_realisateur = require_once('film1.php');
    $genre = require_once('film1.php');
    $annee = $_POST['annee'] =  require_once('film1.php');
    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);
    //vérification de la connexion
    if (!$connexion) {
        die("La connexion à échouer: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM film WHERE num_film ='{$num_film}'";
    $resultat = mysqli_query($connexion, $sql);
    if($resultat){
        echo"<h1>Détails du film</h1>";
        echo"<img src='Film/Image/" .  "' alt= 'Image du film : {$titre}'>";
        echo "<p>Numéro du film: {$num_film}" . "</p>";
        echo "<p>Numéro du réalisateur: {$num_realisateur }" . "</p>";
        echo "<p>Titre du film: {$titre}" . "</p>";
        echo "<p>Genre du film: {$genre}" . "</p>";
        echo "<p>Année de réalisation du film: {$annee}"  . "</p>";
        
    }else{
        echo"Film non trouvé. ";
    }
    mysqli_close($connexion);
    } else{
        echo"Numéro du film non spécifié. ";
    }
?>