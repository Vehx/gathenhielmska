<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage wordplate
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
    <div class="content-area">
        <main class="site-main" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'default'); ?></h1>
                    <iframe src="https://giphy.com/embed/kqu0JnieiuhGw" width="480" height="256" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                </header><!-- .page-header -->
                <div class="page-content">
                    <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'default'); ?></p>

                    <?php get_search_form(); ?>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
