<?php
include_once 'includes/products.php';
include_once 'includes/articles.php';
session_start();
include_once("./fonctions-panier.php");


$articleId = $_GET['id'];
$products = getProductsByArticle($articleId);
$article = getArticle($articleId);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégorie</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/article.css">
</head>

<body>
<?php
include_once 'includes/header.php';
?>

    <?php foreach ($products as $product) {?>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image">  <img src="<?php echo htmlspecialchars($product['image']); ?>" id="main_product_image"
                                width="350" alt=""></div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li><img onclick="changeImage(this)" src="" width="70">
                                </li>
                                <li><img onclick="changeImage(this)" src="" width="70">
                                </li>
                                <li><img onclick="changeImage(this)" src="" width="70">
                                </li>
                                <li><img onclick="changeImage(this)" src="" width="70">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3> <?php echo htmlspecialchars($product['name']); ?></h3> <span class="heart"><i class='bx bx-heart'></i></span>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <h5>Description</h5>
                            <p>  <?php echo htmlspecialchars($product['description']); ?></p>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <h6>Caracteristiques Techniques </h5>
                            <p>  <?php echo htmlspecialchars($product['technical_features']); ?></p>
                        </div>
                        <h3><?php echo number_format($product['price'], 2, '€', ' '); ?></h3>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i
                                    class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i>
                            </div> <span>Avis</span>
                        </div>
                        <div class="mt-5"> <span class="fw-bold">Color</span>
                            <div class="colors">
                                <ul id="marker">
                                    <li id="marker-1"></li>
                                    <li id="marker-2"></li>
                                    <li id="marker-3"></li>
                                    <li id="marker-4"></li>
                                    <li id="marker-5"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="buttons d-flex flex-row mt-5 gap-3"> <button class="btn btn-outline-dark">Acheter 
                               </button> <button class="btn btn-dark">Ajouter au panier</button> </div>
                        <div class="search-option"> <i class='bx bx-search-alt-2 first-search'></i>
                            <div class="inputs"> <input type="text" name=""> </div> <i
                                class='bx bx-share-alt share'></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php
  require_once 'includes/footer.php';
?>