<?php


class Resto_Crous

{

  private $Id_restoCrous;
  private $adresse;
  private $codepostal;
  private $type;
  private $descritpion_resto;
  private $longitude;
  private $latitude;
  private $horaire_ouverture;
  private $horaire_fermeture;


    public function __construct($Id_restoCrous, $adresse, $codepostal, $type, $descritpion_resto, $longitude, $latitude, $horaire_ouverture, $horaire_fermeture)
    {
        $this->Id_restoCrous = $Id_restoCrous;
        $this->adresse = $adresse;
        $this->codepostal = $codepostal;
        $this->type = $type;
        $this->descritpion_resto = $descritpion_resto;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->horaire_ouverture = $horaire_ouverture;
        $this->horaire_fermeture = $horaire_fermeture;
    }

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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * @param mixed $codepostal
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDescritpionResto()
    {
        return $this->descritpion_resto;
    }

    /**
     * @param mixed $descritpion_resto
     */
    public function setDescritpionResto($descritpion_resto)
    {
        $this->descritpion_resto = $descritpion_resto;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getHoraireOuverture()
    {
        return $this->horaire_ouverture;
    }

    /**
     * @param mixed $horaire_ouverture
     */
    public function setHoraireOuverture($horaire_ouverture)
    {
        $this->horaire_ouverture = $horaire_ouverture;
    }

    /**
     * @return mixed
     */
    public function getHoraireFermeture()
    {
        return $this->horaire_fermeture;
    }

    /**
     * @param mixed $horaire_fermeture
     */
    public function setHoraireFermeture($horaire_fermeture)
    {
        $this->horaire_fermeture = $horaire_fermeture;
    }


}

