<?php
class UtilisateurManager
{
    public static function add(Utilisateur $obj)
    {

        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO utilisateurs(pseudo, emailUtilisateur, motDePasse, role, telephoneUtilisateur, nomUtilisateur, prenomUtilisateur) VALUES (:pseudo, :emailUtilisateur, :motDePasse, :role, :telephoneUtilisateur, :nomUtilisateur, :prenomUtilisateur) ");
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":telephoneUtilisateur", $obj->getTelephoneUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->execute();
    }

    public static function update(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE utilisateurs SET pseudo=:pseudo, emailUtilisateur=:emailUtilisateur, motDePasse=:motDePasse, role=:role, telephoneUtilisateur=:telephoneUtilisateur, nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":telephoneUtilisateur", $obj->getTelephoneUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());

        $q->execute();
    }

    public static function delete(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM utilisateurs WHERE idUtilisateur=" . $obj->getIdUtilisateur());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Utilisateur($results);
        } else {
            return false;
        }
    }

    public static function getByPseudo($pseudo) 
        {
		$db = DbConnect::getDb (); // Instance de PDO.
		// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne
		$q = $db->prepare ( 'SELECT pseudo,emailUtilisateur,motDePasse,role,telephoneUtilisateur,nomUtilisateur,prenomUtilisateur,idUtilisateur FROM utilisateurs WHERE pseudo = :pseudo' );
		
		// Assignation des valeurs .
		$q->bindValue ( ':pseudo', $pseudo );
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) { // Si l'utilisateur n'existe pas, on renvoi un objet vide
			return new Utilisateur ();
		} else {
			return new Utilisateur ( $donnees );
		}
	}

    public static function getList()
    {
        $db = DbConnect::getDb();
        $utilisateurs = [];
        $q = $db->query("SELECT * FROM utilisateurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $utilisateurs[] = new Utilisateur($donnees);
            }
        }
        return $utilisateurs;

    }

}
