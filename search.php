<?php
require_once './inc/functions_db.php';
require_once './inc/functions.php';
require_once('./inc/config.php');
init_php_session();
ensure_user_is_authentificated();

    $listeResto = [];
    $nomResto = NULL;

    if(isset($_POST['nomResto']))
    {
        $nomResto = $_POST['nomResto'];
        $listeResto = exec_request('SELECT id_restoCrous, nom_resto, type, description_resto FROM resto_crous WHERE nom_resto like \'%'.$nomResto.'%\'');
    } 
    
    $tabParam = array(
        'nomResto' => $nomResto,
        'listeRestos' => $listeResto
    );

    view("search", $tabParam);

?>