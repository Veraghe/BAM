<?php
$mode=$_GET["m"];
$c= new Categorie($_POST);
switch($mode) {
    case "1":
        CategorieManager::add($c);
    break;
    case "2":
        CategorieManager::update($c);
    break;
    case "3":
        CategorieManager::delete($c);
    break;
}

header("location:index.php?action=listeCategorie");