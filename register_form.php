<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Connexion</title>
    <title>Inscription</title>
</head>

<body>
    <div class="back">
        <a href="./index.php"><img src="./Images/93634.png" alt="Retour à la page d'acceuil">
        </a>
        <h5> Retour à la page d'acceuil</h6>
    </div>
    <div class="login-form">
        <?php  
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);
                    switch($err)
                    {
                        case 'success':
                        ?>
        <div class="alert-success">
            <strong>Succès</strong> inscription réussie !
        </div>
        <?php
                        break;
                        case 'password':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> mot de passe différent
        </div>
        <?php
                        break;
                        case 'email':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> email non valide
        </div>
        <?php
                        break;
                        case 'email_length':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> email trop long
        </div>
        <?php 
                        break;
                        case 'pseudo_length':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> pseudo trop long
        </div>
        <?php 
                        case 'already':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> compte deja existant
        </div>
        <?php 
                    }
                }
                ?>
        <section id="inscription">
            <div class="formulaire">
                <div class="title">
                    <h2 class="text-center">Inscription</h2>
                </div>
                <form action="register.php" method="post">
                    <input type="text" name="firstname" class="form-control" placeholder="Prénom" required="required"
                        autocomplete="off">
                    <input type="text" name="name" class="form-control" placeholder="Nom" required="required"
                        autocomplete="off">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required"
                        autocomplete="off">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                        required="required" autocomplete="off">
                    <input type="password" name="password_retype" class="form-control"
                        placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </form>
            </div>
        </section>
</body>

</html>