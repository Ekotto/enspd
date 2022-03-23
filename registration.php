<?php 
include('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h1>Formulaire d'enregistrement</h1>
        <?php 
        if(isset($_GET['delid']))
        {
            $id=intval($_GET['delid']);  //on recupere l'id et le transforme en entier
            $sql = "SELECT * from etudiants WHERE id =:id";
            $query = $dbh->prepare($sql);
            $query->bindparam(':id',$id,PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);  //gives an array
            $student_info= $results[0];  //now we take the value in array and take it as an object (student_info....)
            //var_dump($student_info);
        }
        ?>
        <form action="signup.php" method="POST">
            <div class="form-group">
            <label for="" class="form-label">Matricule</label>
            <input type="text" value="<?php if (isset($id)) echo $student_info->matricule ?>" class="form-control" name="matricule">
            <input type="hidden" value="<?php if (isset($id)) echo $student_info->id ?>" class="form-control" name="id">
            </div>

            <div class="form-group">
            <label for="" class="form-label">Nom</label>
            <input type="text" value="<?php if (isset($id)) echo $student_info->nom ?>" class="form-control" name="nom">
            </div>

            <div class="form-group">
            <label for="" class="form-label">Prenom</label>
            <input type="text" value="<?php if (isset($id)) echo $student_info->prenom ?>" class="form-control" name="prenom">
            </div>
            
            <div class="form-group">
                <?php 
                if (isset($_GET['delid'])){ ?>
                    <input type="submit" class="btn btn-primary" value="Modify" name="modify">
                <?php }else { ?>
                    <input type="submit" class="btn btn-primary" value="Send" name="sub">
                <?php } ?>

            </div> 
        </form>
    </div>
    
</body>
</html>