<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if (have_posts()) : ?>
    <header class="page-header">
        <?php
        the_archive_title('<h1 class="page-title">', '</h1>');
        the_archive_description('<div class="taxonomy-description">', '</div>');
        ?>
    </header><!-- .page-header -->
<?php endif; ?>


<main class="site-main" role="main">
    <?php
    if (have_posts()) :
    ?>
    <?php
        // Start the Loop.
        while (have_posts()) :
            the_post();

            /*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
            get_template_part('template-parts/post/content', get_post_format());

        endwhile;

        the_posts_pagination(
            array(
                'prev_text'          =>  '<span>' .  'previous' . '</span>',
                'next_text'          => '<span>' . 'next' . '</span>',
                'before_page_number' => '<span>' . __('Page', 'wordplate') . ' </span>',
            )
        );

    else :

        get_template_part('template-parts/post/content', 'none');

    endif;
    ?>

</main><!-- #main -->




<?php
get_footer();
