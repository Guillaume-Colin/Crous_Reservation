<?php

/**
 * Class RU
 */
class RU extends Resto_Crous

{
    private $Id_restocrous;
    private $nb_place;


    public function __construct($Id_restocrous, $nb_place)
    {
        $this->Id_restocrous = $Id_restocrous;
        $this->nb_place = $nb_place;
        parent::__construct();
    }

}


