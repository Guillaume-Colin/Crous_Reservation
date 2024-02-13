<?php
function view($name)
{
    include("./src/Views/$name.view.php");
}
view("index");



 

session_start();
require_once('/inc/functions.php');
require_once('/inc/config.php');



if (isset($_SESSION['login']))
{
    redirect('bienvenue.php');
    die();
}

$login='';
$mdp='';
if (is_post())
{
    $login = filter_input(INPUT_POST, 'login', FILTER_VALIDATE_EMAIL);
    $mdp = $_POST['MDP'];
    if($email == false)
    {
        view('login');
        die();
    }
}

require_once('./inc/config.php');
if (authentificate_user($login, $mdp))
{
    $_SESSION['login']= $login;
    $_SESSION['time']= time();
    redirect('bienvenue.php');
}
else
{
    view('login',null,null);
}
    // f($url())
    // header("Location:$url");

 // header (Location);
    // echo 'Vous etes authentifié';


// if (is_user_authentificate())
// {
//     redirect('')
// }

?>


