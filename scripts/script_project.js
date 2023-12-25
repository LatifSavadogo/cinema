// Attachez un gestionnaire d'événement à l'événement "submit" du formulaire avec l'id "renseignement"
document.forms["cinema"].addEventListener("submit", function verifier(e) {

    var erreur; // Variable pour stocker les messages d'erreur

    // Récupérez les éléments du formulaire par leur ID
    var num_cinema = document.getElementById("num_cinema");
    var num_film = document.getElementById("num_film");
    var jour = document.getElementById("jour");


    // Vérifiez si le champ jour est vide
    if (!jour.value) {
        erreur = "Veuillez renseigner le jour !";
    }
    // Vérifiez si le champ num_film est vide
    if (!num_film.value) {
        erreur = "Veuillez renseigner le numéro du film !";
    }

    // Vérifiez si le champ de numéro du cinema est vide
    if (!num_cinema.value) {
        erreur = "Veuillez renseigner le numéro du cinema !";
    }

    // S'il y a une erreur, empêchez l'envoi du formulaire, affichez le message d'erreur et retournez false
    if (erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }

});
