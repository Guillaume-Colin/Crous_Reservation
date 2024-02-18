<?php
require_once('./inc/functions.php');
require_once('./inc/config.php');
require_once('./inc/functions_db.php');
init_php_session();

if(isset($_GET['Logout']) && $_GET['Logout']=='O') 
{
    session_destroy();
    redirect('./Index.php');
}
else
{
    if (is_user_authentificated())
    {
        redirect('./Accueil.php');
    }
}       

/*function view($name)
{
    include("./src/Views/$name.view.php");
}*/


// if(isset($_POST['valid_connection'])){
//     if(isset($_POST['username']) && !empty($_POST['username']) && 
//     isset($_POST['password']) && !empty($_POST['password'])){
//         $username = $_POST['username'];
//         $password = $_POST['password'];

//         $sql = 'SELECT * FROM personne WHERE $username = :id_personne';
//         $fields = [
//             'user_name' => $username
//         ];
//         exec_request($sql);
//     }
// }

if(isset($_POST['username']) && !empty($_POST['username']) && 
isset($_POST['password']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM personne WHERE id_personne = \''.$username.'\' AND mdp = \''.$password.'\'';
    // $fields = [
    //     'user_name' => $username,
    //     'password' => $password
    // ];
     $tabPersonnes = exec_request($sql);
    if (count($tabPersonnes) > 0)
    {
        $_SESSION['login'] = $username;
        redirect('./Accueil.php');
    }
}



view("index");



 
/*
session_start();
require_once('./inc/functions.php');
require_once('./inc/config.php');



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
    $mdp = $_POST['password'];
    if($email == false)
    {
        view('login');
        die();
    }
}

// require_once('./inc/config.php');
// if (authentificate_user($login, $mdp))
// {
//     $_SESSION['login']= $login;
//     $_SESSION['time']= time();
//     redirect('bienvenue.php');
// }
// else
// {
//     view('login',null,null);
// }
  




// f($url())
    // header("Location:$url");

 // header (Location);
    // echo 'Vous etes authentifié';


// if (is_user_authentificate())
// {
//     redirect('')
// }
*/
?>


