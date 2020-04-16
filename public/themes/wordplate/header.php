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
        <div class="header-container-desktop">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/logo.svg" ?>" alt="Gathenhielmska logo" loading="lazy">
            <div class="header-container-desktop-evenemang">
                <a href="#">
                    <p>EVENEMANG</p>
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/headerarrowdesktop.svg" ?>" alt="Gray arrow" loading="lazy">
                </a>
            </div>
            <div class="header-container-desktop-archive">
                <a href="#">
                    <p>ARKIV</p>
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/headerarrowdesktop.svg" ?>" alt="Gray arrow" loading="lazy">
                </a>
            </div>
            <div class="header-container-desktop-about-us">
                <a href="#">
                    <p>OM OSS</p>
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/headerarrowdesktop.svg" ?>" alt="Gray arrow" loading="lazy">
                </a>
            </div>
            <div class="header-container-desktop-login">
                <a href="#">
                    <p>LOGGA IN</p>
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/headerarrowdesktop.svg" ?>" alt="Gray arrow" loading="lazy">
                </a>
            </div>
            <div class="header-container-desktop-lang">
                <a href="#">
                    <p>SV</p>
                </a>
                <a href="#">
                    <p>EN</p>
                </a>
            </div>
            <div class="header-container-desktop-search">
                <p>SÖK</p>
            </div>
        </div>


        <div class="open-menu hidden">
            <div class="menu-links">
                <div class="menu-event">
                    <p>Event</p>
                    <a href="#" class="to-event"><img src="<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>" alt="Arrow" loading="lazy"></a>
                </div>
                <div class="menu-event-expand hidden">
                    <a href="/kurser">
                        <p>KURSER</p>
                    </a>
                    <a href="#">
                        <p>EVENEMANGSKALENDER</p>
                    </a>
                    <a href="/guidad-visning">
                        <p>GUIDAD VISNING</p>
                    </a>
                    <a href="#">
                        <p>KOMMANDE EVENEMANG</p>
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
                        <p>VERKSAMHETEN</p>
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
                        <p>MEDARBETARE</p>
                    </a>
                    <a href="#">
                        <p>ARRANGERA EVENEMANG</p>
                    </a>
                    <a href="#">
                        <p>HYR IN ER HOS OSS</p>
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
                    <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/twitter.svg" ?>" alt="Twitter icon" loading="lazy"></a>
                    <a href="https://www.facebook.com/pages/category/Landmark---Historical-Place/Gathenhielmska-Huset-103055504510437/"><img src="<?php echo get_template_directory_uri() . "/assets/images/facebook.svg" ?>" alt="Facebook icon" loading="lazy"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/youtube.svg" ?>" alt="Youtube icon" loading="lazy"></a>
                    <a href="https://www.instagram.com/explore/locations/346999549082157/sweden/gothenburg/gathenhielmska-huset/"><img src="<?php echo get_template_directory_uri() . "/assets/images/instagram.svg" ?>" alt="Instagram icon" loading="lazy"></a>
                </div>

                <div class="menu-newsletter">
                    <p>Prenumerera på nyhetsbrevet</p>
                    <input type="email" placeholder="skriv din e-postadress">
                    <button aria-label="subscribe" class="menu-subscribe-button">PRENUMERERA</button>
                </div>

                <button aria-label=“close” class="menu-cancel"><img src="<?php echo get_template_directory_uri() . "/assets/images/cross.svg" ?>" alt="White cross" loading="lazy"></button>
            </div>
        </div>

        <button aria-label="open" class="thumburger-menu"><img src="<?php echo get_template_directory_uri() . "/assets/images/menu.svg" ?>" alt="Menu icon" loading="lazy"><img>
        </button>

    </header>
