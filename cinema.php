<?php require_once('./session/session.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cinema.css">
    <title>Cinema</title>
</head>

<span class="session">
    <div>
        <span class="nom"><?= $user['prenom'] . " " . $user['nom'] ?></span>
        <div class="btn_n">
            <button class="btn2"><a href="accueil.php">Accueil</a></button><br>
            <button class="btn1_1"><a href="deconnexion.php">Se deconnecter</a></button>
        </div>
    </div>
</span>

<body>
    <form id="cinema" method="post" action="cinema1.php" enctype="multipart/form-data">

        <div class="container">
            <h1>Cinema</h1>
            <div>
                <label class="label" for="text">Nom: </label>
                <input type="text" name="nom" id="nom">
                <!--<select name="nom" id="nom">
                    <option value="Zogona">Zogona</option>
                    <option value="Burkina">Burkina</option>
                    <option value="Neerwaya">Neerwaya</option>
                    <option value="La rose">La rose</option>
                    <option value="Sayon">Sayon</option>
                    <option value="Koko">Koko</option>
                    <option value="Yendabli">Yendabli</option>
                    <option value="Le fontenelle">Le fontenelle</option>
                    <option value="Tampouy">Tampouy</option>
                    <option value="Somgande">Somgande</option>
                    <option value="KY">KY</option>
                </select>-->
            </div><br>
            <div>
                <label class="label" for="text">Adresse </label>
                <input type="text" name="adresse" id="adresse">
                <!--<select name="adresse" id="adresse">
                    <option value="BP 234 Ouaga">BP 234 Ouaga</option>
                    <option value="BP 12 Ouaga">BP 12 Ouaga</option>
                    <option value="BP 55 Ouaga">BP 55 Ouaga</option>
                    <option value="BP 550 Kantchari">BP 550 Kantchari</option>
                    <option value="BP 34 Bobo">BP 34 Bobo</option>
                    <option value="Bobo">Bobo</option>
                    <option value="BP 44 Fada">BP 44 Fada</option>
                    <option value="Ouaga">Ouaga</option>
                    <option value="BP 180">BP 180</option>
                    <option value="BP 001 Tanghin">BP 001 Tanghin</option>
                </select>-->
            </div><br>
            <div>
                <input title="Envoyer ces informations" (onclick)="verifier()" type="submit" value="Enregistrer">
                <input title="Recommencer la saisie" type="reset" value="Effacer">
            </div>
            <p style="color: red;" id="erreur"></p>
    </form>
    <script src="scripts/script_cinema.js"></script>
</body>

</html>