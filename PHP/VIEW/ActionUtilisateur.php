<?php
$mode = $_GET["m"];
$p = new Utilisateur($_POST);
switch ($mode) {
    case "1":
        UtilisateurManager::add($p);
        break;
    case "2":
        UtilisateurManager::update($p);
        break;
    case "3":
        UtilisateurManager::delete($p);
        break;
}

if($role==1){
    header("location:index.php?action=listeUtilisateur");
}
else{
    header("location:index.php?action=default");
}

