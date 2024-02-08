<?php
    require_once  __DIR__.'/../vendor/autoload.php';
    
   
    // Charger les variables d'environnement depuis le fichier .env
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();


// require './.env';

    // const EMAIL = 'admin@admin.fr';
    // const PASSWORD = 'admin';
    // const db_address = 'mysql:dbname=php;host=localhost';
    // const db_user = 'php';
    // const db_pass = 'php';


    // return [
    //     'host'=> \DI\env('host'),
    //     'port'=> \DI\env('port'),
    //     'dbname'=> \DI\env('dbname'),
    //     'charset'=> \DI\env('charset'),
    //     'username'=> \DI\env('username'),
    //     'password'=> \DI\env('password'),
    // ]

?>

  