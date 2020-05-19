<?php
if(!isset($_POST['email']))
{
    include 'PHP/View/inscriptionHTML.php';
}
else
{
    $erreur ="";
    $i=0;

    $pseudo=$_POST['pseudo'];
    $motDePasse=md5($_POST['motDePasse']);
    $confirm=md5($_POST['confirm']);

    //on vérifie que le pseudo n'est pas dèjà utilisé
    $utilisateur=UtilisateurManager::getByPseudo($pseudo);
    if($pseudo->getPseudo()!=null)
    {
        $erreur .= "Ce Pseudo est déjà utlisé, veuillez en choisir un autre";
        $i++;
        //on vérifie que l'email n'existe pas déjà
        if($pseudo->getEmailUtilisateur()!=null)
        {
            $erreur .="Cet email est déjà utlisé";
            $i++;
        }
    }
    //verification du mdp
    if ($motDePasse != $confirm|| empty($confirm)|| empty($motDePasse))
    {
        $erreur .=" Le mot de passe est incorrect ou la confirmation ne correspond pas au mot de passe";
        $i++;
    }
    if($i==0) // si il n'y a pas d'erreurs
    {
        $nouveauUtilisateur= new Utilisateur(['pseudo'=>$_POST['pseudo'], 'motDePasse'=>md5($_POST['motDePasse']),'nomUtilisateur'=>$_POST['nom'], 'prenomUtilisateur'=>$_POST['prenomUtilisateur'],'emailUtilisateur'=>$_POST['emailUtilisateur'],'telephoneUtilisateur'=>$_POST['telephoneUtilisateur']]);
        
        UtilisateurManager::add($nouveauUtilisateur);

        $nouveauUtilisateur=UtilisateurManager::getByPseudo($_POST['pseudo']);
        echo '<p>Bienvenue'.$nouveauUtilisateur->getPseudo().', vous êtes maintenant inscrit.e </p>';

        $_SESSION['pseudo']= $nouveauUtilisateur->getPseudo();
        $_SESSION['nomUtilisateur']= $nouveauUtilisateur->getNomUtilisateur();
        $_SESSION['prenomUtilisateur']= $nouveauUtilisateur->getPrenomUtilisateur();
        header('url=index.php?action=default');
    }
    else 
    {
        echo '<p> Une ou plusieurs erreurs se sont produites durant l\'inscription</p>';
        echo '<p>'.$erreur.'</p>';
        header("url=index.php?action=inscription");
    }    
}