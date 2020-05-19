// on recupere les input et on declenche les evenements pour faire les controles
var lesInputs = document.getElementsByTagName('input');
for (i = 0; i < lesInputs.length; i++)
    lesInputs[i].addEventListener("input", verif);
//Gestion des erreurs
var erreurs = {
    "pseudo": 0,
    "motDePasse": 0,
    "nomUtilisateur": 0,
    "prenomUtilisateur": 0,
    "emailUtilisateur": 0,
    "telephoneUtilisateur": 0
}
ActiveValider();

function verif(event) {
    // permet de controller la validité d'un champ du formulaire
    // on recupere l'input sur lequel faire la verification
    var monInput = event.target;
    //on recupere les elements correspondant à l'input
    var message = (monInput.parentNode).getElementsByClassName('message')[0];

    if (monInput.value == '') {
        // si le champ est vide, on affiche rien
        monInput.style.borderBottom="solid 4px red";
        erreurs[monInput.name]=0;
    } else if (!monInput.checkValidity() ) { 
        // force le test du pattern sur l'input
        monInput.style.borderBottom = "solid 4px red";
        erreurs[monInput.name]=0;
    } else //if (monInput.checkValidity())
    {
        monInput.style.borderBottom = "solid 4px green";
        erreurs[monInput.name]=1;
    }
    ActiveValider();
}


function ActiveValider() {
    // verifie la validité de tout le formulaire
    document.getElementById('valider').disabled = false;
    for (var key in erreurs) {
        if (erreurs[key]==0)
        document.getElementById('valider').disabled = true;
    }

}
