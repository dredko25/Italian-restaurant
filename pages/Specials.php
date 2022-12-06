<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specials</title>
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
            <h1 class="category-name">Specials</h1>
            <ul class="category-items">
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/specials/gnocchi.png" alt="" class="item-photo">
                        <h1 class="item-name">Gnocchi</h1>
                        <h2 class="item-desc">Mashed potato, flour, egg</h2>
                        <p class="item-weight">350g</p>
                        <div class="button">
                            <div class="item-price">$10</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/specials/lasagna.png" alt="" class="item-photo">
                        <h1 class="item-name">Lasagna</h1>
                        <h2 class="item-desc">Lasagna noodles, ground beef, onion, garlic, tomatoes</h2>
                        <p class="item-weight">400g</p>
                        <div class="button">
                            <div class="item-price">$18</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/specials/mussels.png" alt="" class="item-photo">
                        <h1 class="item-name">Mussles</h1>
                        <h2 class="item-desc">Mussels with lemon and french fries</h2>
                        <p class="item-weight">400g</p>
                        <div class="button">
                            <div class="item-price">$25</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/specials/osso-buco.png" alt="" class="item-photo">
                        <h1 class="item-name">Osso buco</h1>
                        <h2 class="item-desc">Veal shanks, butter, garlic, onion, carrot, tomatoes</h2>
                        <p class="item-weight">400g</p>
                        <div class="button">
                            <div class="item-price">$30</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/specials/ribollita.png" alt="" class="item-photo">
                        <h1 class="item-name">Ribollita</h1>
                        <h2 class="item-desc">Tuscan kale, celery, carrots, onion, garlic , Parmesan , tomatoes</h2>
                        <p class="item-weight">500g</p>
                        <div class="button">
                            <div class="item-price">$20</div>
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