<?php
$mode = $_GET["m"];
$p = new Utilisateur($_POST);

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
        $user=UtilisateurManager::getById($p->getIdUtilisateur());
        $p->setMotDePasse($user->getMotDePasse());
        UtilisateurManager::delete($p);
        break;
}
var_dump($p);

// if($role==1){
//     header("location:index.php?action=listeUtilisateur");
// }
// else{
//     header("location:index.php?action=default");
// }

