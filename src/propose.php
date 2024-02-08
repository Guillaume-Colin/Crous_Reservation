<?php

/**
 * Class propose
 */
class propose

{

    private $Id_menu;
    private $date_menu;
    private $id_restocrous;


    public function __construct($Id_menu, $date_menu, $id_restocrous)
    {
        $this->Id_menu = $Id_menu;
        $this->date_menu = $date_menu;
        $this->id_restocrous = $id_restocrous;
    }

    /**
     * @return mixed
     */
    public function getIdMenu()
    {
        return $this->Id_menu;
    }

    /**
     * @param mixed $Id_menu
     */
    public function setIdMenu($Id_menu)
    {
        $this->Id_menu = $Id_menu;
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

    /**
     * @return mixed
     */
    public function getIdRestocrous()
    {
        return $this->id_restocrous;
    }

    /**
     * @param mixed $id_restocrous
     */
    public function setIdRestocrous($id_restocrous)
    {
        $this->id_restocrous = $id_restocrous;
    }

}
