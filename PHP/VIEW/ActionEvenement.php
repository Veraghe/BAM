<?php
$mode =$_GET["m"];
$e= new Evenement($_POST);
switch ($mode) {
    case "1":
        EvenementManager::add($e);
    break;
    case "2":
        EvenementManager::update($e);
    break;
    case "3":
        EvenementManager::delete($e);
    break;
}
header("location:index.php?action=listeEvenement");