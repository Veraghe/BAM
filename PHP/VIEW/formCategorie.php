<?php 
if(isset($_GET["m"]))
$mode = $_GET["m"];

if ($mode != "1") {
    $id = $_GET["id"];
    $var = CategorieManager::getById($id);
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
        <p>Catégorie</p>
    </div>
    <div class="center">
        <div class="formulaire">
            <form method="post" action="index.php?action=actionCategorie&m=<?php echo $mode; ?>">
            <?php 
            if ($mode !="1"){
            ?>
                <input type="hidden" name="idCategorie" value="<?php echo $var->getIdCategorie(); ?>">
            <?php
            }    
            ?>
                    <div class="colonne">
                        <div> 
                            <label for="libelleCategorie">Nom de la catégorie :</label>
                            <input name="libelleCategorie" type="text" id="libelleCategorie" placeholder="Entrer le nom de votre catégorie" autofocus required <?php if ($mode==3){
                                                                                                                                          echo "readonly";
                                                                                                                                        } ?> value="<?php if($mode !="1"){
                                                                                                                                            echo $var->getLibelleCategorie();
                                                                                                                                        }?>">                  
                                
                        </div>
                        <div>
                            <label for="couleurCategorie">Couleur :</label>
                            <input type="color" name="couleurCategorie" id="couleurCategorie" required <?php if ($mode==3){
                                                                                                                                          echo "readonly";
                                                                                                                                        } ?> value="<?php if($mode !="1"){
                                                                                                                                            echo $var->getCouleurCategorie();
                                                                                                                                        }?>">
                        </div>
                    </div>
                <div class="centrer">
                    <input class="bouton centrer" type="submit" value="<?php echo $texteBouton ?>" />
                </div>
            </form>
        </div>
    </div>


