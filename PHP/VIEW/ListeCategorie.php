<?php 
    $categorie= CategorieManager::getList();
    ?>
    <!------LISTE UTILISATEUR--------------------------------->
    <div class="titre">
        <p>Les Catégories</p>
    </div>
    <div class="tableau">
            <div class="ligne">
                <div class="bloc titre">Nom Catégorie</div>
                <div class="bloc titre">Couleur</div>
                <div class="bloc titre tailleP"></div>
                <div class="bloc titre tailleP"></div>
            </div>

            <?php
            foreach ($categorie as $elt) {
            echo'<div class="ligne">
                <div class="bloc contenu">'.$elt->getLibelleCategorie().'</div>
                <div class="bloc contenu">'.$elt->getCouleurCategorie().'</div>
                <div class="bloc contenu tailleP"><a href="index.php?action=categorie&m=2&id='.$elt->getIdCategorie().'"><i class="fas fa-edit"></i></a></div>
                <div class="bloc contenu tailleP"><a href="index.php?action=categorie&m=3&id='.$elt->getIdCategorie().'"><i class="fas fa-trash"></i></a></div>
            </div>'; 
            } ?>
         <div class="centrer divBTN">
            <a href="index.php?action=categorie&m=1" class="bouton centrer">Ajouter une catégorie</a>
            <a href="index.php?action=admin" class="bouton centrer">Retour</a>
        </div>
    </div>