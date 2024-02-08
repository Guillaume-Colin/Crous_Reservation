<?php

/**
 * Class possede
 */
class possede

{

    private $Id_restoCrous;
    private $Id_article;
    private $stock;


    public function __construct($Id_restoCrous, $Id_article, $stock)
    {
        $this->Id_restoCrous = $Id_restoCrous;
        $this->Id_article = $Id_article;
        $this->stock = $stock;
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
    public function getIdArticle()
    {
        return $this->Id_article;
    }

    /**
     * @param mixed $Id_article
     */
    public function setIdArticle($Id_article)
    {
        $this->Id_article = $Id_article;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

}