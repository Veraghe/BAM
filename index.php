<?php

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
    "default" => ["PHP/VIEW/", "Agenda","Agenda"],

    //Pour les utlisateurs
    "connexion" => ["PHP/VIEW/", "Connexion", "Connexion"],
    "inscription"=>["PHP/VIEW/", "Inscription", "Inscription"],
    "deconnexion" =>["PHP/VIEW/" , "Deconnexion","Deconnexion"],

    //Pour les inscrits
    "formEvenement"=> ["PHP/VIEW/","FormEvenement","FormEvenement"],

    //Pour les admins
    "admin"=> ["PHP/VIEW/", "Admin", "Admin"],
    "categorie"=>["PHP/VIEW/","FormCategorie","FormCategorie"],
    "listeCategorie"=>["PHP/VIEW/", "ListeCategorie","ListeCategorie"],
    "listeUtilisateur"=>["PHP/VIEW/", "ListeUtilisateur","ListeUtilisateur"],
    "listeEvenement"=>["PHP/VIEW/", "ListeEvenement","ListeEvenement"],

    //action
    "actionEvenement"=>["PHP/VIEW/", "ActionEvenement","ActionEvenement"],
    "actionUtilisateur"=>["PHP/VIEW/", "ActionUtilisateur","ActionUtilisateur"],
    "actionCategorie"=>["PHP/VIEW/", "ActionCategorie","ActionCategorie"]
];

if (isset($_GET["action"]))
{
    $action =$_GET["action"];

    if(isset($routes[$action]))
    {
        AfficherPage($routes[$action]);
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
