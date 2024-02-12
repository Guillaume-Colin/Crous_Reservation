<?php

/**
 * Class reserve
 */
class reserve

{

    private $Id_restoCrous;
    private $Id_personne;
    private $date_reserve;
    private $deuxieme_reserve;
    private $heure_debut_reserve;

    /**
     * @return mixed
     */
    public function getIdRestoCrous()
    {
        return $this->Id_restoCrous;
    }

    /**
     * @param mixed $Id_restoCrous
     */
    public function setIdRestoCrous($Id_restoCrous)
    {
        $this->Id_restoCrous = $Id_restoCrous;
    }

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
    public function getDateReserve()
    {
        return $this->date_reserve;
    }

    /**
     * @param mixed $date_reserve
     */
    public function setDateReserve($date_reserve)
    {
        $this->date_reserve = $date_reserve;
    }

    /**
     * @return mixed
     */
    public function getDeuxiemeReserve()
    {
        return $this->deuxieme_reserve;
    }

    /**
     * @param mixed $deuxieme_reserve
     */
    public function setDeuxiemeReserve($deuxieme_reserve)
    {
        $this->deuxieme_reserve = $deuxieme_reserve;
    }

    /**
     * @return mixed
     */
    public function getHeureDebutReserve()
    {
        return $this->heure_debut_reserve;
    }

    /**
     * @param mixed $heure_debut_reserve
     */
    public function setHeureDebutReserve($heure_debut_reserve)
    {
        $this->heure_debut_reserve = $heure_debut_reserve;
    }


    public function __construct($Id_restoCrous, $Id_personne, $date_reserve, $deuxieme_reserve, $heure_debut_reserve)
    {
        $this->Id_restoCrous = $Id_restoCrous;
        $this->Id_personne = $Id_personne;
        $this->date_reserve = $date_reserve;
        $this->deuxieme_reserve = $deuxieme_reserve;
        $this->heure_debut_reserve = $heure_debut_reserve;
    }
}


