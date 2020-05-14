<?php
class Evenement
{
/*******************************Attributs*******************************/
    private $_idEvenement;
    private $_libelleEvenement;
    private $_dateEvenement;
    private $_descriptionEvenement;
    private $_auteurEvenement;
    private $_lieuEvenement;
    private $_dateCreation;
    private $_idUtilisateur;    
    private $_idCategorie;

/******************************Accesseurs*******************************/
    public function getIdEvenement()
    {
        return $this->_idEvenement;
    }

    public function setIdEvenement($_idEvenement)
    {
        $this->_idEvenement = $_idEvenement;
    }

    public function getLibelleEvenement()
    {
        return $this->_libelleEvenement;
    }

    public function setLibelleEvenement($_libelleEvenement)
    {
        $this->_libelleEvenement = $_libelleEvenement;
    }

    public function getDateEvenement()
    {
        return $this->_dateEvenement;
    }

    public function setDateEvenement($_dateEvenement)
    {
        $this->_dateEvenement = $_dateEvenement;
    }

    public function getDescriptionEvenement()
    {
        return $this->_descriptionEvenement;
    }

    public function setDescriptionEvenement($_descriptionEvenement)
    {
        $this->_descriptionEvenement = $_descriptionEvenement;
    }

    public function getAuteurEvenement()
    {
        return $this->_auteurEvenement;
    }

    public function setAuteurEvenement($_auteurEvenement)
    {
        $this->_auteurEvenement = $_auteurEvenement;
    }

    public function getLieuEvenement()
    {
        return $this->_lieuEvenement;
    }

    public function setLieuEvenement($_lieuEvenement)
    {
        $this->_lieuEvenement = $_lieuEvenement;
    }

    public function getDateCreation()
    {
        return $this->_dateCreation;
    }

    public function setDateCreation($_dateCreation)
    {
        $this->_dateCreation = $_dateCreation;
    }
    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur($_idUtilisateur)
    {
        $this->_idUtilisateur = $_idUtilisateur;
    }
    public function getIdCategorie()
    {
        return $this->_idCategorie;
    }

    public function setIdCategorie($_idCategorie)
    {
        $this->_idCategorie = $_idCategorie;
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
        return $this->getIdEvenement() . $this->getLibelleEvenement() . $this->getDateEvenement() . $this->getDescriptionEvenement() . $this->getAuteurEvenement(). $this->getLieuEvenement() . $this->getIdUtilisateur() . $this->getIdCategorie();
    }




}
