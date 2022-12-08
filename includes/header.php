<header class="header">
    <nav class="container header-menu">
            <a href="<?= $res = $choice ? "#home"  : "/index.php" ?>" class="header-logo">
                <img src="../photo/restaurant-logo.png" alt="logo" class="photo-logo">
                <h1 class="name-restaurant">Bruschetta</h1>
            </a>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="<?= $res = $choice ? "#home"  : "/index.php#home" ?>" class="menu-link">Home</a>
                </li>
                <li class="menu-item">
                    <a href="<?= $res = $choice ? "#about"  : "/index.php#about" ?>" class="menu-link">About</a>
                </li>
                <li class="menu-item">
                    <a href="<?= $res = $choice ? "#menu"  : "/index.php#menu" ?>" class="menu-link">Menu</a>
                </li>
                <li class="menu-item">
                    <a href="<?= $res = $choice ? "pages/basket.php"  : "../pages/basket.php" ?>" class="menu-link">Basket <span class="item-qty">15</span></a>
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