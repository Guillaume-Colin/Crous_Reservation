<?php
    require_once  __DIR__.'/../vendor/autoload.php';
    
   
    // Charger les variables d'environnement depuis le fichier .env
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

?>

  