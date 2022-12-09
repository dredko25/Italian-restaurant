<?php
session_start();
require_once "../includes/db.php";
require_once "../includes/func.php";
$check = header_choice('page');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,regular&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/menu.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <link rel="stylesheet" href="../style/responsive-menu.css">
    <link rel="stylesheet" href="../style/basket.css">
    <link rel="stylesheet" href="../style/responsive-basket.css">

    <link rel="icon" type="image/png" sizes="32x32" href="../photo/favicon.png">
</head>

<body>
    <div class="wrapper">
        <a id="home" class="in-page-link"></a>
        <?php include "../includes/header.php"; ?>
        <main class="page">
            <h1 class="category-name">Basket</h1>
            <?php if (!empty($_SESSION['basket'])) : ?>
            <table class="basket-table container">
                <tr>
                    <th class="th-header Image">Image</th>
                    <th class="th-header Name">Name</th>
                    <th class="th-header Weight">Weight</th>
                    <th class="th-header Quantity">Quantity</th>
                    <th class="th-header Cost">Cost</th>
                    <th class="th-header Del">Del</th>
                </tr>
                <?php foreach ($_SESSION['basket'] as $id => $item): ?>
                <tr>
                    <td class="td-field" id="Image"><img src="../photo/menu/<?= $item['dish_img'] ?>" alt="<?= $item['dish_name'] ?>" class="item-img"></td>
                    <td class="td-field" id="Name"><?= $item['dish_name'] ?></td>
                    <td class="td-field" id="Weight"><?= $item['dish_weight']; ?>g</td>
                    <td class="td-field" id="Quantity"><?= $item['dish_qty'] ?></td>
                    <td class="td-field" id="Cost">$<?= $item['dish_cost'] ?></td>
                    <td class="td-field" id="Del"><a href="?basket=delete&id=<?= $item['id_dish'] ?>" class="del-from-basket" data-id="<?= $item['id_dish'] ?>" onClick="document.location.reload(true)"><img src="../photo/close.png" alt="del" class="btn-del"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div class="basket-footer container">
                <a class="clear-the-basket" id="clear-basket" onClick="document.location.reload(true)">Clear the basket</a>
                <div class="total-sum">Total: $<?= $_SESSION['basket.sum'] ?></div>
                <a class="make-an-order" id="make-order">Make an order</a>
            </div>
            <?php else: ?>
                <p class="basket-is-empty container">The basket is empty</p>
            <?php endif; ?>
        </main>
        <?php include "../includes/footer.php"; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../script/burger.js"></script>
    <script src="../script/main.js"></script>
</body>

</html>