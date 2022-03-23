<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ("mon premier TP PHP"); ?> </title>
    <link rel="stylesheet" type="text/css" href="style/style.css"
</head>
<body>
    <div class="page">
        <h1><?php echo ("Affichage simple en PHP"); ?></h1><br><br><br>
        <center><?php echo "Bonjour tout le monde ! cet affichage est produit par le PHP"; ?><br><br></center>
        

        <ol>
            <li>Pour insérer du PHP dans un document HTML
                on peut utiliser les balise php
            </li><br>
            <li>On utilise la fonction echo pour afficher du texte</li>
        </ol>
        <?php
            echo "<h2>Merci et aurevoir</h2>";
            $nom = "Valdo";
            $prenom ="Hervé";
            $classe = "M1";
            $age = 25;
            echo "<h3>".$nom." ".$prenom." a ".$age."</h3>";
            echo ("<h3>$nom $prenom a $age ans</h3>");
        ?>
        <?php  //  pour creer un tableau simple en php
        $tableau[0]= "Valdo";
        $tableau[1]= "Onana";
        $tableau[2]= "Bassong";
        
        $tableau_prenom = array("Hervé","Gaelle","Michèle",500); //autre façon de creer un tableau

        echo $tableau_prenom [1]; //pour afficher la valeur Gaelle
        // echo $tableau [0]; //pour afficher la valeur Valdo
        echo ("<p>$tableau_prenom[3]</p>");
        ?> 
        <?php         // pour creer un tableau associative. ici nous avons des clé(ex nom) et la valeur(valdo)
        $contact = array(
            "nom"=>"valdo",
            "telephone"=>69999999,
            "email"=>"admin@admin.com"
        );
       // echo ("<p> $contact["telephone"]</p>");
       echo "<p>".$contact['telephone']."</p>";
       echo "<p>". "le nom du candidat est :" .$contact['nom']."</p>";
       echo "<p>". "le numéro du candidat est :" .$contact['telephone']."</p>";
       echo "<p>". "l'email du candidat est :" .$contact['email']."</p>";

        ?>
    </div>
</body>
</html>