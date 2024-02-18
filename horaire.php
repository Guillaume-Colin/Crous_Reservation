<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résevation Plage Horaire</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    require_once './inc/functions.php';
    require_once './inc/functions_db.php';
    require_once('./inc/config.php');
    init_php_session();
    ensure_user_is_authentificated();

    $controle = "N";
    if(isset($_POST['controleHoraire'])) {
        $controle = $_POST['controleHoraire'];
    } 

    if ($controle == "N") {
        $idResto = null;
        if(isset($_GET['idResto'])) {
            $idResto = $_GET['idResto'];
        } 
        if ($idResto == null) {
            redirect('./Accueil.php');
        }
        $_SESSION['idResto'] = $idResto;

        $resto = exec_request('SELECT id_restoCrous, nom_resto, type, description_resto FROM resto_crous WHERE id_restoCrous = '.$idResto.'');

        $tabParam = array(
            'idResto' => $idResto,
            'nomResto' => $resto[0]->nom_resto,
            'descResto' => $resto[0]->description_resto,
            'typeResto' => $resto[0]->type,
            'date' => '',
            'plageHoraire' => 0,
            'submit' => 'N'
        ); 
    } else {
        $date = $_POST['date'];
        $plageHoraire = $_POST['plageHoraire'];
        $submit = 'N';
        if ($date != '' && $plageHoraire != 0 ) {
            $submit = 'O';
            $_SESSION['idResto'] = $_POST['idResto'];
            $_SESSION['nomResto'] = $_POST['nomResto'];
            $_SESSION['descResto'] = $_POST['descResto'];
            $_SESSION['typeResto'] = $_POST['typeResto'];
            $_SESSION['date'] = $date;
            $_SESSION['plageHoraire'] = $plageHoraire;
        }
        $tabParam = array(
            'idResto' => $_POST['idResto'],
            'nomResto' => $_POST['nomResto'],
            'descResto' => $_POST['descResto'],
            'typeResto' => $_POST['typeResto'],
            'date' => $_POST['date'],
            'plageHoraire' => $_POST['plageHoraire'],
            'submit' => $submit
        ); 
    }

    view('horaire', $tabParam);
    ?>
</body>
</html>
