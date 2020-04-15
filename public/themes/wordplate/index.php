<?php get_header(); ?>

<main role="main">
    <section class="index-wrapper">
        <div class="index-hero">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/landingpage.png" ?>" alt="Landing page image" loading="lazy">
            <h3>Gathenhielmska huset
                <br>
                - En kulturarena på stigbergstorget.</h3>
            <h5>Att levandegöra vårt kulturarv genom konsten, en grundtanke med verksamheten i Gathenhielmska</h5>
        </div>
        <div class="index-comming">
            <p class="index-comming-events">KOMMANDE EVENEMANG</p>
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
            <img src="<?php echo get_template_directory_uri() . "/assets/images/video.png" ?>" alt="" loading="lazy">
            <p>FILM AV: PATRIK JANSON</p>
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
        <div class="index-quote">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/quoteimage.png" ?>" alt="Quote image" loading="lazy">
            <div class="index-quote-text">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/quote.svg" ?>" alt="Quote sign" loading="lazy">
                <p>Vi sätter platsen, artisten och <br>besökarna i centrum för <br>Stigbergstorgets framtida <br>utveckling.</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
