<?php
//Attribution des variables de session
$role = (isset($_SESSION['role'])) ? (int) $_SESSION['role'] : 1;
$pseudo = (isset($_SESSION['pseudo'])) ? $_SESSION['pseudo'] : '';
$action = (isset($_GET['action'])) ? $_GET['action'] : '';
$id = (isset($_SESSION['idUtilisateur'])) ? (int) $_SESSION['idUtilisateur'] :'';


?>

<body>
    <!--HEADER---------------------------------------------------------------------->
    <header>
        <div class="top pseudo">
            <a href="index.php?action=connexion"><i class="fas fa-user-circle"></i></a>
            <?php
          if ($pseudo !=null){
                echo'<div class="nomHeader">
                    <p>Bonjour</p>
                    <b>'.$pseudo.'</b>
                    <a href="index.php?action=deconnexion">Se déconnecter</a>
                </div>';
             }
            ?>
        </div>
        
        <div class="centre top">
            <div class="logo">
               <a href="index.php?action=default"> <img src="IMAGES/logoville.png" alt="logo de la ville" ></a>
            </div>
        </div>

        <div class="droite2 top">
            <?php
            if($role==1 && $action!='connexion'){
            ?>  
            <a href="index.php?action=admin"><i class="fas fa-tasks"></i> Admin</a>  
            <?php
            }
            ?>
        </div>
    </header>