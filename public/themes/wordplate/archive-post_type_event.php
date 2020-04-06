<?php

/**
 * The template for displaying events with filter
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Wordplate
 * @version 1.0
 */

get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Test if the current post is in category 3. -->
        <!-- If it is, the div box is given the CSS class "post-cat-three". -->
        <!-- Otherwise, the div box is given the CSS class "post". -->

        <?php if (in_category('3')) : ?>
            <div class="post-cat-three">
            <?php else : ?>
                <div class="post">
                <?php endif; ?>


                <!-- Display the Title as a link to the Post's permalink. -->

                <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>





                <!-- Display the Post's content in a div box. -->

                <div class="entry">
                    <?php the_content(); ?>
                    <!-- Display the date (Month dayth, year format) -->

                    <small><?php the_time('F jS, Y'); ?></small>
                </div>


                <!-- Display a comma separated list of the Post's Categories. -->

                <p class="postmetadata"><?php the_category(', '); ?></p>
                </div> <!-- closes the first div box -->


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
