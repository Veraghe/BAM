<?php 

$categorie= CategorieManager::getList();
if(isset($_GET["m"]))
$mode = $_GET["m"];

if ($mode != "1") {
    $id = $_GET["id"];
    $var = EvenementManager::getById($id);
    
}


switch ($mode) {
    case "1":
        $texteBouton = "Ajouter";
        break;
    case "2":
        $texteBouton = "Modifier";
        break;
    case "3":
        $texteBouton = "Supprimer";
        break;
}


?>

<div class="titre">
        <p>Évènement</p>
    </div>
    <div class="center">
        <div class="formulaire">
            <form method="post" action="index.php?action=actionEvenement&m=<?php echo $mode; ?>">    
            <?php 
            if ($mode !="1"){
            ?>
                <input type="hidden" name="idEvenement" value="<?php if(isset($var)) echo $var->getIdEvenement(); ?>">
            <?php
            }    
            ?>
            <input type="hidden" name="idUtilisateur" value="<?php echo $_SESSION['idUtilisateur']//recupérer l'id de l'utilisateur actuelle ?>">
                    <div class="colonne">
                        <div> 
                            <label for="libelleEvenement">Nom de l'évènement :</label>
                            <input name="libelleEvenement" type="text" id="libelleEvenement" required autofocus <?php if ($mode==3){
                                                                                                                                    echo "readonly";
                                                                                                                                    }  if($mode !="1"){
                                                                                                                                        
                                                                                                                                    echo 'value="'.$var->getLibelleEvenement().'"';
                                                                                                                                    }?>/>
                        </div>
                        <div> 
                            <label for="dateEvenement">Date : </label>
                            <input type="date" id="dateEvenement" name="dateEvenement" required <?php if ($mode==3){
                                                                                                      echo "readonly";
                                                                                                    }  if($mode !="1"){
                                                                                                        
                                                                                                     echo 'value="'.$var->getDateEvenement().'"';
                                                                                                    }?>/>
                        </div>
                        <div> 
                            <label for="descriptionEvenement">Description :</label>
                            <input name="descriptionEvenement" type="text" id="descriptionEvenement" required <?php if ($mode==3){
                                                                                                      echo "readonly";
                                                                                                    }  if($mode !="1"){
                                                                                                        
                                                                                                     echo 'value="'.$var->getDescriptionEvenement().'"';
                                                                                                    }?>/>
                        </div>
                        <div> 
                            <label for="auteurEvenement">Auteur de l'évènement :</label>
                            <input name="auteurEvenement" type="text" id="auteurEvenement" required <?php if ($mode==3){
                                                                                                                    echo "readonly";
                                                                                                                    }  if($mode !="1"){
                                                                                                                        
                                                                                                                    echo 'value="'.$var->getAuteurEvenement().'"';
                                                                                                                    }?>/>
                        </div>
                        <div> 
                            <label for="lieuEvenement">Lieu : </label>
                            <input type="text" id="lieuEvenement" name="lieuEvenement" required <?php if ($mode==3){
                                                                                                      echo "readonly";
                                                                                                    }  if($mode !="1"){
                                                                                                        
                                                                                                     echo 'value="'.$var->getLieuEvenement().'"';
                                                                                                    }?>/>
                        </div>
                        <div>
                            <label for="categorie">Categorie: </label>
                            <select name="idCategorie" id="idCategorie">
                                    <?php
                                        foreach ($categorie as $elt) {
                                            echo '<option value = "' . $elt->getIdCategorie() . '"';
                                            if($mode!=1){
                                                if($elt->getIdCategorie()==$var->getIdCategorie()){
                                                    echo 'selected ="' . $elt->getLibelleCategorie() . '"';
                                                }
                                                    
                                            }
                                            echo ' >' . $elt->getLibelleCategorie() . ' </option>';
                                        }
                                        ?>
                                </select>
                        </div>
                        <div> 
                            <label for="DateCreation">Date de création :</label>
                            <input name="DateCreation" type="date" id="DateCreation" required />
                        </div>
                    </div>
            
                <div class="centrer">
                    <input class="bouton centrer" type="submit" value="<?php echo $texteBouton ?>" />
                </div>
            </form>
        </div>
    </div>