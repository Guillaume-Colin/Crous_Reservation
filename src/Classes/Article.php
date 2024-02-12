<?php

/**
 * Class Article
 */
class Article

{

    private $id_article;
    private $nom_article;


    public function __construct($id_article, $nom_article)
    {
        $this->id_article = $id_article;
        $this->nom_article = $nom_article;
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

    /**
     * @return mixed
     */
    public function getNomArticle()
    {
        return $this->nom_article;
    }

    /**
     * @param mixed $nom_article
     */
    public function setNomArticle($nom_article)
    {
        $this->nom_article = $nom_article;
    }

}
