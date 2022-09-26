<?php 
    session_start(); // Démarrage de la session
    $db = new PDO('mysql:host=localhost;dbname=projet_lions;charset=utf8', 'projet_lions', 'projetlions');

    if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
     
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        $email = strtolower($email); // email transformé en minuscule
        $sql="SELECT * FROM users WHERE email = '$email' ";
        $result= $db->prepare($sql);
        $result->execute();

            $data=$result->fetch();
         if($data !== false) {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['email'];
                    header('Location: index.php');
                  
                }else{ header('Location:connexion.php?login_err=password');  }
            }else{ header('Location: connexion.php?login_err=email');  }
        }else{ header('Location: connexion.php?login_err=already');  }
    }else{ header('Location: connexion.php'); } // si le formulaire est envoyé sans aucune données