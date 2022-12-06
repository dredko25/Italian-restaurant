<?php
require_once "../includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soup</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,regular&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/menu.css">
    <link rel="stylesheet" href="/style/responsive.css">
    <link rel="stylesheet" href="/style/responsive-menu.css">
</head>

<body>
    <div class="wrapper">
        <?php include "../includes/header-pages.php"; ?>
        <?php
        $dishes = mysqli_query($connection, "SELECT `dish_name`, `dish_description`, `dish_cost`, `dish_weight`, `dish_img` FROM `Dish` WHERE `id_category` IN (SELECT `id_category` FROM `Category` WHERE `category_name` = 'Soup')");
        ?>
        <main class="main container-menu">
            <h1 class="category-name">Soup</h1>
            <ul class="category-items">
                <?php
                while ($dish = mysqli_fetch_assoc($dishes)) {
                ?>
                    <li class="category-item">
                        <div class="item">
                            <img src="../photo/menu/soup/<?= $dish['dish_img']; ?>" alt="" class="item-photo">
                            <h1 class="item-name"><?php echo $dish['dish_name']; ?></h1>
                            <h2 class="item-desc"><?php echo $dish['dish_description']; ?></h2>
                            <p class="item-weight"><?php echo $dish['dish_weight']; ?>g</p>
                            <div class="button">
                                <div class="item-price">$<?php echo $dish['dish_cost']; ?></div>
                                <a class="buy">Add to Busket</a>
                            </div>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </main>
        <?php include "../includes/footer-pages.php"; ?>
    </div>
    <script src="/script.js"></script>
</body>

</html>