<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-container">
            <div class="header-logo">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/logo.svg" ?>" alt="Gathenhielmska logo" loading="lazy">
                <p>GATHENHIELMSKA</p>
            </div>
        </div>


        <div class="open-menu hidden">
            <div class="menu-links">
                <div class="menu-event">
                    <p>Event</p>
                    <a href="#" class="to-event"><img src="<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>" alt="Arrow" loading="lazy"></a>
                </div>
                <div class="menu-event-expand hidden">
                    <a href="#">
                        <p>KURSER</p>
                    </a>
                    <a href="#">
                        <p>KALENDER</p>
                    </a>
                    <a href="#">
                        <p>GUIDAD VISNING</p>
                    </a>
                    <a href="#">
                        <p>EVENEMANG</p>
                    </a>
                </div>
                <div class="menu-about">
                    <p>Om oss</p>
                    <a href="#" class="to-about"><img src="<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>" alt="Arrow" loading="lazy"></a>
                </div>
                <div class="menu-about-expand hidden">
                    <a href="#">
                        <p>HISTORIA</p>
                    </a>
                    <a href="#">
                        <p>GUIDAD VISNING</p>
                    </a>
                </div>
                <div class="menu-archive">
                    <p>Arkiv</p>
                    <a href="#" class="to-archive"><img src="<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>" alt="Arrow" loading="lazy"></a>
                </div>
                <div class="menu-archive-expand hidden">
                    <a href="#">
                        <p>EVENEMANG</p>
                    </a>
                    <a href="#">
                        <p>BILDER & FOTON</p>
                    </a>
                    <a href="#">
                        <p>FILM</p>
                    </a>
                </div>
                <div class="menu-contact">
                    <p>Kontakt</p>
                    <a href="#" class="to-contact"><img src="<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>" alt="Arrow" loading="lazy"></a>
                </div>
                <div class="menu-contact-expand hidden">
                    <a href="#">
                        <p>KONTAKTUPPGIFTER</p>
                    </a>
                    <a href="#">
                        <p>MEDARBETANDE</p>
                    </a>

                </div>
                <div class="menu-lang">
                    <div class="menu-swedish">
                        <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/swe.svg" ?>" alt="Swedish flag" loading="lazy">
                            <p>Sv</p>
                        </a>
                    </div>
                    <div class="menu-english">
                        <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/eng.svg" ?>" alt="English flag" loading="lazy">
                            <p>En</p>
                        </a>
                    </div>

                </div>
                <div class="menu-login-buttons">
                    <button aria-label="login" class="menu-login">LOGGA IN</button>
                    <button aria-label="create-account" class="menu-create-account">SKAPA KONTO</button>
                </div>

                <hr class="menu-line">
                <div class="menu-search-field">
                    <input type="text" placeholder="Sökord" class="menu-search">
                    <button aria-label="search" class="menu-search-button">SÖK</button>
                </div>

                <div class="menu-social-media">
                    <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/twitter.svg" ?>" alt="Twitter icon" loading="lazy">
                        <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/facebook.svg" ?>" alt="Facebook icon" loading="lazy">
                            <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/youtube.svg" ?>" alt="Youtube icon" loading="lazy">
                                <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/instagram.svg" ?>" alt="Instagram icon" loading="lazy">
                </div>

                <div class="menu-newsletter">
                    <p>Prenumerera på nyhetsbrevet</p>
                    <input type="email" placeholder="skriv din e-postadress">
                    <button aria-label="subscribe" class="menu-subscribe-button">PRENUMERERA</button>
                </div>

                <button aria-label=“close” class="menu-cancel"><img src="<?php echo get_template_directory_uri() . "/assets/images/cross.svg" ?>" alt="White cross" loading="lazy"></button>
            </div>
        </div>

        <button aria-label="open" class="thumburger-menu">=</button>

    </header>