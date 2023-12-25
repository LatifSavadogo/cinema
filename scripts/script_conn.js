document.forms["cinema"].addEventListener("submit", function verifier(e) {

    var erreur; // Variable pour stocker les messages d'erreur
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("prenom");
    var password = document.getElementById("password");


    // Vérifiez si le champ de mot de passe est vide
    if (!password.value) {
        erreur = "Veuillez renseigner un mot de passe";
    }

    // Vérifiez si le champ de prénom est vide
    if (!prenom.value) {
        erreur = "Veuillez renseigner un prénom";
    }

    // Vérifiez si le champ de nom est vide
    if (!nom.value) {
        erreur = "Veuillez renseigner un nom";
    }

    // S'il y a une erreur, empêchez l'envoi du formulaire, affichez le message d'erreur et retournez false
    if (erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }

});
