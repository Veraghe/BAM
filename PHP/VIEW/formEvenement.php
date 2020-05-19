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

var_dump($var);
?>

<div class="titre">
        <p>Évènement</p>
    </div>
    <div class="centrer">
        <div class="formulaire">
            <form method="post" action="index.php?action=actionEvenement&m=<?php echo $mode; ?>">    
            <?php 
            if ($mode !="1"){
            ?>
                <input type="hidden" name="idEvenement" value="<?php echo $var->getIdEvenement(); ?>">
            <?php
            }    
            ?>
                    <div class="colonne">
                        <div> 
                            <label for="libelleEvenement">Nom de l'évènement :</label>
                            <input name="libelleEvenement" type="text" id="libelleEvenement" required autofocus <?php if ($mode==3){
                                                                                                                                          echo "readonly";
                                                                                                                                        } ?> value="<?php if($mode !="1"){
                                                                                                                                            echo $var->getLibelleEvenement();
                                                                                                                                        }?>"/>
                        </div>
                        <div> 
                            <label for="dateEvenement">Date : </label>
                            <input type="date" id="dateEvenement" name="dateEvenement" required <?php if ($mode==3){
                                                                                                                    echo "readonly";
                                                                                                                  } ?> value="<?php if($mode !="1"){
                                                                                                                  echo $var->getDateEvenement();
                                                                                                                  }?>"/>
                        </div>
                        <div> 
                            <label for="descriptionEvenement">Description :</label>
                            <input name="descriptionEvenement" type="text" id="descriptionEvenement" required <?php if ($mode==3){
                                                                                                                                          echo "readonly";
                                                                                                                                        } ?> value="<?php if($mode !="1"){
                                                                                                                                            echo $var->getDescriptionEvenement();
                                                                                                                                        }?>"/>
                        </div>
                        <div> 
                            <label for="auteurEvenement">Auteur de l'évènement :</label>
                            <input name="auteurEvenement" type="text" id="auteurEvenement" required <?php if ($mode==3){
                                                                                                                                echo "readonly";
                                                                                                                                } ?> value="<?php if($mode !="1"){
                                                                                                                               echo $var->getAuteurEvenement();
                                                                                                                                }?>"/>
                        </div>
                        <div> 
                            <label for="lieuEvenement">Lieu : </label>
                            <input type="text" id="lieuEvenement" name="lieuEvenement" required <?php if ($mode==3){
                                                                                                                          echo "readonly";
                                                                                                                          } ?> value="<?php if($mode !="1"){
                                                                                                                          echo $var->getLieuEvenement();
                                                                                                                          }?>"/>
                        </div>
                        <div>
                            <label for="categorie">Categorie: </label>
                            <select name="categorie" id="categorie">
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