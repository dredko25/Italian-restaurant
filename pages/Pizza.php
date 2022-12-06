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
</head>

<body>
    <div class="wrapper">
        <?php include "../includes/header-pages.php"; ?>
        <main class="main container-menu">
            <h1 class="category-name">Pizza</h1>
            <ul class="category-items">
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/pizza/basil-food-garlic-sauce-italian-pizza.png" alt="" class="item-photo">
                        <h1 class="item-name">Garlic pizza</h1>
                        <h2 class="item-desc">Tomato sauce, garlic, basil</h2>
                        <p class="item-weight">400g</p>
                        <div class="button">
                            <div class="item-price">$14</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/pizza/cheese-pizza.png" alt="" class="item-photo">
                        <h1 class="item-name">Four cheese</h1>
                        <h2 class="item-desc">Mozzarella, gorgonzola, Parmigiano Reggiano, and goat cheese</h2>
                        <p class="item-weight">500g</p>
                        <div class="button">
                            <div class="item-price">$24</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/pizza/hot-and-spicy-pizza.png" alt="" class="item-photo">
                        <h1 class="item-name">Hot and spicy pizza</h1>
                        <h2 class="item-desc">Fresh tomatoes, onions, corn, mozzarella, mushrooms</h2>
                        <p class="item-weight">400g</p>
                        <div class="button">
                            <div class="item-price">$17</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/pizza/meat-feast-mixed-pizza.png" alt="" class="item-photo">
                        <h1 class="item-name">Meat pizza</h1>
                        <h2 class="item-desc">Fresh tomatoes, onions, mozzarella, bacon, pickles, olives</h2>
                        <p class="item-weight">500g</p>
                        <div class="button">
                            <div class="item-price">$19</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/pizza/Pepperoni-Pizza.png" alt="" class="item-photo">
                        <h1 class="item-name">Pepperoni</h1>
                        <h2 class="item-desc">Fresh tomatoes, mozzarella</h2>
                        <p class="item-weight">500g</p>
                        <div class="button">
                            <div class="item-price">$13</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/pizza/pizza-with-mozzarella.png" alt="" class="item-photo">
                        <h1 class="item-name">Pizza with mozzarella</h1>
                        <h2 class="item-desc">Fresh tomatoes, mozzarella, spinach</h2>
                        <p class="item-weight">550g</p>
                        <div class="button">
                            <div class="item-price">$15</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/pizza/vegetarian-pizza.png" alt="" class="item-photo">
                        <h1 class="item-name">Vegetarian pizza</h1>
                        <h2 class="item-desc">Fresh tomatoes, onions, corn, mozzarella, mushrooms</h2>
                        <p class="item-weight">450g</p>
                        <div class="button">
                            <div class="item-price">$13</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
            </ul>

        </main>
        <?php include "../includes/footer-pages.php"; ?>
    </div>

    <script src="/script.js"></script>
</body>

</html>