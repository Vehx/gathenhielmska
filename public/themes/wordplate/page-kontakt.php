<?php get_header(); ?>

<main role="main" class="contact">
    <div class="contact__title-box">
        <img class="contact__title-box-img" src="<?php echo get_template_directory_uri() . "/assets/images/Contact-Title.png" ?>" alt="Skylt på husets utsida" loading="lazy">
        <p class="contact__title-box-title">
            Kontakt
        </p>
    </div>
    <div class="contact__breadcrumbs">
        <a href="/">
            <span class="breadcrumb-faded">HEM</span>
        </a>
        >
        <a href="/kontakt">
            <span class="breadcrumb-active">KONTAKT</span>
        </a>
    </div>
    <div class="contact__page-info">
        Här kan du läsa om vilka som verkar i huset och
        <br>om hur du kan komma bli en av dem. Både hur
        <br>man hyr en del av huset för evenemang eller
        <br>under en längre tid för sin verksamhet.
    </div>
    <section class="contact__content">
        <a class="card__wrapper" href="/medarbetare">
            <div class="card__label">MEDARBETARE</div>
            <img class="card__img" src="<?php echo get_template_directory_uri() . "/assets/images/Contact-Coworkers.png" ?>" alt="Gathenhielmska husets fasad" loading="lazy">
        </a>
        <a class="card__wrapper" href="/arrangeraevenemang">
            <div class="card__label">ARRANGERA <br>EVENEMANG</div>
            <img class="card__img" src="<?php echo get_template_directory_uri() . "/assets/images/Contact-Arrange.png" ?>" alt="Tapet i huset" loading="lazy">
        </a>
        <a class="card__wrapper" href="/hyrinerhososs">
            <div class="card__label">HYR IN ER <br>HOS OSS</div>
            <img class="card__img" src="<?php echo get_template_directory_uri() . "/assets/images/Contact-Rent.png" ?>" alt="Tapet i huset" loading="lazy">
        </a>
    </section>
    <div class="contact__end-text">
        <p>
            Vill du vara en del av våran verksamhet som arrangör, utövare eller vill du kanske hyra ett av våra fantastiska rum för din verksamhet?
        </p>
        <a href="/">LÄS MER</a>
    </div>
</main>

<?php get_footer(); ?>
