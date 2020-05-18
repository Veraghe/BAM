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
                        <div class="ligne-sommaire">
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire">Concert</div>
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire">Manifestation</div>
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire">Culture</div>
                        </div>

                        <div class="ligne-sommaire">
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire">Sport</div>
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire">Marché</div>
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire">Jour Actuel</div>
                        </div>

                        <div class="ligne-sommaire">
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire">Plusieurs C.</div>
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire"></div>
                            <div class="couleur-sommaire"></div>
                            <div class="categorie-sommaire"></div>
                        </div>
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