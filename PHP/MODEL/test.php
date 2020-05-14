<?PHP

function ChargerClasse($classe)
{
    if (file_exists("../CONTROLLER/" . $classe . ".Class.php")) {
        require "../CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists($classe . ".Class.php")) {
        require $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

//on active la connexion à la base de données
DbConnect::init();
//add
// $c= new Categorie(["libelleCategorie"=>"Brocante"]);
// CategorieManager::add($c); OK

//update
// $c=CategorieManager::getById(6);
// $c=>setLibelleCategorie("Kermesse");

//delete
// $c=CategorieManager::getById(6);
// CategorieManager::delete($c); OK

//getList
// $tab=CategorieManager::getList();
// foreach($tab as $cat)
// {
//     echo $cat->toString();OK
// }

//add
$u= new Utilisateur(["pseudo"=>"Ben","emailUtilisateur"=>"ben@ben.fr","motDePasse"=>"ben","role"=>1,"nomUtilisateur"=>"Fontaine","prenomUtilisateur"=>"Benjamin"]);
UtilisateurManager::add($u);