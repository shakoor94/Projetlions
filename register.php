<?php 
 session_start(); // Démarrage de la session
   $db = new PDO('mysql:host=localhost;dbname=projet_lions;charset=utf8', 'projet_lions', 'projetlions');
    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['firstname']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $firstname = htmlspecialchars($_POST['firstname']);
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        // On vérifie si l'utilisateur existe
        $check = $db->prepare('SELECT firstname, email, password FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0)
        { 
            if(strlen($firstname) <= 100)
            { // On verifie que la longueur du pseudo <= 100
            
                if(strlen($email) <= 100)
                { // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    { // Si l'email est de la bonne forme
                        if($password == $password_retype)
                        { // si les deux mdp saisis sont bon
                            // On hash le mot de passe avec Bcrypt, 
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                          
                                  // On insère dans la base de données
                            $insert = $db->prepare('INSERT INTO users (firstname, name, email, password) VALUES (:firstname, :name, :email, :password)');
                             $insert->execute(array('firstname' => $firstname, 'name' => $name, 'email' => $email, 'password' => $password));
                             
    
                            header('Location:landing.php');
                        
                            // On redirige avec le message de succès
                        }header('Location: register_form.php?reg_err=success' ); die();
                    }else{ header('Location: register_form.php?reg_err=password'); die();}
                 }else{ header('Location: register_form.php?reg_err=email'); die();}
            }else{ header('Location: register_form.php?reg_err=email_length'); die();}
        }else{ header('Location: register_form.php?reg_err=prenom_length'); die();}
     }else{ header('Location: register_form.php?reg_err=already'); die();}
    

    