<?
class Utilisateur
{
/*******************************Attributs*******************************/
    private $_idUtilisateur;
    private $_pseudo;
    private $_emailUtilisateur;
    private $_motDePasse;
    private $_role;
    private $_telephoneUtilisateur;
    private $_nomUtilisateur;
    private $_prenomUtilisateur;

/******************************Accesseurs*******************************/

    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur($_idUtilisateur)
    {
        $this->_idUtilisateur = $_idUtilisateur;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function setPseudo($_pseudo)
    {
        $this->_pseudo = $_pseudo;
    }

    public function getEmailUtilisateur()
    {
        return $this->_emailUtilisateur;
    }

    public function setEmailUtilisateur($_emailUtilisateur)
    {
        $this->_emailUtilisateur = $_emailUtilisateur;
    }

    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }

    public function setMotDePasse($_motDePasse)
    {
        $this->_motDePasse = $_motDePasse;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function setRole($_role)
    {
        $this->_role = $_role;
    }

    public function getTelephoneUtilisateur()
    {
        return $this->_telephoneUtilisateur;
    }

    public function setTelephoneUtilisateur($_telephoneUtilisateur)
    {
        $this->_telephoneUtilisateur = $_telephoneUtilisateur;
    }

    public function getNomUtilisateur()
    {
        return $this->_nomUtilisateur;
    }

    public function setNomUtilisateur($_nomUtilisateur)
    {
        $this->_nomUtilisateur = $_nomUtilisateur;
    }
    public function getPrenomUtilisateur()
    {
        return $this->_prenomUtilisateur;
    }

    public function setPrenomUtilisateur($_prenomUtilisateur)
    {
        $this->_prenomUtilisateur = $_prenomUtilisateur;
    }
/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }
/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdUtilisateur() . $this->getPseudo() . $this->getEmailUtilisateur() . $this->getMotDePasse() . $this->getRole() . $this->getTelephoneUtilisateur() . $this->getNomUtilisateur() . $this->getPrenomUtilisateur() ;
}




}
