<?php
$mode=$_GET["m"];
$c= new Categorie($_POST);
switch($mode) {
    case "ajout":
        CategorieManager::add($c);
    break;
    case "modif":
        CategorieManager::update($c);
    break;
    case "suppr":
        CategorieManager::delete($c);
    break;
}

header("location:index.php?action=listeCategorie");