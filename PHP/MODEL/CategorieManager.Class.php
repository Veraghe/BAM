<?php 
class CategorieManager
{
    public static function add(Categorie $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO categories (idCategorie,libelleCategorie) VALUES (:idCategorie,:libelleCategorie)");
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
        $q->execute();
    }

    public static function update(Categorie $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE categories SET libelleCategorie=:libelleCategorie WHERE idCategorie=:idCategorie");
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
        $q->execute();
    }

    public static function delete(Categorie $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM categories WHERE idCategorie=" . $obj->getIdCategorie());
    }

    public static function getById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM categories WHERE idCategorie=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Categorie($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $categories = [];
        $q = $db->query("SELECT * FROM categories"); 
        usort($categories, array("Categorie", "compareTo"));
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $categories[] = new Categorie($donnees);
            }
        }
        return $categories;
       
    }
    
}