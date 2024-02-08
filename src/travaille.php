<?php

/**
 * Class travaille
 */
class travaille

{

    private $Id_restoCrous;
    private $Id_personne;

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


    public function __construct($Id_restoCrous, $Id_personne)
    {
        $this->Id_restoCrous = $Id_restoCrous;
        $this->Id_personne = $Id_personne;
    }
}
