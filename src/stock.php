<?php
    require_once ('./../inc/config.php');
    require_once ('./../inc/functions.php');
    require_once('./../inc/config.php');

    init_php_session();
    ensure_user_is_authentificated();

    $idEntree = null;
    $idPlat = null;
    $idDessert = null;

    $listeEntrees = exec_request('SELECT id_article, nom_article 
    FROM article JOIN menu on (nom_article = entree) 
    order by nom_article asc');
    $listePlats = exec_request('SELECT id_article, nom_article
    FROM article JOIN menu on (nom_article = plat) 
    order by nom_article asc');
    $listeDesserts = exec_request('SELECT id_article, nom_article 
    FROM article JOIN menu on (nom_article = dessert) 
    order by nom_article asc');

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
        'listeEntrees' => $listeEntrees,
        'listePlats' => $listePlats,
        'listeDesserts' => $listeDesserts,
        'idEntree' => $idEntree,
        'idPlat' => $idPlat,
        'idDessert' => $idDessert
    );

    view('stock', $tabParam);
?>
