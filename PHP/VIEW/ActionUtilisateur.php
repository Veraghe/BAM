<?php
$mode = $_GET["m"];
$p = new Utilisateur($_POST);
switch ($mode) {
    case "ajout":
        UtilisateurManager::add($p);
        break;
    case "modif":
        UtilisateurManager::update($p);
        break;
    case "suppr":
        UtilisateurManager::delete($p);
        break;
}

if($role==1){
    header("location:index.php?action=listeUtilisateur");
}
else{
    header("location:index.php?action=default");
}

