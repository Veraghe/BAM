<?php
$evenement = EvenementManager::getList();
?>
<!------LISTE EVENEMENT--------------------------------->
    <div class="titre">
        <p>Liste des évènements en attente</p>
    </div>
    <div class="tableau">

            <div class="ligne">
                <div class="bloc titre">Catégorie</div>
                <div class="bloc titre">Libelle</div>
                <div class="bloc titre">Date</div>
                <div class="bloc titre">Auteur</div>
                <div class="bloc titre">Lieu</div>
                <div class="bloc titre tailleG">Description</div>
                <div class="bloc titre tailleP"></div>
                <div class="bloc titre tailleP"></div>
            </div>
         
             <?php
            foreach ($evenement as $elt ) {
            echo'<div class="ligne">
                <div class="bloc contenu">'.$elt->getCategorieEvenement()->getLibelleCategorie().'</div> <!--mettre le libelle !!-->
                <div class="bloc contenu">'.$elt->getLibelleEvenement().'</div>
                <div class="bloc contenu">'.$elt->getDateEvenement().'</div>
                <div class="bloc contenu">'.$elt->getAuteurEvenement().'</div>
                <div class="bloc contenu">'.$elt->getLieuEvenement().'</div>
                <div class="bloc contenu tailleG">'.$elt->getDescriptionEvenement().'</div>
                <div class="bloc contenu tailleP"><a href="index.php?action=formEvenement&m=modif&id='.$elt->getIdEvenement().'"><i class="fas fa-edit"></i></a></div>
                <div class="bloc contenu tailleP"><a href="index.php?action=formEvenement&m=modif&id='.$elt->getIdEvenement().'"><i class="fas fa-trash"></i></a></div>
            </div>'; 
            } ?>

         <div class="centrer">
            <a href="index.php?action=formEvenement&m=ajout" class="bouton centrer">Ajouter un évènements</a>
        </div>
    </div>