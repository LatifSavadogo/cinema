<?php require_once('./session/session.php');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css">
    <title>Accueil</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="Menu">
        <menu type="toolbar">
            <button><a href="cinema.php">Cinéma</a></button>
            <button><a href="film.php">Films</a></button>
            <button><a href="individus.php">Individus</a></button>
            <button><a href="jouer.php">Jouer</a></button>
            <button><a href="projection.php">Projection</a></button>
            <button class="btn1"><a href="deconnexion.php">Deconnexion</a></button>
            <span style="font-size: large; margin-left:60px;">
                <span><?= $user['prenom'] . " " . $user['nom'] ?></span>
        </menu>
    </div>
    <div class="voir">
        <button class="bt"><a href="afficher_cinema.php">Liste des cinemas</a></button><br><br>
        <button class="bt"><a href="details_film.php">Liste des films</a></button><br><br>
        <button class="bt"><a href="afficher_individus.php">Liste des individus</a></button><br><br>
        <button class="bt"><a href="afficher_film_projeter">Liste des films projéter</a></button><br><br>
    </div>
</body>

</html>