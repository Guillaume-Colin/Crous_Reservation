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
    if ($nom != '' || $prenom != '' || $role != '' || $identifiant != '' || $mdp != '') {   
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

if(isset($_POST['idToDelete'])) {
    $id_personne = explode("|", $_POST['idToDelete'])[0];
    $role = explode("|", $_POST['idToDelete'])[1];
    exec_request('DELETE FROM PERSONNE 
                  WHERE id_personne = \''.$id_personne.'\'
                  AND role = \''.$role.'\''
    );
}

// Requête pour récupérer tous les utilisateurs
$listeUsers = [];
$listeUsers = exec_request('SELECT id_personne, nom, prenom, role FROM PERSONNE ORDER BY nom');


// Initialisation des variables
$nomUser = isset($_POST['nomUser']) ? $_POST['nomUser'] : NULL;

$tabParam = array(
    'nomUser' => $nomUser,
    'listeUsers' => $listeUsers
);

view('user', $tabParam);
?>
 