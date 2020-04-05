<?php get_header(); ?>

<main role="main">
    <div class="open-menu hidden">
        <div class="menu-links">
            <div class="menu-event">
                <p>EVENT</p>
                <a href="#" class="to-event"><img src="<?php echo get_template_directory_uri() . "/assets/images/plus.svg" ?>" alt="Plus" loading="lazy"></a>
            </div>
            <div class="menu-event-expand hidden">
                <a href="#">
                    <p>KURSER</p>
                </a>
                <a href="#">
                    <p>KALENDER</p>
                </a>
                <a href="#">
                    <p>BOKAD GUIDAD VISNING</p>
                </a>
                <a href="#">
                    <p>KOMMANDE EVENEMANG</p>
                </a>
            </div>
            <div class="menu-about">
                <p>OM GATHENHIELMSKA HUSET</p>
                <a href="#" class="to-about"><img src="<?php echo get_template_directory_uri() . "/assets/images/plus.svg" ?>" alt="Plus" loading="lazy"></a>
            </div>
            <div class="menu-about-expand hidden">
                <a href="#">
                    <p>HISTORIA</p>
                </a>
                <a href="#">
                    <p>VERKSAMHETER</p>
                </a>
            </div>
            <div class="menu-archive">
                <p>ARKIV</p>
                <a href="#" class="to-archive"><img src="<?php echo get_template_directory_uri() . "/assets/images/plus.svg" ?>" alt="Plus" loading="lazy"></a>
            </div>
            <div class="menu-archive-expand hidden">
                <a href="#">
                    <p>BILDER</p>
                </a>
                <a href="#">
                    <p>FILM</p>
                </a>
                <a href="#">
                    <p>TIDIGARE EVENT/FÖRESTÄLLNINGAR</p>
                </a>
            </div>
            <div class="menu-contact">
                <p>KONTAKT</p>
                <a href="#" class="to-contact"><img src="<?php echo get_template_directory_uri() . "/assets/images/plus.svg" ?>" alt="Plus" loading="lazy"></a>
            </div>
            <div class="menu-contact-expand hidden">
                <a href="#">
                    <p>LEDNINGEN</p>
                </a>
                <a href="#">
                    <p>RING</p>
                </a>
                <a href="#">
                    <p>MAILA</p>
                </a>
            </div>
            <div class="menu-login">
                <p>LOGGA IN</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/login.svg" ?>" alt="Login" loading="lazy"></a>
            </div>

            <button aria-label=“close” class="menu-cancel"><img src="<?php echo get_template_directory_uri() . "/assets/images/cross.svg" ?>" alt="White cross" loading="lazy"></button>
        </div>
    </div>

    <button aria-label="open" class="thumburger-menu">MENY</button>
</main>

<?php get_footer();
