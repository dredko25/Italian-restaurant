<footer class="footer">
    <a id="contacts" class="in-page-link"></a>
    <div class="footer-content">
        <div class="social-media">
            <a href="https://www.instagram.com/" target="_blank" class="inst">
                <img src="<?= $res = $choice ? "photo/instagram.png"  : "../photo/instagram.png" ?>" alt="logo" class="media-logo">
            </a>
            <a href="https://www.facebook.com/" target="_blank" class="facebook">
                <img src="<?= $res = $choice ? "photo/facebook.png"  : "../photo/facebook.png" ?>" alt="logo" class="media-logo">
            </a>
        </div>
        <div class="footer-center">
            <a href="<?= $res = $choice ? "#home"  : "/index.php" ?>" class="footer-logo">
                <img src="<?= $res = $choice ? "photo/restaurant-logo.png"  : "../photo/restaurant-logo.png" ?>" alt="logo" class="photo-logo">
                <h1 class="name-restaurant">Bruschetta</h1>
            </a>
            <div class="hours">Working hours: 10:00 - 22:00</div>
            <div class="copyright">© COPYRIGHT 2014 - ALL RIGHTS RESERVED</div>
        </div>
        <div class="our-contacts">
            <h2 id="cont" class="contacts-item">Our contacts:</h2>
            <h2 class="contacts-item">+380972679534</h2>
            <h2 class="contacts-item">+380662679534</h2>
        </div>
    </div>
</footer>