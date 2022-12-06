<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soup</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,regular&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="responsive-menu.css">
</head>
<body>
    <div class="wrapper">
    <header class="header">
            <nav class="container header-menu">
                <a href="index.php" class="header-logo">
                    <img src="photo/restaurant-logo.png" alt="logo" class="photo-logo">
                    <h1 class="name-restaurant">Bruschetta</h1>
                </a>
                <ul class="menu-list">
                    <li class="menu-item">
                        <a href="index.php#home" class="menu-link">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.php#about" class="menu-link">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.php#menu" class="menu-link">Menu</a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link">Basket</a>
                    </li>
                    <li class="menu-item">
                        <a href="#contacts" class="menu-link">Contacts</a>
                    </li>
                </ul>
                <button class="burger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </nav>
        </header>
        <main class="main container-menu">
            <h1 class="category-name">Soup</h1>
            <ul class="category-items">
                <li class="category-item">
                    <div class="item">
                        <img src="photo/menu/soup/chickpea-soup.png" alt="" class="item-photo">
                        <h1 class="item-name">Chickpea soup</h1>
                        <h2 class="item-desc">Vegetable broth, vegetables, canned chickpeas, aromatics, parsley</h2>
                        <p class="item-weight">400g</p>
                        <div class="button">
                            <div class="item-price">$17</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="photo/menu/soup/Chicken-Gnocchi-Soup.png" alt="" class="item-photo">
                        <h1 class="item-name">Chicken Gnocchi Soup</h1>
                        <h2 class="item-desc">Chicken breasts, celery, onion, garlic, carrots, potato gnocchi</h2>
                        <p class="item-weight">350g</p>
                        <div class="button">
                            <div class="item-price">$20</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="photo/menu/soup/Italian-Vegetable-Soup.png" alt="" class="item-photo">
                        <h1 class="item-name">Vegetable soup</h1>
                        <h2 class="item-desc">Onion, carrots, celery, tomato puree, vegetable stock, courgettes, garlic</h2>
                        <p class="item-weight">350g</p>
                        <div class="button">
                            <div class="item-price">$15</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="photo/menu/soup/Italian-Wedding-Soup.png" alt="" class="item-photo">
                        <h1 class="item-name">Italian wedding soup</h1>
                        <h2 class="item-desc">Tomato broth with delicious seasonings</h2>
                        <p class="item-weight">300g</p>
                        <div class="button">
                            <div class="item-price">$20</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="photo/menu/soup/Minestrone.png" alt="" class="item-photo">
                        <h1 class="item-name">Minestrone</h1>
                        <h2 class="item-desc">Beans, onions, celery, carrots, stock, and tomatoes</h2>
                        <p class="item-weight">300g</p>
                        <div class="button">
                            <div class="item-price">$17</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="photo/menu/soup/Pappa-al-Pomodoro.png" alt="" class="item-photo">
                        <h1 class="item-name">Pappa al Pomodoro</h1>
                        <h2 class="item-desc">Tinned San Marzano tomatoes, onion, basil, vegetable stock</h2>
                        <p class="item-weight">300g</p>
                        <div class="button">
                            <div class="item-price">$15</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
                <li class="category-item">
                    <div class="item">
                        <img src="photo/menu/soup/Pasta-e-fragioli.png" alt="" class="item-photo">
                        <h1 class="item-name">Pasta  e Fagioli</h1>
                        <h2 class="item-desc">Pancetta, yellow onion, carrots, ribs celery, garlic, chicken broth, cannellini beans</h2>
                        <p class="item-weight">350g</p>
                        <div class="button">
                            <div class="item-price">$20</div>
                            <button class="buy">Add to Busket</button>
                        </div>
                    </div>
                </li>
            </ul>
        </main>
        <footer class="footer">
            <a id="contacts" class="in-page-link"></a>
            <div class="footer-content">
                <div class="social-media">
                    <a href="https://www.instagram.com/" target="_blank" class="inst">
                        <img src="photo/instagram.png" alt="logo" class="media-logo">
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="facebook">
                        <img src="photo/facebook.png" alt="logo" class="media-logo">
                    </a>
                </div>
                <div class="footer-center">
                    <a href="#home" class="footer-logo">
                        <img src="photo/restaurant-logo.png" alt="logo" class="photo-logo">
                        <h1 class="name-restaurant">Bruschetta</h1>
                    </a>
                    <div class="hours">
                        Working hours: 10:00 - 22:00
                    </div>
                    <div class="copyright">
                        © COPYRIGHT 2014 - ALL RIGHTS RESERVED
                    </div>
                </div>
                <div class="our-contacts">
                    <h2 id="cont" class="contacts-item">Our contacts:</h2>
                    <h2 class="contacts-item">+380972679534</h2>
                    <h2 class="contacts-item">+380662679534</h2>
                </div>
            </div>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>