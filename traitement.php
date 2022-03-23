    <?php 
    //echo session_id();
    session_start();
    //echo session_status();
    //session_destroy();
    //var_dump(session_name());
    
        //echo "Bienvunue"." " .$_POST["nom"]; //method GET pour recuperer la valeur entrer comme nom dans un form et creer un tableau associative 
     
       //avec comme clé le nom et valeur le nom entré. pour la method POST, on change juste Le GET en POST dans le code
    //$nom= htmlspecialchars($_POST["nom"]); 
    $nom= $_POST["nom"];       # $nom= $_POST["nom"];
    $prenom= $_POST["prenom"];
    // if (isset ($nom) &&  !empty ($nom)){             // isset c'est pour tester si la valeur existe. il renvois True si oui et False si non.
    //     echo "Bienvenue". " " .$nom;
    // }
    // else {
    //    // echo "Veuillez remplir les champs";
    // }
    # var_dump($nom);die(); //pour avoir le length d'une variable donné

    //function login(){
        //test if the variable picture exists and if no error was generated
    if (isset ($_FILES['picture']) && $_FILES['picture']['error']==0){

        // test if the file size is less than 2mb
        if ($_FILES['picture']['size']<=2000000){
            // gestion des extension
            $fileinfo= pathinfo($_FILES['picture']['name']);
            $extension= $fileinfo['extension'];
            $allowedExtension = ['jpg', 'jpeg', 'png', 'pdf'];
            if(in_array($extension, $allowedExtension)){
                move_uploaded_file($_FILES['picture']['tmp_name'],'uploads/'.basename($_FILES['picture']['name']));
                echo "votre fichier a été envoyé";
            }else{
                echo "extension non autorisée";
            }
        }else{
            echo "la taille de l'image doit etre inferieure à 2Mo";
        }
        }else{
            echo "Veuillez choisir une photo";
    }

    //les session
    // session_set_cookie_params(300);
    // session_name("session utilisateur");
   
    $_SESSION = [
        'nom'=> $nom,
        'prenom'=> $prenom
    ];
    echo "<h2> Bienvenue". " " .$_SESSION['nom']. "</h2>";   

    //var_dump(session_id());
   // var_dump(session_status());
    
    //$isSessionActive = (session_status() != "");
    // if (session_status() == 2){
    //     //header('location :tp3_formulaire.php');
    // }
    // var_dump(session_status());
    //     var_dump(session_name());
    //     var_dump(session_id());
    //     var_dump($_SESSION);

//} 
    ?>  
    