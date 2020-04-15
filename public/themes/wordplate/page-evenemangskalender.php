<?php get_header() ?>
<main role="main">
    <section class="eventcalender-info">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_post_thumbnail('large', 'style=max-width:100%;height:auto;'); ?>
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
    </section>

    <section class="event-listing">
        <div class="event-filter">
            <div class="event-filter-name">Filtrera</div>
            <div class="custom-select" style="width:100%;">
                <select>
                    <option value="0">Välj genre</option>
                    <?php
                    // get the categories to filter and fix the order
                    $posts = get_posts(array(
                        'post_type'            => 'post_type_event',
                        'posts_per_page'    => -1,
                        'meta_key'            => 'type_of_event',
                        'orderby'            => 'meta_value',
                        'order'                => 'ASC'
                    ));
                    if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata($post) ?>
                            <option value="<?php the_field('type_of_event'); ?>"><?php the_field('type_of_event'); ?></option>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
    <?php endwhile; ?>

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
                <h2 class="event-heading"><span class="event-type"><?php the_field('type_of_event'); ?></span> <?php the_title(); ?></h2>
                <?= the_post_thumbnail('medium'); ?>
                <?php the_excerpt(); ?>
                <span class="event-time"><?php the_field('event-time'); ?></span>
                <div class="event-cta">
                    <button class="event-ticket"><a class="event-ticket-link" href="<?= get_field('event-ticket-link'); ?>">Biljetter</a></button>
                    <button class="event-readmore"><a class="eventlink" href="<?php the_permalink(); ?>">Läs mer</a></button>
                </div>
            </article>

        <?php endforeach; ?>

    </section>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
<section>
    <h3 class="event-info-bottom">Varför vi valt att öppna upp Gatenhilemska huset för allmänheten.</h3>
    <p class="event-info-bottom-p">Genom att att arrangera föreställningar, visningar, kurser och andra evenemang skapar vi inte bara ett program för att tillgängliggöra huset och dess kulturhistoriska värde men också ett sammanhang för nutidens kulturaktörer. Vi sätter platsen, artister och besökarna i centrum för Stigbergstorgets framtida utveckling. Dessa möten på en sådan unik plats inspirerar till att hitta och tro på nya former och möjligheter för olika typer av samarbeten, vilket gynnar samhället. Därför tror vi att Gathenhielmska Huset kommer att vara ett viktigt kulturellt nav i Göteborg, en plattform som kommer att belysa processer som bidrar till samhällsutveckling och lokal tillväxt. Detta är inte en hypotes utan har redan påverkat områdets utveckling rejält.</p>
</section>
</main>



<?php get_footer();
