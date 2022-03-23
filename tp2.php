<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 PHP</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <div class=page>
        <h1>Deuxième TP PHP</h1>
        <center><h2>Les conditions en PHP</h2></center>
        <?php
            $a=10;                                          // structure basique d'un if,elseif,else
            $b=25;
            if($a==$b){
                echo('a est egal à b ($a=$b)');
            }elseif($a>$b){
                echo "a est superieur à b ($a > $b)";
            }else{
                echo "a est inferieur à b ($a < $b)";
            }                                                   // fin
        ?>
        <center><h2>Les boucles</h2>
        <h3>La boucle "For"</h3></center>
        <?php 
            for($i=0; $i<10; $i++){                //la boucle for à (initialisation; condition; incrementation/decrementation) utilser en general pour parcourir les tableaux
                echo "<h4 class='flamme'>la flamme <br></h4>";
            }
        ?>
        <center><h3>La boucle while</h3></center>
        <?php
        $i=0;
        while($i<20){
            echo "<h4> c'est super</h4>";
            $i++;
        }
        ?>
        <center><h3>La boucle "for" et les tableaux simple</h3></center>
        <?php
            for($i=0; $i<10; $i++){
                $tab[$i] = "<h4>HBD la flamme ".$i."</h4>";
                echo $tab[$i];
            }
        ?>
        <center><h3>La boucle Foreach</h3></center>
        <?php
            $contact =array(
                "joyce"=>"6999999",
                "lloyd"=>"7777777",
                "mike"=>"88888888",
                "steve"=>"5555555",
                "ray"=>"666666666",
            );
            foreach($contact as $key=>$value){
                echo "<h4>".$key.":  ".$value."</h4>";
            }
         
        ?>
        <?php
            for($i=1; $i<11; $i++){
             $etudiant["num" .$i]= "etudiant".$i; // it creates an asociative table with key "i" and value "etudiant"
             //echo ($etudiant [1]);   
            }
            foreach($etudiant as $key=>$value){               // this will show " 1 etudiant 1 ...."
                echo "<h4>".$key." ".$value." </h4>";
            }
        ?>
    </div>
</body>
</html>