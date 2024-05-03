<?php

require_once('./../inc/config.php');
require_once('./../inc/functions_db.php');
require_once('./../inc/functions.php');

init_php_session();
ensure_user_is_authentificated();

$role = null;
$nom = null;
$prenom = null;
$identifiant = null;
$mdp = null;

$controle = "N";
if(isset($_POST['controleMenu'])) {
    $controle = $_POST['controleMenu'];
} 

if ($controle == "O") {
    $role = $_POST['role'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];

    // Vérifier que les champs ne sont pas vides
    if ($nom!= '' || $prenom!= '' || $role!= '' || $identifiant!= '' || $mdp!= '') {   
        // Requete pour ajouter utilisateur    
        $resultat = exec_request('INSERT INTO
            Personne (id_personne, nom, prenom, role, mdp)
            VALUES (\''.$identifiant.'\',
                \''.$nom.'\',
                \''.$prenom.'\',
                \''.$role.'\',
                \''.$mdp.'\')');
        redirect('Accueil.php?edit_success=true');
    } 
}








//Suppression d'une réservation
// if(isset($_GET['idToDelete'])) {
//     $idResto = explode("|", $_GET['idToDelete'])[0];
//     $dateReserve = explode("|", $_GET['idToDelete'])[1];
//     exec_request('DELETE FROM RESERVE 
//                   WHERE id_personne = \''.$_SESSION['login'].'\'
//                   AND id_restoCrous = \''.$idResto.'\'
//                   AND date_reserve = \''.$dateReserve.'\''
//     );
// }


//Affiche les réservations
    $tabUsers = [];
    $tabUsers = exec_request('SELECT id_personne, nom, prenom, role
                                    FROM PERSONNE
                                    --  WHERE id_personne = :id_personne
                                    ORDER BY nom'

        
    );

    $tabParam = array(
        'listeUsers' => $tabUsers
    );


    view('user', $tabParam);
?>