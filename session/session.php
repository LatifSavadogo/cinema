<?php //require_once('afficher_cinema.php');
session_start();

$connexion = new mysqli("localhost", "root", "", "bdtp1");
$user = null;
//vérification de la connexion
if (!$connexion) {
    die("La connexion à échouer: " . mysqli_connect_error());
}

if ($_SESSION['connecte']) {
    $id = (int) $_SESSION['connecte'];
    $sql = mysqli_query($connexion, "   SELECT * FROM connexion where id = {$id}   ");
    if (mysqli_num_rows($sql) > 0) {
        $user = mysqli_fetch_assoc($sql);
    }
} else {
    header("location:connexion.php");
}
