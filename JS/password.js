//afficher l'oeil dans la connexion.
var mdp = document.getElementById("password");
var oeil = document.getElementById("oeil");
oeil.addEventListener("click", voirPassword);

function voirPassword() {

    if (mdp.type === "password") {
        mdp.type = "text";
    } else {
        mdp.type = "password";
    }
}
