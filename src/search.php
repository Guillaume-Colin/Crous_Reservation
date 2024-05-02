<?php
    require_once ('./../inc/config.php');
    require_once ('./../inc/functions.php');
    require_once('./../inc/config.php');
    init_php_session();
    ensure_user_is_authentificated();

    // Requête pour récupérer tous les restaurants
    $listeResto = exec_request('SELECT id_restoCrous, nom_resto, type, description_resto FROM resto_crous');

    // Initialisation des variables
    $nomResto = isset($_POST['nomResto']) ? $_POST['nomResto'] : NULL;

    // Résultat de la recherche
    $tabParam = array(
        'nomResto' => $nomResto,
        'listeRestos' => $listeResto
    );

    // Affichage du résultat
    view("search", $tabParam);
?>
