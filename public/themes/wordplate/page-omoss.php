<?php get_header(); ?>

<main role="main" class="about">
    <div class="about__title-box">
        <img class="about__title-box-img" src="<?php echo get_template_directory_uri() . "/assets/images/About-Title.png" ?>" alt="Skylt på husets utsida" loading="lazy">
        <p class="about__title-box-title">
            Om oss
        </p>
    </div>
    <div class="about__breadcrumbs">
        <a href="/">
            <span class="breadcrumb-faded">HEM</span>
        </a>
        >
        <a href="/omoss">
            <span class="breadcrumb-active">OM OSS</span>
        </a>
    </div>
    <div class="about__page-info">
        Nyfiken på varför huset byggdes, eller funderar
        <br>på vilka vi är som håller till i huset? Läs om det i
        <br>våra underkategorier här nedanför.
    </div>
    <section class="about__content">
        <div class="card__wrapper">
            <a class="card__inner-wrapper" href="/historia">
                <img class="card__img" src="<?php echo get_template_directory_uri() . "/assets/images/About-History.png" ?>" alt="Gathenhielmska husets fasad" loading="lazy">
                <div class="card__label">HISTORIA</div>
            </a>
        </div>
        <div class="card__wrapper">
            <a class="card__inner-wrapper" href="/verksamhet">
                <img class="card__img" src="<?php echo get_template_directory_uri() . "/assets/images/About-Operations.png" ?>" alt="Tapet i huset" loading="lazy">
                <div class="card__label">VERKSAMHETEN</div>
            </a>
        </div>
    </section>
    <div class="about__end-text">
        <p>
            Vill du vara en del av våran verksamhet som arrangör, utövare eller vill du kanske hyra ett av våra fantastiska rum för din verksamhet?
        </p>
        <button>LÄS MER</button>
    </div>
</main>

<?php get_footer(); ?>
