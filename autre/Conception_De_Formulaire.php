<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cinema.css">
    <title>Application</title>
</head>

<body>
    <form id="cinema" method="post" action="application.php" enctype="multipart/form-data">
        <div class="Cinema" id="cinema">
            <h1>Cinema</h1>
            <label for="num_cinema">Numero du cinema :</label>
            <input type="text" name="num_cinema" id="num_cinema"><br>
            <label class="label" for="text">Nom: </label>
            <input type="text" id="nom" name="nom"><br>
            <label class="label" for="text">Adresse </label>
            <input type="text" id="adresse" name="adresse"><br>
        </div>
        <div class="film" id="film">
            <h1>Films</h1>
            <label class="label" for="text">Numero film</label>
            <input type="text" name="num_film" id="num_film"><br>
            <label class="label" for="text">Numero de realisateur</label>
            <input type="text" name="num_realisateur" id="num_realisateur"><br>
            <label class="label" for="text">titre</label><br>
            <input type="text" name="titre" id="titre"><br>
            <label class="label" for="text">genre</label>
            <input type="text" name="genre" id="genre"><br>
            <label class="label" for="text">annee</label>
            <input type="text" name="annee" id="annee"><br>

        </div>
        <div class="individu" id="individu">
            <h1>Individus</h1>
            <label for="num_indiv">Numero de l'individu :</label>
            <input type="text" name="num_individu" id="num_individu"><br>
            <label class="label" for="text">Nom: </label>
            <input type="text" id="nom" name="nom"><br>
            <label class="label" for="text">Prenom: </label>
            <input type="text" id="prenom" name="prenom"><br>
        </div>
        <div class="jouer">
            <h1>Jouer</h1>
            <label for="num_acteur">numero de l'acteur</label>
            <input type="text" name="num_acteur" id="num_acteur"><br>
            <label for="Rôle">Rôle</label>
            <input type="text" name="role" id="role">
        </div>
        <button value="submit">Enregistrer</button>
    </form>
    <!--<form action="get" action=application.php enctype="multipart/form-data">
        <div class="JOUER" id="JOUER">
        <label for="num_acteur">numero de l'acteur</label>
        <input type="text" name="num_acteur" id="num_acteur"><br>
        <label for="num_film"> numero du film</label>
        <input type="text" name="num_film" id="num_film"><br>
        <label for="rôle">rôle</label>
        inp
        </div>
    </form>-->
</body>

</html>