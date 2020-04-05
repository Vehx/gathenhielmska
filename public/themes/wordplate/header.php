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
            <div class="header-lang">
                <a href="#">SV</a>
                <a href="#">EN</a>
                <img src="<?php echo get_template_directory_uri() . "/assets/images/search.svg" ?>" alt="Search" loading="lazy">
            </div>
        </div>
    </header>