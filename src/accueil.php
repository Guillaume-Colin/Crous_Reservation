<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
<?php
require_once ('./../inc/config.php');
require_once ('./../inc/functions.php');
require_once('./../inc/config.php');


init_php_session();
ensure_user_is_authentificated();// Controle de l'authentification (si la personne passe pour l'url)



//Suppression d'une réservation
if(isset($_GET['idToDelete'])) {
    $idResto = explode("|", $_GET['idToDelete'])[0];
    $dateReserve = explode("|", $_GET['idToDelete'])[1];
    exec_request('DELETE FROM RESERVE 
                  WHERE id_personne = \''.$_SESSION['login'].'\'
                  AND id_restoCrous = \''.$idResto.'\'
                  AND date_reserve = \''.$dateReserve.'\''
    );
}


//Affiche les réservations
$tabReservations = [];
$tabReservations = exec_request('SELECT R.id_restoCrous, id_personne, date_reserve, deuxieme_reserve, nom_resto
                                 FROM RESERVE R
                                 JOIN RESTO_CROUS RC ON (R.id_restoCrous = RC.id_restoCrous) 
                                 WHERE id_personne = \''.$_SESSION['login'].'\'
                                 ORDER BY date_reserve DESC'

    
);

$tabParam = array(
    'listeReservations' => $tabReservations
);

view('accueil', $tabParam);
?>
</body>
</html>
