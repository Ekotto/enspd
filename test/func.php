<?php 
include('db.php');
if(isset($_POST['send'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];


    $sql= "insert into test2(nom,prenom) 
    values(:nom,:prenom)";

    $query= $dbh->prepare($sql);
    $query->bindparam(':nom',$nom,PDO::PARAM_STR);
    $query->bindparam(':prenom',$prenom,PDO::PARAM_STR);

    $result= $query->execute();

    if($result){
        echo "save done";
        header('location:manage.php');
    }else{
        echo "Save failed";
    }
}

if(isset($_POST['modify'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $id=$_POST['id'];

    $sql = "update test2 set nom=:nom,prenom=:prenom where id=:id";

    $query= $dbh->prepare($sql);
    $query->bindparam(':nom',$nom,PDO::PARAM_STR);
    $query->bindparam(':prenom',$prenom,PDO::PARAM_STR);
    $query->bindparam(':id',$id,PDO::PARAM_STR);

    $result= $query->execute();
}


?>