<?php 
include('dbcon.php');

if(isset($_POST['send'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];

    $sql= "insert into test1(nom,prenom) 
    values(:nom,:prenom)";

    $query = $dbh->prepare($sql);
    $query->bindparam(':nom',$nom,PDO::PARAM_STR);
    $query->bindparam(':prenom',$prenom,PDO::PARAM_STR);
    $result= $query->execute();

    if($result){
        echo "record saved";
        header('location:man.php');

    }else{
        echo "error";
    }
}

if(isset($_POST['modif'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $id=$_POST['id'];

    $sql= "update test1  set nom=:nom,prenom=:prenom where id=:id";

    $query= $dbh->prepare($sql);
    $query->bindparam(':nom',$nom,PDO::PARAM_STR);
    $query->bindparam(':prenom',$prenom,PDO::PARAM_STR);
    $query->bindparam(':id',$id,PDO::PARAM_STR);

    $result=$query->execute();

    if($result){
        echo "record modified";
        header('location:man.php');
    }else{
        echo "error";
    }
}
?>