<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package WordPress
 * @subpackage Wordplate
 * @version 1.0
 */

get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post">
            <!-- Display the Title as a link to the Post's permalink. -->
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

            <!-- Display the Post's content in a div box. -->
            <div class="entry">
                <?php the_content(); ?>
            </div>

            <!-- Display a comma separated list of the Post's Categories. -->

            <p class="postmetadata"><?php _e('Posted in'); ?> <?php the_category(', '); ?></p>



            <!-- Stop The Loop (but note the "else:" - see next line). -->

        <?php endwhile;
else : ?>


        <!-- The very first "if" tested to see if there were any Posts to -->
        <!-- display.  This "else" part tells what do if there weren't any. -->
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>


        <!-- REALLY stop The Loop. -->
    <?php endif; ?>

    <?php
    get_footer();
