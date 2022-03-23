<?php session_start();
// if ($_SESSION['nom'] != $_POST["nom"]){
//     session_destroy();
// }
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de session</title>
</head>
<body>
    <?php

if (session_status() == 1){
    //echo "You need to start a session";
    header('location: Accueille.php');
} 
if (session_status() == 2){
    echo "<h2> Bienvenue". " " .$_SESSION['nom']. " " ."Hmmmmm! Mais vous êtes déjà connecter". " " .$_SESSION['nom']. "</h2>";
    //echo "<h2> Bienvenue". " " .$_SESSION['nom']. "</h2>";
}
        //echo "<h2> Bienvenue". " " .$_SESSION['nom']. "</h2>";
        var_dump(session_status());
        var_dump(session_name());
        var_dump(session_id());
        var_dump($_SESSION);
    ?>
</body>
</html>