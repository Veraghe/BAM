<?php
class EvenementManager
{
    public static function add(Evenement $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO evenements(libelleEvenement, dateEvenement, descriptionEvenement, auteurEvenement, lieuEvenement, dateCreation, idUtilisateur, idCategorie) VALUES (:libelleEvenement, :dateEvenement, :descriptionEvenement, :auteurEvenement, :lieuEvenement, :dateCreation, :idUtilisateur, :idCategorie)");
        $q->bindValue(":libelleEvenement", $obj->getLibelleEvenement());
        $q->bindValue(":dateEvenement", $obj->getDateEvenement());
        $q->bindValue(":descriptionEvenement", $obj->getDescriptionEvenement());
        $q->bindValue(":auteurEvenement", $obj->getAuteurEvenement());
        $q->bindValue(":lieuEvenement", $obj->getLieuEvenement());
        $q->bindValue(":dateCreation", $obj->getDateCreation());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->execute();
    }

    public static function update(Evenement $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE evenements SET libelleEvenement=:libelleEvenement ,dateEvenement=:dateEvenement ,descriptionEvenement=:descriptionEvenement ,auteurEvenement=:auteurEvenement ,lieuEvenement=:lieuEvenement ,dateCreation=:dateCreation ,idUtilisateur=:idUtilisateur ,idCategorie=:idCategorie  WHERE idEvenement=:idEvenement");
        $q->bindValue(":idEvenement", $obj->getIdEvenement());
        $q->bindValue(":libelleEvenement", $obj->getLibelleEvenement());
        $q->bindValue(":dateEvenement", $obj->getDateEvenement());
        $q->bindValue(":descriptionEvenement", $obj->getDescriptionEvenement());
        $q->bindValue(":auteurEvenement", $obj->getAuteurEvenement());
        $q->bindValue(":lieuEvenement", $obj->getLieuEvenement());
        $q->bindValue(":dateCreation", $obj->getDateCreation());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->execute();
    }

    public static function delete(Evenement $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM evenements WHERE idEvenement=" . $obj->getIdEvenement());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM evenements WHERE idEvenement=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Evenement($results);
        } else {
            return false;
        }
    }

    public static function getListByDate($dateEvenement)
    {

        $db = DbConnect::getDb();
        $tableau = [];
        $q = $db->query("SELECT * FROM evenements WHERE dateEvenement='$dateEvenement' ");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tableau[] = new Evenement($donnees);
            }

        }
        return $tableau;
    }

    //Fonction utiliser pour la liste des événements en attente
    public static function getList()
    {
        $db = DbConnect::getDb();
        $evenements = [];
        $q = $db->query("SELECT * FROM evenements");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $evenements[] = new Evenement($donnees);
            }
        }
        return $evenements;

    }

}
