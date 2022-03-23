<?php 
include('db.php');
$sql = "select * from test2";

$query=$dbh->prepare($sql);
$query->execute();

$result=$query->fetchAll(PDO::FETCH_OBJ);

//to delete
if(isset($_GET['delid'])){
    $id=intval($_GET['delid']);  //on recupere l'id et le transforme en entier
    $sql = "DELETE from test2 WHERE id =:id";
    $query = $dbh->prepare($sql);
    $query->bindparam(':id',$id,PDO::PARAM_STR);
    $results = $query->execute();
    
    if($results){
        echo "<script>alert('Etudiant supprimer')</script>";
        //echo "<script>window.location.href= 'manage_stud.php'</script>";
        header('location:manage.php');
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
    <title>Manage</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Prenom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $row){
                ?>
            <tr>
                <th><?php echo $row->id?></th>
                <td><?php echo $row->nom?></td>
                <td><?php echo $row->prenom?></td>
                <td><a href="manage.php?delid=<?php echo $row->id?>">Delete</a>
                    <a href="page.php?eid=<?php echo $row->id?>">Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>