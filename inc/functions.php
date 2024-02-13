<?php

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}


function redirect($url)
{
    header("Location:$url");
}


function authentificate_user($email, $password)
{
    return $login == LOGIN && $password == PASSWORD;
}
function is_user_authentificated()
{
    return isset($_SESSION['login']); 

}

function ensure_user_is_authentificated()
{
    if(!is_user_authentificated())
    {
        redirect("Location:login.php");
        die();
    }
}

function showArray($tab){
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
}

function sanitize($arg) : string {
    return htmlspecialchars($arg);
}

function view($name,$param = null)
{
    include("./src/Views/$name.view.php");
}


?>