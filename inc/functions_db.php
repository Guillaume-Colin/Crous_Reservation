<?php
require_once "config.php";

function connect_db()
{
    try{
        echo($_ENV['db_name']);
    return new PDO($_ENV['db_name'], $_ENV['db_user'], $_ENV['db_pass']);
    }catch(Exception $e){
        echo $e;
    //echo $e->getMessage();
    return null;
    }
}



function search_db($requete)
{
    // étape 1
    $db = connect_db();
    if ($db == null) {
        return [];
    }
    try {
        // étape 2
        //$sql = 'SELECT * FROM article'; // Correction de la requête SQL

        $smt = $db->prepare($requete);

        $smt->execute();

        $modules = $smt->fetchAll(PDO::FETCH_OBJ);
        echo ("ok");
        print_r($modules);
        return $modules;
    } catch (Exception $e) 
    {
        return [];
    } finally { // Utilisation de finally pour libérer les ressources
        $smt = null;
        $db = null;

    }
}

// search_db('SELECT * FROM article');