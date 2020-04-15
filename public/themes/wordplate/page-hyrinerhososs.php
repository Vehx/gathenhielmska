<?php get_header(); ?>

<main role="main" class="rent">
    <div class="rent__title-box">
        <img class="rent__title-box-img" src="<?php echo get_template_directory_uri() . "/assets/images/Rent-Title.png" ?>" alt="Trappa i huset" loading="lazy">
        <p class="rent__title-box-title">
            Hyr in er hos oss
        </p>
    </div>
    <div class="rent__breadcrumbs">
        <a href="/">
            <span class="breadcrumb-faded">HEM</span>
        </a>
        >
        <a href="/kontakt">
            <span class="breadcrumb-active">KONTAKT</span>
        </a>
        >
        <a href="/hyrinerhososs">
            <span class="breadcrumb-active">HYR IN ER HOS OSS</span>
        </a>
    </div>
    <div class="rent__page-info">
        I huset verkar just nu tio olika företag. Än finns
        <br>det plats för fler!
    </div>
    <div class="rent__intro-text">
        <span class="rent__capital"></span>
        <p>
            Möjlighet finns generellt att
            <br>tillfälligt hyra in sig för att
            <br>arbeta i huset, under en dag,
            <br>lite då och då eller under
            <br>kortare perioder. Maila eller
            <br>ring vid intresse!
        </p>
        <div>
            <img src="<?php echo get_template_directory_uri() . "/assets/images/mail.svg" ?>" alt="Mail ikon" loading="lazy">
            <p>gathenhielmskabokning@gmail.com</p>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri() . "/assets/images/phone.svg" ?>" alt="Telefon ikon" loading="lazy">
            <p>0760-98 38 32</p>
        </div>
    </div>
    <section class="rent__content">
        <p>IN-HOUSE AKTÖRER</p>
        <div class="rent__text">

            <div>
                Patricio Galvez  Gyttja Interculture  producent Castingverket  Filmcasting Reostat Media  Podcast Folkstaden  Arkitektur Teater Tofta  Teater
            </div>
            <div>
                Emma Ekdala/ Emma Vendelek  Samtalsterapi Mattias Gunnarsson  Design/arkitektur/konst Doma / doma / DOMA / 土間 Design John Dohlsten  Musik Hanna Norrna  Textil/vävstol
            </div>
        </div>
    </section>
    <div class="rent__end-text">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/Rent-Large-Img.png" ?>" alt="Trappa i huset" loading="lazy">
        <p>Har du frågor? Tveka inte utan <br>hör av dig, antingen via <span>telefon</span><br>eller <span>mail.</span></p>
    </div>
</main>

<?php get_footer(); ?>
