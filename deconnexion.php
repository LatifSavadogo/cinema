<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    unset($_SESSION["connecte"]);

    header("Location:connexion.php");
?>
