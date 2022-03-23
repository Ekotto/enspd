<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_GET['delid'])){
            $id=intval($_GET['id']);
            $sql = "select * from test2 where id:id";
            $query = $dbh->prepare($sql);
            $query->bindparam(':id',$id,PDO::PARAM_STR);
            $query->execute();
            $result=$query->fetchall(PDO::FETCH_OBJ);
            $info=$result[0];
        } 
        ?>
        <form action="func.php" method="POST">
            <label>Name</label>
            <input type="hidden" name="id" value="<?php echo $info->id?>">
            <input type="text" name="nom" value="<?php echo $info->$nom?>"><br>
            <label>Prenom</label>
            <input type="text" name="prenom" value="<?php echo $info->$prenom?>"><br>
            <?php
            if(isset($_GET['delid'])){?>
                <input type="submit" name="modif" value="Modify">
            <?php }else { ?>
                <input type="submit" name="send" value="Send"></input>
            <?php } 
            ?>
            
        </form>
    </div>      
</body>
</html>