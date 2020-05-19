<?php
if(isset($_GET["m"]))
$mode = $_GET["m"];

if ($mode != "1") {
    $id = $_GET["id"];
    $var =UtilisateurManager::getById($id);
    
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
        <p>Inscription</p>
    </div>
    <div class="center">
        <div class="formulaire">
            <form method="post" action="index.php?action=actionUtilisateur&m=<?php echo $mode ?>" >
            
            <?php 
            if ($mode !="1"){
            ?>
                <input type="hidden" name="idUtilisateur" value="<?php if(isset($var)) echo $var->getIdUtilisateur(); ?>">
            <?php
            }    
            ?>
            <input type="hidden" name="role" value="2">
                    <div class="colonne">
                        <div>
                            <label for="pseudo">Pseudo :</label>
                            <input name="pseudo" type="text" id="pseudo" required <?php if ($mode==3){
                                                                                                      echo "readonly";
                                                                                                    }  if($mode !="1"){
                                                                                                        
                                                                                                     echo 'value="'.$var->getPseudo().'"';
                                                                                                    }?>/>
                        </div>
                        <div>
                            <label for="motDePasse">Mot de passe : </label>
                            <input type="password" id="motDePasse" name="motDePasse" required />
                        </div>
                        <div>
                            <label for="confirm">Confirmation mot de passe : </label>
                            <input type="password" id="confirm" name="confirm" required/>

                        </div>
                        <div class="rowInscription">
                            <div class="espace1">
                                <label for="nomUtilisateur">Nom :</label>
                                <input name="nomUtilisateur" type="text" id="nomUtilisateur" required placeholder="1ère lettre en Majuscule" pattern="[A-ZÀ-Ý]{1}[a-zà-ý' -]*([ |-|'][A-ZÀ-Ý]{1}[a-zà-ý' -]*)?$" <?php if ($mode==3){
                                                                                                                                                                                                                                    echo "readonly";
                                                                                                                                                                                                                                    }  if($mode !="1"){
                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                    echo 'value="'.$var->getNomUtilisateur().'"';
                                                                                                                                                                                                                                    }?>/>
                            </div>

                            <div class="espace2">
                                <label for="prenomUtilisateur">Prenom :</label>
                                <input name="prenomUtilisateur" type="text" id="prenomUtilisateur" required placeholder="1ère lettre en Majuscule" pattern="[A-ZÀ-Ý]{1}[a-zà-ý' -]*([ |-|'][A-ZÀ-Ý]{1}[a-zà-ý' -]*)?$"<?php if ($mode==3){
                                                                                                                                                                                                                                    echo "readonly";
                                                                                                                                                                                                                                    }  if($mode !="1"){
                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                    echo 'value="'.$var->getPrenomUtilisateur().'"';
                                                                                                                                                                                                                                    }?>/>
                            </div>
                        </div>                                                                                                                                                                                                               
                        <div>
                            <label for="emailUtilisateur">Mail : </label>
                            <input type="mail" id="emailUtilisateur" name="emailUtilisateur" required pattern="[a-zA-Z0-9-._]{2,}@[a-zA-Z0-9-]{2,}.[a-z]{2,}(.[a-z]{2,})?$"<?php if ($mode==3){
                                                                                                                                                                                                 echo "readonly";
                                                                                                                                                                                                 }  if($mode !="1"){
                                                                                                                                                                                                    
                                                                                                                                                                                                echo 'value="'.$var->getEmailUtilisateur().'"';
                                                                                                                                                                                                 }?>/>
                        <div>
                            <label for="telephoneUtilisateur">Téléphone :</label>
                            <input name="telephoneUtilisateur" type="tel" id="telephoneUtilisateur" required pattern="(0|\+33) ?[1-9]([-. ]?[\d]{2}){4}$"<?php if ($mode==3){
                                                                                                                                                                            echo "readonly";
                                                                                                                                                                            }  if($mode !="1"){
                                                                                                                                                                                
                                                                                                                                                                            echo 'value="'.$var->getTelephoneUtilisateur().'"';
                                                                                                                                                                            }?>/>
                        </div>
                    </div>
                <div class="centrer">
                    <input class="bouton centrer" id="valider" type="submit" value="<?php echo $texteBouton ?>" />
                </div>
            </form>
        </div>
    </div>
