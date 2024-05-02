<?php
    require_once ('./../inc/config.php');
    require_once ('./../inc/functions.php');
    require_once('./../inc/config.php');

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
    // Traitement de ce qui a été saisi
    if ($controle == "O") {
        $role = $_POST['role'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $identifiant = $_POST['identifiant'];
        $mdp = $_POST['mdp'];

        // Validation de l'identifiant avec la regex
        if (!preg_match('/^[EPC]\d{6}[A-Z]$/', $identifiant)) {
            // Identifiant invalide
            // Vous pouvez gérer cette erreur comme vous le souhaitez
            echo "Identifiant invalide";
        } else {
            // Identifiant valide, procédez à l'insertion dans la base de données
            if ($nom != '' || $prenom != '' || $role != '' || $identifiant != '' || $mdp != '') {    
                // Requete pour ajouter utilisateur    
                $resultat = exec_request('INSERT INTO 
                Personne (id_personne, nom, prenom, role, mdp)
                VALUES (\''.$identifiant.'\', 
                    \''.$nom.'\', 
                    \''.$prenom.'\', 
                    \''.$role.'\', 
                    \''.$mdp.'\')');
                redirect('./Accueil.php?edit_success=true');
            }
        }
    }

    view('user');
?>

