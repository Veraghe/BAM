<?PHP

function ChargerClasse($classe)
{
    if (file_exists("../CONTROLLER/" . $classe . ".Class.php")) {
        require "../CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists($classe . ".Class.php")) {
        require  $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

Parametre::init();
//on active la connexion à la base de données
DbConnect::init();
session_start();

/**********************Test Categorie***************************/
//add
$c= new Categorie(["libelleCategorie"=>"Test"]);
CategorieManager::add($c); 

//update
// $c=CategorieManager::getById(6);
// $c->setLibelleCategorie("Kermesse");
// CategorieManager::update($c);OK

//delete
// $c=CategorieManager::getById(6);
// CategorieManager::delete($c); OK

//getList
// $tab=CategorieManager::getList();
// foreach($tab as $cat)
// {
//     echo $cat->toString();OK
// }


/***************** Test Utilisateur***************************/ 

//add
// $u= new Utilisateur(["pseudo"=>"Ben","emailUtilisateur"=>"ben@ben.fr","motDePasse"=>"ben","role"=>1,"nomUtilisateur"=>"Fontaine","prenomUtilisateur"=>"Benjamin"]);
// UtilisateurManager::add($u);

//update
// $u=UtilisateurManager::getByPseudo('Ben');
// $u->setPseudo("Toto");
// UtilisateurManager::update($u);OK

//delete
// $u=UtilisateurManager::getByPseudo('Toto');
// UtilisateurManager::delete($u);OK

//getList
// $tab=UtilisateurManager::getList();
// foreach($tab as $user)
// {
//     echo $user->toString()."\n";
// }OK

/************************Test Evenement********************/

//add
// $e= new Evenement(["libelleEvenement"=>"Tournoi Ping Pong","dateEvenement"=>"2020-06-10","descriptionEvenement"=>"ping","auteurEvenement"=>"Nico","lieuEvenement"=>"Gymnase","dateCreation"=>"2020-05-14","idUtilisateur"=>"2","idCategorie"=>"4"]);
// EvenementManager::add($e);

//update
// $e= EvenementManager::getById(3);
// $e->setAuteurEvenement('Nicoms');
// EvenementManager::update($e);OK

//delete
// $e=EvenementManager::getById(3);
// EvenementManager::delete($e);OK

//getListByDate
// $event= new DateTime("2020-06-10");

// $tab=EvenementManager::getListByDate($event);
// foreach($tab as $date)
// {

//     echo $date->toString();

// }
//Test effectué avec un id et cela renvoie bien une liste, la requete en BDD direct fonctionne également avec une date, le problème viendrait peut être du format de la date en paramètre

