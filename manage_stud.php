<?php 
include('dbconnect.php');

//requete pour recuperer les donnes
$sql = "select * from etudiants";

$query = $dbh->prepare($sql);
$query->execute();

$results =$query->fetchAll(PDO::FETCH_OBJ);
//var_dump($results);

//to make the delete function
if(isset($_GET['delid'])){
    $id=intval($_GET['delid']);  //on recupere l'id et le transforme en entier
    $sql = "DELETE from etudiants WHERE id =:id";
    $query = $dbh->prepare($sql);
    $query->bindparam(':id',$id,PDO::PARAM_STR);
    $results = $query->execute();
    
    if($results){
        echo "<script>alert('Etudiant supprimer')</script>";
        //echo "<script>window.location.href= 'manage_stud.php'</script>";
        header('location:manage_stud.php');
    }else{
        echo "<script>alert('A problem occured')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.css">
    <title>View Stud</title>
</head>
<body>
<table class="table table-bordered table-hover">
    <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Actions</th>
            </tr>
    </thead>
    <tbody>
        <?php 
        foreach($results as $row){ 
        ?>
        <tr>
            <th scope="row"><?php echo $row->id ?></th>
            <td><?php echo $row->matricule ?></td>
            <td><?php echo $row->nom ?></td>
            <td><?php echo $row->prenom ?></td>
            <td><a href="registration.php?delid=<?php echo $row->id ?>">
                <i class="icon-pencil"></i></a>
                <a href="manage_stud.php?delid=<?php echo $row->id ?>"onclick="return confirm('Voulez vous supprimer ?');"    
                <i class="icon-trash"></i></a>              <!-- we call the manage_stud file and pass in param using "?" with "delid",id of the row to be deleted. -->
            </td>
        </tr>
        <?php } ?>
    </tbody>
 </table>
    
</body>
</html>