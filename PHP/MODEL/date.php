<?php
//fichier pour appel AJAX
include "EvenementManager.Class.php";
// include "../Controller/Parametre.Class.php";
include "DbConnect.Class.php";
// Parametre::init();
DbConnect::init();
$date=$_POST['dateEvenement'];
echo json_encode(EvenementManager::getListByDateAPI($date));