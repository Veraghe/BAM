<?php
$mode =$_GET["m"];
$e= new Evenement($_POST);
switch ($mode) {
    case "ajout":
        EvenementManager::add($e);
    break;
    case "modif":
        EvenementManager::update($e);
    break;
    case "suppr":
        EvenementManager::delete($e);
    break;
}
header("location:index.php?action=listeEvenement");