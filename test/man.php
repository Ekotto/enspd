<?php 
include('dbcon.php');

$sql = "select * from test1";

$query = $dbh->prepare($sql);
$query->execute();

$result=$query->fetchAll(PDO::FETCH_OBJ);

if(isset($_GET['delid'])){
    $id=intval($_GET['delid']);
    $sql = "DELETE FROM test1 WHERE id =:id";
    $query= $dbh->prepare($sql);
    $query->bindParam(':id',$id,PDO::PARAM_STR);
    $result=$query->execute();
    if($result){
        //echo "<script>alert('Etudiant supprimer')</script>";
        //echo "<script>window.location.href= 'manage_stud.php'</script>";
        header('location:man.php');
    }else{
        //echo "<script>alert('A problem occured')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $row){?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->nom ?></td>
                    <td><?php echo $row->prenom ?></td>
                    <td>
                    <a href="today.php?upd=<?php echo $row->id?>">Edit</a>
                    <a href="man.php?delid=<?php echo $row->id?>">Delete</a>
                    </td>

            <?php } ?>
                </tr>
        </tbody>
    </table>
</body>
</html>