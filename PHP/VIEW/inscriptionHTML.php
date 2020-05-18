<body>
    <div class="titre">
        <p>Inscription</p>
    </div>
    <div class="formulaire">
        <form method="post" action="index.php?action=">    
                <div class="colonne">
                    <div> 
                        <label for="pseudo">Pseudo :</label>
                        <input name="pseudo" type="text" id="pseudo" required pattern/>
                    </div>
                    <div> 
                        <label for="motDePasse">Mot de passe : </label>
                        <input type="password" id="motDePasse" name="motDePasse" required pattern/>
                    </div>
                    <div> 
                        <label for="confirm">Confirmation mot de passe : </label>
                        <input type="password" id="confirm" name="confirm" required pattern/>
                    </div>
                    <div class="rowInscription">
                        <div> 
                            <label for="nomUtilisateur">Nom :</label>
                            <input name="nomUtilisateur" type="text" id="nomUtilisateur" required pattern/>
                        </div>

                        <div class="espase"> 
                            <label for="prenomUtilisateur">Prenom :</label>
                            <input name="prenomUtilisateur" type="text" id="prenomUtilisateur" required pattern/>
                        </div>
                    </div>

                    <div> 
                        <label for="emailUtilisateur">Mail : </label>
                        <input type="mail" id="emailUtilisateur" name="emailUtilisateur" required pattern/>
                    </div>
                    <div> 
                        <label for="telephoneUtilisateur">Téléphone :</label>
                        <input name="telephoneUtilisateur" type="number" id="telephoneUtilisateur" required pattern/>
                    </div>
                </div>
            <div class="centrer">
                <input class="bouton centrer" type="submit" value="Valider" />
            </div>
        </form>
    </div>
</body>
