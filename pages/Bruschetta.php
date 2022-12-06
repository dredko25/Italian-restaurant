<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruschetta</title>
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
            <h1 class="category-name">Bruschetta</h1>
            <ul class="category-items">
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/bruschetta/bruschetta1.png" alt="" class="item-photo">
                        <h1 class="item-name">Bruschetta w mushrooms</h1>
                        <h2 class="item-desc">Tuscan bread, garlic, mushrooms</h2>
                        <p class="item-weight">200g</p>
                        <div class="button">
                            <div class="item-price">$13</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/bruschetta/bruschetta2.png" alt="" class="item-photo">
                        <h1 class="item-name">Tomato Bruschetta</h1>
                        <h2 class="item-desc">Tuscan bread, garlic, tomatoes, cheese</h2>
                        <p class="item-weight">200g</p>
                        <div class="button">
                            <div class="item-price">$10</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/bruschetta/bruschetta3.png" alt="" class="item-photo">
                        <h1 class="item-name">Classic bruschetta</h1>
                        <h2 class="item-desc">Tuscan bread, garlic, tomatoes, cheese, basil</h2>
                        <p class="item-weight">200g</p>
                        <div class="button">
                            <div class="item-price">$10</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/bruschetta/bruschetta4.png" alt="" class="item-photo">
                        <h1 class="item-name">Bruschetta set</h1>
                        <h2 class="item-desc">With bacon, salmon and vegetables</h2>
                        <p class="item-weight">500g</p>
                        <div class="button">
                            <div class="item-price">$25</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/bruschetta/bruschetta5.png" alt="" class="item-photo">
                        <h1 class="item-name">Bruschetta w sausages</h1>
                        <h2 class="item-desc">Tuscan bread, garlic, tomatoes, sausages, cheese</h2>
                        <p class="item-weight">250g</p>
                        <div class="button">
                            <div class="item-price">$15</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="../photo/menu/bruschetta/bruschetta6.png" alt="" class="item-photo">
                        <h1 class="item-name">Bruschetta w mozzarella</h1>
                        <h2 class="item-desc">Tuscan bread, garlic, tomatoes, mozzarella</h2>
                        <p class="item-weight">250g</p>
                        <div class="button">
                            <div class="item-price">$11</div>
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