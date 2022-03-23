<?php
//constantes connexion 
define('DB_HOST','localhost');
define('DB_USER', 'mike');
define('DB_PASS','mike');
define('DB_NAME','enspd');

try{
    $dbh = new PDO("mysql:host=".DB_HOST.
    ";dbname=".DB_NAME,DB_USER,DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'")); //la partie du array est optional
    //echo "connexion OK";
}
catch(PDOException $e)
{
    exit("error : ".$e->getMessage());
    echo "$e->getmessage()";
}

?>