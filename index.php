<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruschetta</title>
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,regular&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <div class="wrapper">
        <a id="home" class="in-page-link"></a>
        <header class="header">
            <nav class="container header-menu">
                <a href="#home" class="header-logo">
                    <img src="photo/restaurant-logo.png" alt="logo" class="photo-logo">
                    <h1 class="name-restaurant">Bruschetta</h1>
                </a>
                <ul class="menu-list">
                    <li class="menu-item">
                        <a href="#home" class="menu-link">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="#about" class="menu-link">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="#menu" class="menu-link">Menu</a>
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
        <main class="page">
            <div class="background_photo">
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
                        <li id="Pasta" class="menu-item-list">
                            <a href="Pasta.php" class="category-name">Pasta</a>
                        </li>
                        <li id="Soup" class="menu-item-list">
                            <a href="Soup.php" class="category-name">Soup</a>
                        </li>
                        <li id="Bruschetta" class="menu-item-list">
                            <a href="Bruschetta.php" class="category-name">Bruschetta</a>
                        </li>
                        <li id="Pizza" class="menu-item-list">
                            <a href="Pizza.php" class="category-name">Pizza</a>
                        </li>
                        <li id="Desserts" class="menu-item-list">
                            <a href="Desserts.php" class="category-name">Desserts</a>
                        </li>
                        <li id="Specials" class="menu-item-list">
                            <a href="Specials.php" class="category-name">Specials</a>
                        </li>
                    </ul>
                </section>
            </div>
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