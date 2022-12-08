<?php
session_start();
require_once "includes/db.php";
require_once "includes/func.php";
$products = get_products();
$check = header_choice('main');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruschetta</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,regular&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">

    <link rel="icon" type="image/png" sizes="32x32" href="photo/favicon.png">
</head>

<body>
    <div class="wrapper">
        <a id="home" class="in-page-link"></a>
        <?php include "includes/header.php"; ?>
        <main class="page">
            <div class="slider">
                <div id="photo1" class="slide fade"></div>
                <div id="photo2" class="slide fade"></div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <section class="container main-block">
                    <h1 class="main-slogan">modern Italian cuisine</h1>
                    <h2 class="second-phrase">Get the best or nothing at all</h2>
                </section>
            </div>
            <div class="desc">
                <a id="about" class="in-page-link"></a>
                <img src="photo/photo-s2.webp" alt="photo" class="desc-photo">
                <section class="container second-block">
                    <h1 class="title">Description of the restaurant</h1>
                    <h2 class="subtitle">Some interesting facts instead of description:</h2>
                    <p class="description">Spaghetti Bolognese does not exist in Italy. There you have to order tagliatelle with Ragu sauce. In a pizzeria, never share the pizza with someone else – the Italians never share a pizza and will look at you very surprised. Cappuccino after 11 AM? It is not a good idea! For Italians, the cappuccino is an acceptable option for breakfast, but not for the later hours of the day. </p>
                </section>
            </div>
            <div class="section-menu">
                <a id="menu" class="in-page-link"></a>
                <section class="header-our-menu">
                    <h1 class="our-menu">Our menu</h1>
                </section>
                <section class="menu-items">
                    <ul class="menu-items-list container">
                        <?php foreach ($products as $categ): ?>
                            <li id="<?= $categ['category_name']; ?>" class="menu-item-list">
                                <a href="/pages/<?= $categ['category_name']; ?>.php" class="category-name"><?php echo $categ['category_name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
        </main>
        <?php include "includes/footer.php"; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="script/burger.js"></script>
    <script src="script/slider.js"></script>
    <script src="script/main.js"></script>
</body>

</html>