<?php
    require_once ('./../inc/config.php');
    require_once ('./../inc/functions.php');
    require_once('./../inc/config.php');
    init_php_session();
    ensure_user_is_authentificated();

    $listeResto = [];
    $nomResto = NULL;


    // Search en base
    if(isset($_POST['nomResto'])) {
        $nomResto = $_POST['nomResto'];
        $listeResto = exec_request('SELECT id_restoCrous, nom_resto, type, description_resto FROM resto_crous WHERE nom_resto like \'%'.$nomResto.'%\'');
    }


    // Résultat de la recherche
    $tabParam = array(
        'nomResto' => $nomResto,
        'listeRestos' => $listeResto
    );

    //Affiche résultat
    view("search", $tabParam);
?>
