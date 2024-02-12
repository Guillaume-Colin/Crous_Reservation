<?php

/**
 * Class compose
 */
class compose

{

    private $Id_menu;
    private $id_article;


    public function __construct($Id_menu, $id_article)
    {
        $this->Id_menu = $Id_menu;
        $this->id_article = $id_article;
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
    public function getIdArticle()
    {
        return $this->id_article;
    }

    /**
     * @param mixed $id_article
     */
    public function setIdArticle($id_article)
    {
        $this->id_article = $id_article;
    }

}
