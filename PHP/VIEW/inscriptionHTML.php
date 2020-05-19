
    <div class="titre">
        <p>Inscription</p>
    </div>
    <div class="center">
        <div class="formulaire">
            <form method="post" action="index.php?action=">
                    <div class="colonne">
                        <div>
                            <label for="pseudo">Pseudo :</label>
                            <input name="pseudo" type="text" id="pseudo" required pattern=""/>
                        </div>
                        <div>
                            <label for="motDePasse">Mot de passe : </label>
                            <input type="password" id="motDePasse" name="motDePasse" required pattern=""/>
                        </div>
                        <div>
                            <label for="confirm">Confirmation mot de passe : </label>
                            <input type="password" id="confirm" name="confirm" required/>

                        </div>
                        <div class="rowInscription">
                            <div class="espace1">
                                <label for="nomUtilisateur">Nom :</label>
                                <input name="nomUtilisateur" type="text" id="nomUtilisateur" required placeholder="1ère lettre en Majuscule" pattern="[A-ZÀ-Ý]{1}[a-zà-ý' -]*([ |-|'][A-ZÀ-Ý]{1}[a-zà-ý' -]*)?$"/>
                            </div>

                            <div class="espace2">
                                <label for="prenomUtilisateur">Prenom :</label>
                                <input name="prenomUtilisateur" type="text" id="prenomUtilisateur" required placeholder="1ère lettre en Majuscule" pattern="[A-ZÀ-Ý]{1}[a-zà-ý' -]*([ |-|'][A-ZÀ-Ý]{1}[a-zà-ý' -]*)?$"/>
                            </div>
                        </div>

                        <div>
                            <label for="emailUtilisateur">Mail : </label>
                            <input type="mail" id="emailUtilisateur" name="emailUtilisateur" required pattern="[a-zA-Z0-9-._]{2,}@[a-zA-Z0-9-]{2,}.[a-z]{2,}(.[a-z]{2,})?$"/>
                        </div>
                        <div>
                            <label for="telephoneUtilisateur">Téléphone :</label>
                            <input name="telephoneUtilisateur" type="number" id="telephoneUtilisateur" required pattern="(0|\+33) ?[1-9]([-. ]?[\d]{2}){4}$"/>
                        </div>
                    </div>
                <div class="centrer">
                    <input class="bouton centrer" id="valider" type="submit" value="Valider" />
                </div>
            </form>
        </div>
    </div>
