//afficher avec l'oeil
var mdp = document.getElementById("motDePasse");
var oeil = document.getElementById("oeil");
oeil.addEventListener("click", voirPassword);

function voirPassword() {

    if (mdp.type === "password") {
        mdp.type = "text";
    } else {
        mdp.type = "password";
    }
}
