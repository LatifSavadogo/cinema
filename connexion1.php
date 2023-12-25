<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$baseDeDonnee = "bdtp1";
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $baseDeDonnee);

    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["password"])) {

        $nom= $_POST["nom"];
        $prenom = $_POST["prenom"];
        $password = $_POST["password"];
        $requete = "SELECT * FROM `connexion` WHERE nom ='{$nom}' AND prenom = '{$prenom}'";
        $sql = mysqli_query($connexion ,$requete);
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);  
            
            $passwrd1 = md5($password);
            $passwrd_form = sha1($passwrd1);
            $passwrd_bd = $row['passwrd'];
            
            if($password === $passwrd_bd){
                session_start();             
                $_SESSION["connecte"] = $row['id'];
                header('location:accueil.php');
                
            }else{
                echo 'identifiant incorrect';
            } 
        }
    }


?>