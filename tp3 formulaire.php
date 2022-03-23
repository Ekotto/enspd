<?php 
session_start();
// if (session_status() == 1){
//     header('location: Accueille.php');
// }
// //echo session_id();  

// //echo session_status();
// //session_destroy();
//         var_dump(session_status());
//       var_dump(session_name());     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <?php 
    if(!isset($_SESSION['nom'])){?>
         <div class="page">
    <h1>Les Formulaire</h1><br><br>
    <form action="traitement.php" method="POST" enctype="multipart/form-data">      <!--"action" represente le fichier qui va traiter le formulaire. pour la method", nous en avons 2 (Get et Post).-->
        <label>Photo de profile</label>                     <!-- avec la method Get, le données seront envoyer au niveau de l'Url et seront visible, mais Post ne sera pas visible -->
        <input type="file" name="picture"><br><br>
        <input type="submit" value="Envoyer"><br><br>
        
        <label>Nom</label>                
        <input type="text" name="nom"><br><br>
        <label>Prenom</label>
        <input type="text" name="prenom"><br><br>
        <input type="submit" value="Envoyer">

       <!--  <center><h1>Les sessions</h1></center>
        //utilisons toujours meme label -->
    </form>
    </div>
    <?php
    }else{
        echo " Vous êtes déjà connecter au site";
        echo "<a href='logout.php'>Se déconnecter</a>";
    }
    ?>
</body>
</html>