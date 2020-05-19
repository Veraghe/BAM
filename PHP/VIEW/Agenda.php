
 <?php
$categorie = CategorieManager::getList();
$evenement = EvenementManager::getListByDate('2020-05-16'); //voir pour intégrer: Quand on CLICK sur une date sur le calendrier, ça affiche l'évenement à gauche. 

?>

 <!--AGENDA---------------------------------------------------------------------->
    <div class="centrerGlobal">
        <div class="global">
            <select name="categories" id="categories">
                <?php
                    foreach ($categorie as $elt) {
                        echo '<option value = "' . $elt->getIdCategorie() . '"';
                        echo 'selected ="' . $elt->getLibelleCategorie() . '"';
                        echo ' >' . $elt->getLibelleCategorie() . ' </option>';
                    }
                    ?>
            </select>
            <!--gauche-------------------------------------->
            <div class="contenu">
                <div class="gauche">
                    <div class="calendrier">
                        <div class="head2">
                            <p><button class="av">&#8592;</button> </p>
                            <p class="date"> </p>
                            <p><button class="ap">&#8594;</button> </p>
                        </div>
                        <div class="head">
                            <div class="dayName">L</div>
                            <div class="dayName">M</div>
                            <div class="dayName">M</div>
                            <div class="dayName">J</div>
                            <div class="dayName">V</div>
                            <div class="dayName">S</div>
                            <div class="dayName">D</div>
                        </div>
                        <p class="cible"></p>
                    </div>
                    <div class="clear"></div>
                    <div class="sommaire">

                    <?php
                        
                        echo '<div class="ligne-sommaire2">';
                             foreach($categorie as $elt){
                                echo'<div><div style="background-color:'.$elt->getCouleurCategorie().';" class="couleur-sommaire2"></div>
                                <div class="categorie-sommaire2">'.$elt->getLibelleCategorie().'</div></div>';
                            } 
                        echo'</div>';
                        
                       
                        
                    if($pseudo !=null)
                    {
                       echo '<div class="centrer divBTN"><a href="index.php?action=listeEvenement" class="bouton">Gérer mes évènements</a></div>';
                
                    }
                    ?>
                    </div>
                   
                    </div>
                <!--droite-------------------------------------->
                <div class="droite">
                    <div class="jour">
                        <p>Date du calendrier</p>
                    </div>
                    
                    <?php
                    foreach ($evenement as $elt) {
                    echo '<div class="border1"></div>
                            <div class="article">
                                <div class="evenement">
                                    <p>'. $elt->getLibelleEvenement().'</p>
                                </div>

                                <div class="lieu">
                                    <p>Lieu : '. $elt->getLieuEvenement().'</p>
                                </div>

                                <div class="description">
                                    <p>'. $elt->getDescriptionEvenement().'</p>
                                </div>
                        </div>
                    <div class="border2"></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>