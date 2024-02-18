<?php
require_once "config.php";

function connect_db()
{
    try{
    return new PDO($_ENV['db_name'], $_ENV['db_user'], $_ENV['db_pass']);
    }catch(Exception $e){
        echo $e;
    //echo $e->getMessage();
    return null;
    }
}



function exec_request($requete)
{
    // étape 1
    $db = connect_db();
    if ($db == null) {
        return [];
    }
    try {
        $smt = $db->prepare($requete);
        $smt->execute();
        $result = $smt->fetchAll(PDO::FETCH_OBJ);   
        return $result;
    } catch (Exception $e) 
    {
        return [];
    } finally { // Utilisation de finally pour libérer les ressources
        $smt = null;
        $db = null;
    }
}

function exec_request2($requete, $params)
{
    // étape 1
    $db = connect_db();
    if ($db == null) {
        return [];
    }
    try {
        $smt = $db->prepare($requete);
        $smt->execute($params);
        $result = $smt->fetchAll(PDO::FETCH_OBJ);   
        return $result;
    } catch (Exception $e) 
    {
        return [];
    } finally { // Utilisation de finally pour libérer les ressources
        $smt = null;
        $db = null;
    }
}

// exec_request('SELECT * FROM article');