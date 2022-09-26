<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Connexion</title>
</head>

<body>
    <div class="back">
        <a href="./index.php"><img src="./Images/93634.png" alt="Retour à la page d'acceuil">
        </a>
        <h5> Retour à la page d'acceuil</h6>
    </div>
    <div class="login-form">
        <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong>
        </div>
        <?php
                        break;

                        case 'email':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong>
        </div>
        <?php
                        break;

                        case 'already':
                        ?>
        <div class="alert-danger">
            <strong>Erreur</strong> compte non existant
        </div>
        <?php
                        break;
                    }
                }
                ?>

        <section id="connexion">
            <div class="formulaire">
                <div class="title">
                    <h2 class="text-center">Connexion</h2>
                </div>

                <form action="login.php" method="post">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required"
                        autocomplete="off">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                        required="required" autocomplete="off">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </form>
                <p class="text-center"><a href="register_form.php">Inscription</a></p>
            </div>
        </section>
</body>
</html>