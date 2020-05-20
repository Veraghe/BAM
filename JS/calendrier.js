function calendrier () {
    cible = document.querySelector('.cible'); //contenu du calendrier
    afficheDate = document.querySelector('.date'); //affiche date en haut du calendrier
    objav = document.querySelector('.av'); //flèche avant, pour changer le mois
    objav.ref = "av";
    objap = document.querySelector('.ap'); //flèche aprés, pour changer le mois
    objap.ref = "ap";
    cpt = 0;
    tabMois = new Array('Janv', 'Fev', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil', 'Aout', 'Sept', 'Oct', 'Nov', 'Dec'); //tableau des mois aves leurs noms
    divDroite= document.getElementById('divDroite')

    var calendar = function (mois) {
        tmpcalendar = new Date(); // objet date
        moisAujourdhui = tmpcalendar.getMonth() + 1 < 10 ? "0" + parseInt(tmpcalendar.getMonth() + 1) : parseInt(tmpcalendar.getMonth() + 1);
        jourAujourdhui = tmpcalendar.getDate() + 1 < 10 ? "0" + parseInt(tmpcalendar.getDate()) : parseInt(tmpcalendar.getDate());
        dateAujourdhui = parseInt(tmpcalendar.getFullYear() + "" + moisAujourdhui + "" + jourAujourdhui);
        // alert(jourAujourdhui);
        // rajoutJour =  tmpcalendar.getDate()<10? "0"+parseInt(tmpcalendar.getDate()):tmpcalendar.getDate();
        jour = tmpcalendar.getDate();
        tmpcalendar.setMonth(tmpcalendar.getMonth() + mois); // je fixe le mois par rapport à aujourd'hui
        tmpcalendar.setDate(1); // je récupère les informations du premier jour du mois
        premier = tmpcalendar.getDay(); // je recupère le premier de la semaine 

        afficheDate.innerHTML = tabMois[parseInt(tmpcalendar.getMonth())] + " " + tmpcalendar.getFullYear();
        decalage = premier == 0 ? 7 : premier; // gestion du décalage 
        memomois = tmpcalendar.getMonth(); // recup mois en cours
        for (j = 1; j < decalage; j++) { // rajoute les cases vide pour le décalage
            cible.innerHTML += "<button></button>";
        }
        for (i = 1; i < 32; i++) { // affiche tous les jours du mois en cours
            tmpcalendar.setDate(i); // on modifie la date pour chaque jour

            if (tmpcalendar.getMonth() == memomois) { // on verifie qu'on reste sur le même mois
                rajoutMois = memomois + 1 < 10 ? "0" + parseInt(memomois + 1) : parseInt(memomois + 1);
                rajoutJour = tmpcalendar.getDate() < 10 ? "0" + parseInt(tmpcalendar.getDate()) : tmpcalendar.getDate();
                dateEnCour = parseInt(tmpcalendar.getFullYear() + "" + rajoutMois + "" + rajoutJour);
                console.log(dateEnCour + "/jour" + dateAujourdhui);
                recup = tmpcalendar.getUTCFullYear() + "-" + rajoutMois + "-" + rajoutJour ;
                if (i == jour && mois == 0) { // on présente différemment le jour en cours
                    cible.innerHTML += "<button class='active date' id='" + recup + "'>" + i + "</button>";
                } else if (dateEnCour < dateAujourdhui) {
                    cible.innerHTML += "<button class='date verrou' disabled id='" + recup + "'>" + i + "</button>";
                    
                } else {
                    couleurBouton=rechercheEvenement(recup)
                   
                    if(couleurBouton!=undefined){
                        cible.innerHTML += "<button class='date event' id='" + recup + "'>" + i + "</button>";
                        document.getElementById(recup).style.backgroundColor=couleurBouton
                    }
                    else{
                        cible.innerHTML += "<button class='date' id='" + recup + "'>" + i + "</button>";
                    }
                    
                }
            }
        }
        tabDiv = document.querySelectorAll('.date');
        for (var i = 0; i < tabDiv.length; i++) {
            tabDiv[i].addEventListener("click", function () {
                divDroite.style.display='flex' // ici on affiche la div droite au moment du click
            }); // on ajoute l'événement click pour chaque jour
        }
    }
    var init = function () {
        cible.innerHTML = '';
        switch (this.ref) {
            case "ap":
                cpt++;
                break;
            case "av":
                cpt--;
                break;
        }
        calendar(cpt);
    }
    calendar(cpt);
    objav.addEventListener("click", init);
    objap.addEventListener("click", init);
}
calendrier();


function rechercheEvenement(dateEvent){// reçoit une date , recherche les évènements associer à cette date et renvoit la classe associer à la couleur de la catégorie
    //recherche des évènements liés à cette date
    
    //recherche des catégories des évènements
    //déduction de la classe associée
    if (dateEvent=='2020-05-21')
    return 'red';
}