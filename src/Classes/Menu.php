<?php

namespace Menu;


class Menu

{

    private $id_menu;
    private $nom_menu;
    private $description_menu;
    private $plat_principal;
    private $entree;
    private $dessert;
    private $prix;


    public function __construct($id_menu, $nom_menu, $description_menu, $plat_principal, $entree, $dessert, $prix)
    {
        $this->id_menu = $id_menu;
        $this->nom_menu = $nom_menu;
        $this->description_menu = $description_menu;
        $this->plat_principal = $plat_principal;
        $this->entree = $entree;
        $this->dessert = $dessert;
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getIdMenu()
    {
        return $this->id_menu;
    }

    /**
     * @param mixed $id_menu
     */
    public function setIdMenu($id_menu)
    {
        $this->id_menu = $id_menu;
    }

    /**
     * @return mixed
     */
    public function getNomMenu()
    {
        return $this->nom_menu;
    }

    /**
     * @param mixed $nom_menu
     */
    public function setNomMenu($nom_menu)
    {
        $this->nom_menu = $nom_menu;
    }

    /**
     * @return mixed
     */
    public function getDescriptionMenu()
    {
        return $this->description_menu;
    }

    /**
     * @param mixed $description_menu
     */
    public function setDescriptionMenu($description_menu)
    {
        $this->description_menu = $description_menu;
    }

    /**
     * @return mixed
     */
    public function getPlatPrincipal()
    {
        return $this->plat_principal;
    }

    /**
     * @param mixed $plat_principal
     */
    public function setPlatPrincipal($plat_principal)
    {
        $this->plat_principal = $plat_principal;
    }

    /**
     * @return mixed
     */
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * @param mixed $entree
     */
    public function setEntree($entree)
    {
        $this->entree = $entree;
    }

    /**
     * @return mixed
     */
    public function getDessert()
    {
        return $this->dessert;
    }

    /**
     * @param mixed $dessert
     */
    public function setDessert($dessert)
    {
        $this->dessert = $dessert;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

}

