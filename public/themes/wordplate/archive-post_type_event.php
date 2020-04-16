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
<section class="eventcalender-info">
    <div class="event-hero">
        <h1>Evenemangskalender</h1>
    </div>
    <p class="event-lead">Nedan hittar du kurser som vi på Gatenhielmska erbjuder, allt från musik till historia och mycket annat. Välkomman att anmäla er!</p>
</section>
<section class="event-listing">
    <div class="event-filter">
        <div class="event-filter-name">Filtrera</div>
        <ul class="event-filter-options" aria-label="filter events">
            <?php

            // Taxonomy Loop

            /**
             *  Get the Custom Taxonomy
             *  For a list of other parameters to pass in see link below
             *  @link https://developer.wordpress.org/reference/classes/wp_term_query/__construct/
             *  For a list of get_term return values see link below
             *  @link https://codex.wordpress.org/Function_Reference/get_term
             *
             */
            $terms = get_terms(array(
                'taxonomy'   => 'events', // Swap in your custom taxonomy name
                'hide_empty' => true,
            ));



            // Loop through all terms with a foreach loop
            foreach ($terms as $term) {
                // Use get_term_link to get terms permalink
                // USe $term->name to return term name
                echo '<li class="event-filter-option"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    </div> <!-- Start the Loop. -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="event">
                <h2 class="event-heading"><span class="event-type"><?php get_category('taxonomy') ?></span> <?php the_title(); ?></h2>
                <?php the_post_thumbnail('medium'); ?>
                <?php the_excerpt(); ?>
                <span class="event-time"><?php the_field('event-time'); ?></span>
                <div class="event-cta">
                    <button class="event-ticket"><a class="event-ticket-link" href="<?= get_field('event-ticket-link'); ?>">Biljetter</a></button>
                    <button class="event-readmore"><a class="eventlink" href="<?php the_permalink(); ?>">Läs mer</a></button>
                </div>
            </article>

            <!-- Stop The Loop (but note the "else:" - see next line). -->

        <?php endwhile;
    else : ?>


        <!-- The very first "if" tested to see if there were any Posts to -->
        <!-- display.  This "else" part tells what do if there weren't any. -->
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>


        <!-- REALLY stop The Loop. -->
    <?php endif; ?>

    <?php get_footer();
