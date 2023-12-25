// Attachez un gestionnaire d'événement à l'événement "submit" du formulaire avec l'id "renseignement"
document.forms["cinema"].addEventListener("submit", function verifier(e) {

    var erreur; // Variable pour stocker les messages d'erreur
    var titre = document.getElementById("titre");
    var genre = document.getElementById("genre");
    var annee = document.getElementById("annee");
    var image = document.getElementById("image");

    // Vérifiez si le champ affiche est vide
    if (!image.value) {
        erreur = "Veuillez renseigner une image !";
    }

    // Vérifiez si le champ annee est vide
    if (!annee.value) {
        erreur = "Veuillez renseigner une annee !";
    }

    // Vérifiez si le champ de genre est vide
    if (!genre.value) {
        erreur = "Veuillez renseigner un genre !";
    }
    // Vérifiez si le champ de titre est vide
    if (!titre.value) {
        erreur = "Veuillez renseigner un titre !";
    }


    if (erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }

});
