<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix Menu</title>
</head>
<body>
    <?php
        require_once ('./../inc/config.php');
        require_once ('./../inc/functions.php');
        require_once('./../inc/config.php');
        init_php_session();
        ensure_user_is_authentificated();

        $idEntree = null;
        $idPlat = null;
        $idDessert = null;
        
        $controle = "N";
        if(isset($_POST['controleMenu'])) {
            $controle = $_POST['controleMenu'];
        } 
        // Traitement de ce qui a été saisie
        if ($controle=="O") {
            $idEntree = $_POST['entree'];
            $idPlat = $_POST['plat'];
            $idDessert = $_POST['dessert'];
            if ($idEntree!='' || $idPlat!='' || $idDessert!='') {    
                // Requete pour inserer la reserve en base    
                $resultat = exec_request('INSERT INTO 
                reserve (id_restoCrous, id_personne, date_reserve, heure_debut_reserve, id_entree, id_plat, id_dessert)
                VALUES ('.$_SESSION['idResto'].', 
                    \''.$_SESSION['login'].'\', 
                    \''.$_SESSION['date'].'\', 
                    \''.$_SESSION['plageHoraire'].'\', 
                    '.$idEntree.',
                    '.$idPlat.', 
                    '.$idDessert.')');
                redirect('./Accueil.php?reservation_success=true');
                
            }
        }

        // initialise sans saisie ou les fois suivante si les controles ne sont pas bons
        $listeEntrees = exec_request('SELECT id_article, nom_article FROM Article WHERE type_article = "entree" ORDER BY nom_article ASC');
        $listePlats = exec_request('SELECT id_article, nom_article FROM Article WHERE type_article = "plat" ORDER BY nom_article ASC');
        $listeDesserts = exec_request('SELECT id_article, nom_article FROM Article WHERE type_article = "dessert" ORDER BY nom_article ASC');


        $tabParam = array(
            'listeEntrees' => $listeEntrees,
            'listePlats' => $listePlats,
            'listeDesserts' => $listeDesserts,
            'idEntree' => $idEntree,
            'idPlat' => $idPlat,
            'idDessert' => $idDessert
        );
        view('menu', $tabParam);
    ?>
</body>
</html>
