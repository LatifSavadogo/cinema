<?php
if(isset($_POST['submit'])){
    $num_realisateur = $_POST['num_realisateur'];
    $titre = $_POST['titre'];
    $genre = $_POST['genre'];
    $annee = $_POST['annee'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $dossier = 'Film/Image/';
    $image= $_FILES['image'];
    $fichier = basename($img_name);
    if(isset($image)){ 
        if(move_uploaded_file($tmp_name, $dossier.$fichier)){
        echo"L'image à été uploader avec succès.";

        $serveur = "localhost";
        $utilisateur = "root";
        $motdepasse = "";
        $baseDeDonnee = "bdtp1";

        $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);
        
        if(!$connexion){
            die("la connexion à échouer:" . mysqli_connect_error());
        }
        $sql = "INSERT INTO `film`(num_realisateur, titre, genre, annee, affiche) 
                VALUES ('$num_realisateur','$titre','$genre','$annee','$fichier')";
                
        if(mysqli_query($connexion, $sql)){
            echo "<div class = \"affiche\">
                    <p class=\"titre\">Titre: {$titre}</p>
                    <p class=\"titre\">Genre: {$genre}</p>
                    <p class=\"titre\">Année: {$annee}</p>
                    <img src=\"Film/Image/{$img_name}\">
                    </div>";
        }else{
            echo"Un problème est survenu lors de l'insertion des données dans la base de donnée ". 
            mysqli_error($connexion);
        }
        mysqli_close($connexion);
    }else{
        echo "Un problème est survenu lors de l'upload de l'image .";
    }
}

}

?>

