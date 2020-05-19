<?php
class Categorie
{
/*******************************Attributs*******************************/
    private $_idCategorie;
    private $_libelleCategorie;
    private $_couleurCategorie;

/******************************Accesseurs*******************************/

    public function getIdCategorie()
    {
        return $this->_idCategorie;
    }

    public function setIdCategorie($_idCategorie)
    {
        $this->_idCategorie = $_idCategorie;
    }

    public function getLibelleCategorie()
    {
        return $this->_libelleCategorie;
    }

    public function setLibelleCategorie($_libelleCategorie)
    {
        $this->_libelleCategorie = $_libelleCategorie;
    }
    
    public function getCouleurCategorie()
    {
        return $this->_couleurCategorie;
    }

    public function setCouleurCategorie($_couleurCategorie)
    {
        $this->_couleurCategorie = $_couleurCategorie;
    }

/*******************************Construct*******************************/
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

/****************************Autres méthodes****************************/
    public function toString()
    {
        return $this->getIdCategorie() . $this->getLibelleCategorie();
    }

    public static function compareTo($obj1, $obj2)
    {
        if ($obj1->getLibelleCategorie() < $obj2->getLibelleCategorie()) {
            return -1;
        } elseif ($obj1->getLibelleCategorie() > $obj2->getLibelleCategorie()) {
            return 1;
        } else {
            return 0;
        }
    }

  
}
