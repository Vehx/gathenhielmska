<?php get_header(); ?>

<main role="main">
    <section class="index-wrapper">
        <div class="index-hero">
            <img class="index-img-mobile" src="<?php echo get_template_directory_uri() . "/assets/images/landingpage.png" ?>" alt="Landing page image" loading="lazy">
            <img class="index-img-desktop" src="<?php echo get_template_directory_uri() . "/assets/images/landingpagedesktop.png" ?>" alt="Landing page image" loading="lazy">
            <h3>Gathenhielmska huset
                <br>
                - En kulturarena på stigbergstorget.</h3>
            <h5>Att levandegöra vårt kulturarv genom konsten, en grundtanke med verksamheten i Gathenhielmska</h5>
        </div>
        <div class="index-comming">
            <p class="index-comming-events">KOMMANDE EVENEMANG</p>
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
            foreach ($terms as $term)
                // Use get_term_link to get terms permalink
                // USe $term->name to return term name
                get_term_link($term) .  $term->name
            ?>
            <?php
            // get event posts from ACF
            $posts = get_posts(array(
                'post_type'            => 'post_type_event',
                'posts_per_page'    => -1,
                'meta_key'            => 'event-time',
                'orderby'            => 'meta_value',
                'order'                => 'ASC',
            ));

            if ($posts) : ?>

                <?php foreach ($posts as $post) :

                    setup_postdata($post)

                ?>
                    <!-- The event -->
                    <article class="event">
                        <h2 class="event-heading"><span class="event-type"><?php echo $term->name;  ?></span> <?php the_title(); ?></h2>
                        <?= the_post_thumbnail('medium'); ?>
                        <?php the_excerpt(); ?>
                        <span class="event-time"><?php the_field('event-time'); ?></span>
                        <div class="event-cta">
                            <button class="event-ticket"><a class="event-ticket-link" href="<?= get_field('event-ticket-link'); ?>">Biljetter</a></button>
                            <button class="event-readmore"><a class="eventlink" href="<?php the_permalink(); ?>">Läs mer</a></button>
                        </div>
                    </article>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>
        </div>
        <!-- EVENEMANG HÄR -->
        <div class="index-event">
            <p>Till våren blir det en hel del aktiviteter,<br>kom hit och delta!</p>
            <div class="index-event-images">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/calendar.svg" ?>" alt="Calendar svg" loading="lazy">
                    <p>ALLA<br> EVENEMANG</p>
                </a>
            </div>
        </div>
        <div class="index-video">
            <img class="video-mobile" src="<?php echo get_template_directory_uri() . "/assets/images/video.png" ?>" alt="Video picture" loading="lazy">
            <div class="index-video-desktop">
                <div class="index-video-desktop-img">
                    <img class="index-img-desktop" src="<?php echo get_template_directory_uri() . "/assets/images/videodesktop.png" ?>" alt="Video picture desktop" loading="lazy">
                </div>
                <div class="index-video-desktop-text">
                    <h6>GATHENHIELMSKA HUSET</h6>
                    <p>För att visa vår historia, verksamhet och ambitioner har<br>Patrik Janson tagit fram en film.</p>
                    <h5>FILM AV: PATRIK JANSON</h5>
                </div>
            </div>
        </div>
        <div class="index-archive">
            <p class="index-curious">Nyfiken på hur det ser ut på<br> våra events? Kolla in våra<br> arkiv!</p>
            <div class="index-archive-images">
                <div class="index-pictures">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/pictures.svg" ?>" alt="Archive picutres" loading="lazy">
                        <p>BILDER</p>
                    </a>
                </div>
                <div class="index-movies">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/movies.svg" ?>" alt="Archive movies" loading="lazy">
                        <p>FILMER</p>
                    </a>
                </div>
                <div class="index-previous-event">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/earlier-events.svg" ?>" alt="Archive events" loading="lazy">
                        <p>TIDIGARE <br>EVENT</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="index-archive-desktop">
            <h6>Till våren blir det en hel del aktiviteter, kom hit<br>och delta!</h6>
            <a href="#">
                <p>ALLA EVENEMANG</p>
            </a>
        </div>
        <div class="index-quote">
            <div class="index-quote-text">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/quote.svg" ?>" alt="Quote sign" loading="lazy">
                <p>Vi sätter platsen, artisten och <br>besökarna i centrum för <br>Stigbergstorgets framtida <br>utveckling.</p>
            </div>
        </div>
        <div class="index-quote-desktop">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/quotedesktop.svg" ?>" alt="Quote sign desktop" loading="lazy">
            <h6>Att spela teater i trädgården är en helt<br>fantastiskt upplevelse</h6>
            <p>- Anna Stendal<br>från teateruppsättningen lev ditt liv</p>
        </div>
    </section>
</main>

<?php get_footer();
