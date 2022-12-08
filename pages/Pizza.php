<?php
session_start();
require_once "../includes/db.php";
require_once "../includes/func.php";
$products = get_dish('Pizza');
$check = header_choice('page');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,regular&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/menu.css">
    <link rel="stylesheet" href="/style/responsive.css">
    <link rel="stylesheet" href="/style/responsive-menu.css">

    <link rel="icon" type="image/png" sizes="32x32" href="../photo/favicon.png">
</head>

<body>
    <div class="wrapper">
        <?php include "../includes/header-pages.php"; ?>
        <main class="main container-menu">
            <h1 class="category-name">Pizza</h1>
            <ul class="category-items">
                <?php foreach ($products as $dish) : ?>
                    <li class="category-item">
                        <div class="item">
                            <img src="../photo/menu/pizza/<?= $dish['dish_img']; ?>" alt="" class="item-photo">
                            <h1 class="item-name"><?php echo $dish['dish_name']; ?></h1>
                            <h2 class="item-desc"><?php echo $dish['dish_description']; ?></h2>
                            <p class="item-weight"><?php echo $dish['dish_weight']; ?>g</p>
                            <div class="button">
                                <div class="item-price">$<?php echo $dish['dish_cost']; ?></div>
                                <a href="?busket=add&id=<?= $dish['id_dish'] ?>" class="buy add-to-busket" data-id="<?= $dish['id_dish'] ?>">Add to Busket</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

        </main>
        <?php include "../includes/footer-pages.php"; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="/script/burger.js"></script>
    <script src="/script/main.js"></script>
</body>

</html>