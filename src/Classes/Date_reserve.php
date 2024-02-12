<?php

/**
 * Class Date_reserve
 */
class Date_reserve

{

    private $date_reserve;
    private $deuxieme_reserve;

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


    public function __construct($date_reserve, $deuxieme_reserve)
    {
        $this->date_reserve = $date_reserve;
        $this->deuxieme_reserve = $deuxieme_reserve;
    }
}

