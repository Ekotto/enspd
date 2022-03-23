<?php 
define('db_host', 'localhost');
define('db_user', 'mike');
define('db_pass', 'mike');
define('db_name', 'test');

try{
    $dbh= new PDO("mysql:host=".db_host.
    ";dbname=".db_name,db_user,db_pass,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'")); //la partie du array est optional

    //echo "conn ok";
}
catch(PDOException $e){
    exit("error : ".$e->getMessage());
    echo "$e->getmessage()";
}
?>