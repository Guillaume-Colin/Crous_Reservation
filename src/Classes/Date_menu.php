<?php

/**
 * Class Date_menu
 */
class date_menu

{

    private $date_menu;


    public function __construct($date_menu)
    {
        $this->date_menu = $date_menu;
    }

    /**
     * @return mixed
     */
    public function getDateMenu()
    {
        return $this->date_menu;
    }

    /**
     * @param mixed $date_menu
     */
    public function setDateMenu($date_menu)
    {
        $this->date_menu = $date_menu;
    }
}
