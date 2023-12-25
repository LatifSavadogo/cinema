<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cinema.css">
    <title>Connexion</title>
</head>

<body>

    <form id="cinema" action="connexion1.php" method="post" enctype="multipart/form-data">
        <h1>Connexion</h1>
        <div>
            <label for="">Nom :</label>
            <input type="text" name="nom" id="nom"><br><br>
            <label for="">Prénom</label>
            <input type="text" name="prenom" id="prenom"><br><br>
            <label for="">Mot de passe</label>
            <input type="password" name="password" id="password"><br><br>

            <div>
                <input title="Envoyer ces informations" (onclick)="verifier()" type="submit" value="Connexion">
                <input title="Recommencer la saisie" type="reset" value="Effacer">
            </div>
            <p style="color: red;" id="erreur"></p>
        </div>

    </form>
    <script src="scripts/script_conn.js"></script>
</body>

</html>