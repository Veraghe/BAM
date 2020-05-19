<?php
$mode = $_GET["m"];
$p = new Utilisateur($_POST);
var_dump($p);
switch ($mode) {
    case "1":
        UtilisateurManager::add($p);
        break;
    case "2":
        if($p->getMotDePasse()== null){
            $original= UtilisateurManager::getById($p->getIdUtilisateur());
            $p->setMotDePasse($original->getMotDePasse());
        }
        else{
            $p->setMotDePasse(md5($p->getMotDePasse()));
        }
        UtilisateurManager::update($p);
        break;
    case "3":
        UtilisateurManager::delete($p);
        break;
}

// if($role==1){
//     header("location:index.php?action=listeUtilisateur");
// }
// else{
//     header("location:index.php?action=default");
// }

