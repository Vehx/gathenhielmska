<?php get_header(); ?>

<main role="main">
    <article class="event-card">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_post_thumbnail('medium'); ?>
            <h1 class="event-card-title"><?php the_title(); ?></h1>

            <?php the_content(); ?>
            <section class="event-card-cta">
                <span class="event-time card"><?php the_field('event-time'); ?></span>
                <div class="event-cta">
                    <button class="event-ticket card"><a class="event-ticket-link" href="<?= get_field('event-ticket-link'); ?>">Biljetter</a></button>
                </div>
            </section>
    </article>
<?php endwhile; ?>
</main>

<?php get_footer();
