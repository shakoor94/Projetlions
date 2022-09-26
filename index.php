<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'acceuil The Lion's</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/caroussel.css">

</head>
<header>
  <?php
  require_once 'includes/header.php';
?>
</header>
<body>
  <!-- carousel -->
  <div class="carousel1">
    <div class="container">
      <div class="carousel">
        <div class="carousel__face"><span>Workout</span></div>
        <div class="carousel__face"><span>Discipline</span></div>
        <div class="carousel__face"><span>Motivation</span></div>
        <div class="carousel__face"><span>Work Hard</span></div>
        <div class="carousel__face"><span>Passion</span></div>
        <div class="carousel__face"><span>No Pain No Gain</span></div>
        <div class="carousel__face"><span>Feel The Pain</span></div>
        <div class="carousel__face"><span>Push The Limits</span></div>
        <div class="carousel__face"><span></span></div>
      </div>
    </div>
  </div>
  <div class="fictive">
  </div>

  <?php
  require_once 'includes/footer.php';
?>
</body>