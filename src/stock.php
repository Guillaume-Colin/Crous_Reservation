<?php
    require_once ('./../inc/config.php');
    require_once ('./../inc/functions.php');
    require_once('./../inc/config.php');

    init_php_session();
    ensure_user_is_authentificated();

    $idEntree = null;
    $idPlat = null;
    $idDessert = null;

    $listeEntrees = exec_request('SELECT id_article, nom_article FROM Article WHERE type_article = "entree" ORDER BY nom_article ASC');
    $listePlats = exec_request('SELECT id_article, nom_article FROM Article WHERE type_article = "plat" ORDER BY nom_article ASC');
    $listeDesserts = exec_request('SELECT id_article, nom_article FROM Article WHERE type_article = "dessert" ORDER BY nom_article ASC');
    

    $stockEntrees = null;

    if(isset($_POST['entree'])) {
        $nomArticle = $_POST['entree'];
        $result = exec_request('SELECT id_article FROM Article WHERE nom_article like :nom_article', array(':nom_article' => $nomArticle));
        var_dump($result);
        if($result) {
            $idArticle = $result[0]->id_article;
            $stockEntrees = exec_request('SELECT nombre_articles FROM stock WHERE id_article = :id_article', array(':id_article' => $idArticle));
        } 
    } else {
        // Si aucun article n'est sélectionné, définissez le stock sur null
        $stockEntrees = null;
    }
    // var_dump($stockEntrees);

    $tabParam = array(
        'stockEntrees' => $stockEntrees,
        'stockPlats' => $stockEntrees,
        'stockDesserts' => $stockEntrees,

        'listeEntrees' => $listeEntrees,
        'listePlats' => $listePlats,
        'listeDesserts' => $listeDesserts,
        'idEntree' => $idEntree,
        'idPlat' => $idPlat,
        'idDessert' => $idDessert
    );

    view('stock', $tabParam);
?>
