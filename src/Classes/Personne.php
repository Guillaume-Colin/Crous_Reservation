<?php

/**
 * Class Personne
 */
class Personne

{

    private $Id_personne;
    private $nom;
    private $prenom;
    private $role;
    private $statut;
    private $allergies;

    /**
     * @return mixed
     */
    public function getIdPersonne()
    {
        return $this->Id_personne;
    }

    /**
     * @param mixed $Id_personne
     */
    public function setIdPersonne($Id_personne)
    {
        $this->Id_personne = $Id_personne;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * @param mixed $allergies
     */
    public function setAllergies($allergies)
    {
        $this->allergies = $allergies;
    }

    /**
 faire une seule classe avec porteur de carte + Personnel dans Personne , avec role que le prof à montrer
     */



    public function __construct($Id_personne, $nom, $prenom, $role, $statut, $allergies)
    {
        $this->Id_personne = $Id_personne;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->statut = $statut;
        $this->allergies = $allergies;
    }

}
