<?PHP

function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php")) {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php")) {
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VIEW/Footer.php';
}

// on initialise les paramètres du fichier parametre.ini
Parametre::init();
//on active la connexion à la base de données
DbConnect::init();
session_start();

$routes= [
    //Accueil
    "default" => ["php/view/", "Agenda","Agenda"],

    //Pour les utlisateurs
    "connexion" => ["php/view", "Connexion", "Connexion"],
    "inscription"=>["php/view", "Inscription", "Inscription"],
    "deconnexion" =>["php/view" , "Deconnexion","Deconnexion"],

    //Pour les inscrits
    "formEvenement"=> ["php/view","FormEvenement","FormEvenement"],

    //Pour les admins
    "admin"=> ["php/view", "Admin", "Admin"],
    "categorie"=>["php/view","FormCategorie","FormCategorie"],
    "listeUtilisateur"=>["php/view", "ListeUtilisateur","ListeUtilisateur"],
    "listeEvenement"=>["php/view", "ListeEvenement","ListeEvenement"]
];

if (isset($_GET["action"]))
{
    $action =$_GET["action"];

    if(isset($routes[$action]))
    {
        AfficherPage($toutes[$action]);
    }
    else
    {
        AfficherPage($routes["default"]);
    }

}
else
{
    AfficherPage($routes["default"]);
}
