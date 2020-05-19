
<div class="titre">
    <p>Connexion</p>
</div>
<div class="center">
    <div class="formulaire">
        <form method="post" action="index.php?action=connexion">
                    <div>
                        <label for="pseudo">Pseudo :</label>
                        <input name="pseudo" type="text" id="pseudo" />
                    </div>
                    <div class="password">
                        <label for="motDePasse">Mot de Passe :</label>
                        <input type="password" name="motDePasse" id="motDePasse" />
                        <div id="oeil"><i class="fas fa-eye"></i></div>
                    </div>
            <a href="index.php?action=inscription&m=ajout" class="btnIncription">Pas encore inscrit ?</a>
            <div class="centrer divBTN">
                <input class="bouton centrer" type="submit" value="Connexion" />
            </div>
        </form>
    </div>
</div>
