<footer class="footer">
    <div class="footer__top-wrapper">
        <div class="footer__logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/FooterLogo.svg" ?>" alt="Gathenhielmska logo" loading="lazy">
            <p>GATHENHIELMSKA</p>
        </div>
    </div>
    <div class="footer__center-wrapper">
        <div class="footer__newsletter">
            <h3 class="footer__newsletter-text">Prenumerera på vårt nyhetsbrev</h3>
            <p>Mailadress</p>
            <form class="footer__newsletter-form" action="/" method="post">
                <input type="email" placeholder="name@mail.com"><button type="submit">SKICKA</button>
            </form>
        </div>
        <div class="footer__information">
            <div class="footer__directions">
                <h3>Hitta hit</h3>
                <p>Stigbergstorget 7</p>
                <p>414 63 Göteborg</p>
                <a class="footer__map" href="https://goo.gl/maps/z3aKagMzZx34MQQx5" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/MapMarker.svg" ?>" alt="Map marker" loading="lazy">
                    <p>karta</p>
                </a>
            </div>
            <div class="footer__contact">
                <div class="footer__contact-number">0737-56 67 78</div>
                <div class="footer__contact-email">hej@gathenhielmska.se</div>
            </div>
        </div>
    </div>
    <div class="footer__bottom-wrapper">
        <div class="footer__socials">
            <a href="http://twitter.com">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/TwitterLogo.svg" ?>" alt="Gathenhielmska twitter" loading="lazy"></a>
            <a href="http://facebook.com">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/FacebookLogo.svg" ?>" alt="Gathenhielmska facebook" loading="lazy"></a>
            <a href="http://youtube.com">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/YoutubeLogo.svg" ?>" alt="Gathenhielmska youtube" loading="lazy"></a>
            <a href="http://instagram.com">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/InstagramLogo.svg" ?>" alt="Gathenhielmska instagram" loading="lazy"></a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
