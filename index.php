<?php
require_once('./inc/functions.php');
require_once('./inc/config.php');
require_once('./inc/functions_db.php');
init_php_session();

if(isset($_GET['Logout']) && $_GET['Logout']=='O') {
    session_destroy();
    redirect('./Index.php');
} else {
    if (is_user_authentificated()) {
        redirect('./Accueil.php');
    }
}

if(isset($_POST['username']) && !empty($_POST['username']) && 
isset($_POST['password']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM personne WHERE id_personne = \''.$username.'\' AND mdp = \''.$password.'\'';
    $tabPersonnes = exec_request($sql);
    if (count($tabPersonnes) > 0) {
        $_SESSION['login'] = $username;
        redirect('./Accueil.php');
    }
}

view("index");

?>
