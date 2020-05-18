 <?php
$categorie = CategorieManager::getList();
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
                        <p>Le jour</p>
                    </div>
                    <div class="article">
                        <div class="evenement">
                            <p>Football</p>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>