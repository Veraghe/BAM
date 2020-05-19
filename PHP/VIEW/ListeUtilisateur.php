    <?php 
    $utilisateur= UtilisateurManager::getList();
    ?>
    <!------LISTE UTILISATEUR--------------------------------->
    <div class="titre">
        <p>Les utilisateurs</p>
    </div>
    <div class="tableau">
            <div class="ligne">
                <div class="bloc titre">Pseudo</div>
                <div class="bloc titre">M. de P.</div>
                <div class="bloc titre">Nom</div>
                <div class="bloc titre">Prénom</div>
                <div class="bloc titre">Téléphone</div>
                <div class="bloc titre tailleG">Email</div>
                <div class="bloc titre tailleP">Rôle</div>
                <div class="bloc titre tailleP"></div>
                <div class="bloc titre tailleP"></div>
            </div>

            <?php
            foreach ($utilisateur as $elt) {
            echo'<div class="ligne">
                <div class="bloc contenu">'.$elt->getPseudo().'</div>
                <div class="bloc contenu">'.$elt->getMotDePasse().'</div>
                <div class="bloc contenu">'.$elt->getNomUtilisateur().'</div>
                <div class="bloc contenu">'.$elt->getPrenomUtilisateur().'</div>
                <div class="bloc contenu">'.$elt->getTelephoneUtilisateur().'</div>
                <div class="bloc contenu tailleG">'.$elt->getEmailUtilisateur().'</div>
                <div class="bloc contenu tailleP">'.$elt->getRole().'</div>
                <div class="bloc contenu tailleP"><a href="index.php?action=inscription&m=2&id='.$elt->getIdUtilisateur().'"><i class="fas fa-edit"></i></a></div>
                <div class="bloc contenu tailleP"><a href="index.php?action=inscription&m=3&id='.$elt->getIdUtilisateur().'"><i class="fas fa-trash"></i></a></div>
            </div>'; 
            } ?>
         <div class="centrer divBTN">
            <a href="index.php?action=inscription&m=1" class="bouton centrer">Ajouter un utilisateur</a>
        </div>
    </div>