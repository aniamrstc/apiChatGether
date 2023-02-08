<?php
/**
 * Contient les fonctions pour accéder à la base de données
 */

require_once("./Config.php");

function db(){
    static $myDb = null;
try{


    if($myDb == null){
        $myDb = new PDO(
            "mysql:host=". DB_HOST . ";dbname=". DB_NAME . ";charset:utf8",DB_USER, DB_PASSWORD
        );

        $myDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $myDb->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}

    return $myDb;
}


function deconexBase()
{
    $dbh = null;
}