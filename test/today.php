<?php include('dbcon.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div>
        <?php 
        //UPDATE
        if(isset($_GET['upd'])){
            $id=intval($_GET['upd']);
            $sql = "select * from test1 where id=:id";

            $query= $dbh->prepare($sql);
            $query->bindparam(':id',$id,PDO::PARAM_STR);
            $query->execute();
            $result=$query->fetchall(PDO::FETCH_OBJ);
            $val=$result[0];
            var_dump($val);
        }?>
        <form action="proc.php" method="POST">
            <label>Nom</label>
            <input type="hidden" name="id" value="<?php echo $val->id?>">
            <input type="text" name="nom" value="<?php echo $val->nom?>"><br>
            <label>Prenom</label>
            <input type="text" name="prenom" value="<?php echo $val->prenom ?>"><br>
            <?php 
            if(isset($_GET['upd'])){?>
                <input type="submit" name="modif" value="Modify">
            <?php }else { ?>
                <input type="submit" name="send" value="Send"></input>
            <?php }?>
        </form>
    </div>
</body>
</html>