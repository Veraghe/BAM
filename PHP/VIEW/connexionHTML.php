<body>
    <div class="titre">
        <p>Connexion</p>
    </div>
    <div class="formulaire">
        <form method="post" action="index.php?action=FormConnexion">    
            <fieldset>
                <legend>Connexion</legend>
                <div class="colonne">
                    <div> 
                        <label for="pseudo">Pseudo :</label>
                        <input name="pseudo" type="text" id="pseudo" />
                    </div>
                    <div> 
                        <label for="password">Mot de Passe :</label>
                        <i class="fas fa-eye"></i>
                        <input type="password" name="password" id="password" />
                    </div>
                </div>
            </fieldset> 
            <a href="index.php?action=UserForm&m=ajout">Pas encore inscrit ?</a>
            <div class="centrer">
                <input class="bouton centrer" type="submit" value="Connexion" />
            </div>
        </form>
    </div>
</body>