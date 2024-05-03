<?php
require_once "functions_db.php";


function is_post()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}


function redirect($url)
{
    header("Location:$url");
}

function init_php_session() : bool {
    if (!session_id()){
        session_start();
        session_regenerate_id();
        return true;
    }
    return false;
}

function is_user_authentificated()
{
    return isset($_SESSION['login']); 
}

function ensure_user_is_authentificated()
{
    if(!is_user_authentificated())
    {
        redirect("./index.php");
        die();
    }
    else
    {
        $sql = 'SELECT nom, prenom FROM personne WHERE id_personne = \''.$_SESSION['login'].'\'';
        $tabPersonnes = exec_request($sql);
        $_SESSION['nom'] = $tabPersonnes[0]->nom;
        $_SESSION['prenom'] = $tabPersonnes[0]->prenom;
    }
}

function view($name,$param = null)
{
    include("../src/Views/$name.view.php");
}

function view2($name,$param = null)
{
    include("./src/Views/$name.view.php");
}
?> 