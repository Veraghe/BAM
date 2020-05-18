<?php
if(!isset($_POST['pseudo']))
{
    require 'PHP/View/connexionHTML.php';
}
else
{
    $message='';
    if (empty($_POST['pseudo']) || empty($_POST['password']))
    {
        $message='<p>Veuillez remplir tous les champs pour vous identifiez.</p>';
                  header("url=index.php?action=connexion");  
    }
    else
    {
        $utilisateur=UtilisateurManager::getByPseudo($_POST['pseudo']);

    if($utilisateur->getMotDePasse()==md5($_POST['password']))
        {
            $_SESSION['pseudo']= $utilisateur->getPseudo();
            $_SESSION['nomUtilisateur']=$utilisateur->getNomUtilisateur();
            $_SESSION['prenomUtilisateur']=$utilisateur->getPrenomUtilisateur();
            $_SESSION['idUtilisateur']=$utilisateur->getIdUtilisateur();
            header('url=index.php?action=default');
        }
        else
        {
            $message='<p>Informations incorrectes! Veuillez les vérifier!</p>';
            header("url=index.php?action=connexion");
        }
    }
    echo $message;
}