<?php

/**
 * Class Cafet
 */
class Cafet extends Resto_Crous 

{
    private $Id_restocrous;

    public function __construct($Id_restocrous)
    {
        $this->Id_restocrous = $Id_restocrous;
        parent::__construct();
    }

}