// Attachez un gestionnaire d'événement à l'événement "submit" du formulaire avec l'id "renseignement"
document.forms["cinema"].addEventListener("submit", function verifier(e) {

    var erreur; // Variable pour stocker les messages d'erreur

    // Récupérez les éléments du formulaire par leur ID
    var num_film = document.getElementById("num_film");
    var num_acteur = document.getElementById("num_acteur");
    var role = document.getElementById("role");


    // Vérifiez si le champ role est vide
    if (!role.value) {
        erreur = "Veuillez renseigner le role !";
    }
    // Vérifiez si le champ num_film est vide
    if (!num_film.value) {
        erreur = "Veuillez renseigner le numéro du film !";
    }

    // Vérifiez si le champ de numéro de l'acteur est vide
    if (!num_acteur.value) {
        erreur = "Veuillez renseigner le numéro de l'acteur !";
    }



    // S'il y a une erreur, empêchez l'envoi du formulaire, affichez le message d'erreur et retournez false
    if (erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }

});
