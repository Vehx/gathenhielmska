<footer class="footer">
    <div class="footer__logo">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/FooterLogo.svg" ?>" alt="Gathenhielmska logo" loading="lazy">
        GATHENHIELMSKA
    </div>
    <div class="footer__center-wrapper">
        <div class="footer__newsletter">
            <h3 class="footer__newsletter-text">Prenumerera på vårt nyhetsbrev</h3>
            <form class="footer__newsletter-form" action="" method="post">
                <input type="email" placeholder="name@mail.com">
                <button type="submit">SKICKA</button>
            </form>
        </div>
        <div class="footer__information">
            <div class="footer__contact">
                <div class="footer__contact-number">0737-56 67 78</div>
                <div class="footer__contact-email">hej@gathenhielmska.se</div>
            </div>
            <div class="footer__directions">
                <h3>Hitta hit</h3>
                <p>Stigbergstorget 7</p>
                <p>414 63 Göteborg</p>
                <!-- todo add google maps link -->
                <a class="footer__map" href="#">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/MapMarker.svg" ?>" alt="Map marker">
                    <p>karta</p>
                </a>
            </div>
        </div>
    </div>
    <div class="footer__socials">
        <a href="http://twitter.com">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/TwitterLogo.svg" ?>" alt="Gathenhielmska twitter">
        </a>
        <a href="http://facebook.com">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/FacebookLogo.svg" ?>" alt="Gathenhielmska facebook">
        </a>
        <a href="http://youtube.com">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/YoutubeLogo.svg" ?>" alt="Gathenhielmska youtube">
        </a>
        <a href="http://instagram.com">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/InstagramLogo.svg" ?>" alt="Gathenhielmska instagram">
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
