<?php 
define('db_host','localhost');
define('db_name','test');
define('db_user','mike');
define('db_pass','mike');

try{
    $dbh = new PDO("mysql:host=".db_host.
    ";dbname=".db_name,db_pass,db_user,);
    //echo "conn ok";
}
catch(PDOException $e){
    exit("error :". $e->getmessage());
    echo "$e->getmessage()";
}
?>