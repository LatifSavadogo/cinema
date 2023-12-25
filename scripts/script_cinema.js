// Attachez un gestionnaire d'événement à l'événement "submit" du formulaire avec l'id "renseignement"
document.forms["cinema"].addEventListener("submit", function verifier(e) {

    var erreur; // Variable pour stocker les messages d'erreur

    // Récupérez les éléments du formulaire par leur ID
    var nom = document.getElementById("nom");
    var adresse = document.getElementById("adresse");


    // Vérifiez si le champ de mot de passe est vide
    if (!adresse.value) {
        erreur = "Veuillez renseigner une adresse !";
    }

    // Vérifiez si le champ de nom est vide
    if (!nom.value) {
        erreur = "Veuillez renseigner un nom !";
    }
    

    // S'il y a une erreur, empêchez l'envoi du formulaire, affichez le message d'erreur et retournez false
    if (erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }

});
