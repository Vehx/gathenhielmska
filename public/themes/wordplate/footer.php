<footer class="footer">
    <div class="footer__top-wrapper">
        <div class="footer__logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/FooterLogo.svg" ?>" alt="Gathenhielmska logo" loading="lazy">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/FooterLogoText.svg" ?>" alt="Gathenhielmska logo" loading="lazy">
        </div>
    </div>
    <div class="footer__center-wrapper">
        <div class="footer__newsletter">
            <p class="footer__desktop-title">Nyhetsbrev</p>
            <br class="footer__desktop-title">
            <p class="footer__newsletter-title">Prenumerera på vårt nyhetsbrev</p>
            <p class="footer__desktop-email">Fyll i din epostadress för att få vårt nyhetsbrev</p>
            <p class="footer__newsletter-text">Mailadress</p>
            <form class="footer__newsletter-form" action="/" method="post">
                <label hidden for="email">Mailadress</label>
                <input type="email" name="email" id="email" placeholder="name@mail.com"><button type="submit">SKICKA</button>
            </form>
        </div>
        <div class="footer__information">
            <div class="footer__directions">
                <p class="footer__desktop-title">Adress</p>
                <p class="footer__directions-find">Hitta hit</p>
                <p class="footer__directions-adress">Stigbergstorget 7</p>
                <p class="footer__directions-adress">414 63 Göteborg</p>
                <a class="footer__map" href="https://goo.gl/maps/z3aKagMzZx34MQQx5" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/MapMarker.svg" ?>" alt="Map marker" loading="lazy">
                    <p>karta</p>
                </a>
            </div>
            <div class="footer__contact">
                <div class="footer__desktop-title">Kontakt</div>
                <p class="footer__contact-number">0737-56 67 78</p>
                <p class="footer__contact-email">gathenhielmskabokning@gmail.com</p>
            </div>
        </div>
        <div class="footer__bottom-wrapper">
            <p class="footer__desktop-title">Följ oss på sociala medier</p>
            <div class="footer__socials">
                <a href="http://twitter.com">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/TwitterLogo.svg" ?>" alt="Gathenhielmska twitter" loading="lazy"></a>
                <a href="http://facebook.com/pages/category/Landmark---Historical-Place/Gathenhielmska-Huset-103055504510437/">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/FacebookLogo.svg" ?>" alt="Gathenhielmska facebook" loading="lazy"></a>
                <a href="http://youtube.com">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/YoutubeLogo.svg" ?>" alt="Gathenhielmska youtube" loading="lazy"></a>
                <a href="http://instagram.com/explore/locations/346999549082157/sweden/gothenburg/gathenhielmska-huset/">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/InstagramLogo.svg" ?>" alt="Gathenhielmska instagram" loading="lazy"></a>
            </div>
        </div>
    </div>
    <div class="footer__logo-wrapper">
        <div class="footer__logo-gs">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/goteborg.png" ?>" alt="Göteborgs stad" loading="lazy">
        </div>
        <div class="footer__logo-higab">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/higab.png" ?>" alt="Higab" loading="lazy">
        </div>
        <div class="footer__logo-sfr">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/SFR.png" ?>" alt="Studiefämjandet" loading="lazy">
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
