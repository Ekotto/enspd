<?php  //var_dump(session_status());
       //var_dump(session_name());
       session_start();
       session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueille Session</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <div class="page">
        <h1>Connexion</h1><br><br>
        <h2>Veuillez demarrer une session</h2>
        <form action="tp3 formulaire.php">
            <!-- <label>Nom</label>                
            <input type="text" name="nom"><br><br>
            <label>Prenom</label>
            <input type="text" name="prenom"><br><br> -->
            <input type="submit" value="Login">
        </form>
        <!-- <form action="tp3 formulaire.php" method="POST">
            <input type="submit" value="Envoyer">
        </form> -->
    </div>
    
</body>
</html>