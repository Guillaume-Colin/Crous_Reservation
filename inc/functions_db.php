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
    } finally { 
        $smt = null;
        $db = null;
    }
}
