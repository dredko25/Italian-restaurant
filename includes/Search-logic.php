<?php
require_once "db.php";

global $pdo;

if (isset($_POST['input'])) {
    $search = $_POST['input'];
    $sql = "SELECT * FROM `Dish` WHERE `dish_name` LIKE '{$search}%' OR `dish_description` LIKE '{$search}%' OR `dish_cost` LIKE '{$search}%'";
    $resultSearch = $pdo->query($sql);
    $numRows = $resultSearch->rowCount();

    if ($numRows > 0) { ?>

        <h1 class="category-name-search">Search Results:</h1>
        <ul class="category-items-search">
            <?php foreach ($resultSearch as $dish) : ?>
                <li class="category-item-search">
                    <div class="item-search">
                        <img src="../photo/menu/<?= $dish['dish_img']; ?>" alt="<?= $dish['dish_name']; ?>" class="item-photo-search">
                        <h1 class="item-name"><?php echo $dish['dish_name']; ?></h1>
                        <h2 class="item-desc"><?php echo $dish['dish_description']; ?></h2>
                        <p class="item-weight"><?php echo $dish['dish_weight']; ?>g</p>
                        <div class="button">
                            <div class="item-price">$<?php echo $dish['dish_cost']; ?></div>
                            <a href="?basket=add&id=<?= $dish['id_dish'] ?>" class="buy add-to-basket" data-id="<?= $dish['id_dish'] ?>">Add to Basket</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div id="pop-up" class="container">
            <p>Added to basket</p>
        </div>

<?php
    } else {
        echo "<p class='res-is-empty container'>Nothing found. Try again.</p>";
    }
}
?>

<script src="../script/main.js"></script>
