<?php 
include('dbconnect.php');
if(isset($_POST['sub'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];

    //etape 1 écriture de la requete
    $sql = "insert into etudiants(matricule,nom,prenom)
    values(:matricule,:nom,:prenom)";

    //etape 2 preparation de la requete
    $query =$dbh->prepare($sql);
    $query->bindParam(':matricule',$matricule,PDO::PARAM_STR);
    $query->bindParam(':nom',$nom,PDO::PARAM_STR);
    $query->bindParam(':prenom',$prenom,PDO::PARAM_STR);

    //ETAPE 3 EXECUTION DE LA RESQUETE
    $result= $query->execute();
    if($result)
{
    echo "Save done";
    header('location:manage_stud.php');
}else{
    echo "Save failed";
}
} 

// juste un check
//$last_id = $dbh->lastInsertId();


//to modify(update)
if(isset($_POST['modify'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $id = $_POST['id'];
    //var_dump($id);die();


    //etape 1 écriture de la requete
    $sql = "update etudiants set matricule=:matricule,nom=:nom,prenom=:prenom where id=:id";

    //etape 2 preparation de la requete
    $query =$dbh->prepare($sql);
    $query->bindParam(':matricule',$matricule,PDO::PARAM_STR);
    $query->bindParam(':nom',$nom,PDO::PARAM_STR);
    $query->bindParam(':prenom',$prenom,PDO::PARAM_STR);
    $query->bindParam(':id',$id,PDO::PARAM_STR);


    //ETAPE 3 EXECUTION DE LA REQUETE
    $result= $query->execute();
    if($result){
        echo "<script>alert('Etudiant modifié')</script>";
        echo "<script>window.location.href= 'manage_stud.php'</script>";
        //header('location:manage_stud.php');
    }else{
        echo "<script>alert('A problem occured')</script>";
    }
} 

// juste un check
//$last_id = $dbh->lastInsertId();



?>