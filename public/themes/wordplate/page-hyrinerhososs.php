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
        <p class="rent__content-title">IN-HOUSE AKTÖRER</p>
        <div class="rent__text">

            <div class="rent__text-col">
                <div>
                    <span class="rent__text-bold">PATRICIO GALVEZ</span>
                    <p>Gyttja Interculture<br>producent</p>
                </div>
                <div>
                    <span class="rent__text-bold">CASTINGVERKET</span>
                    <p>Filmcasting</p>
                </div>
                <div>
                    <span class="rent__text-bold">REOSTAT MEDIA</span>
                    <p>Podcast</p>
                </div>
                <div>
                    <span class="rent__text-bold">FOLKSTADEN</span>
                    <p>Arkitektur</p>
                </div>
                <div>
                    <span class="rent__text-bold">TEATER TOFTA</span>
                    <p>Teater</p>
                </div>
            </div>
            <div class="rent__text-col">
                <div>
                    <span class="rent__text-bold">EMMA EKDALA/<br>EMMA VENDELEK</span>
                    <p>Samtalsterapi</p>
                </div>
                <div>
                    <span class="rent__text-bold">MATTIAS GUNNARSSON</span>
                    <p>Design/arkitektur/konst</p>
                </div>
                <div>
                    <span class="rent__text-bold">DOMA / DOMA / DOMA<br>/ 土間</span>
                    <p>Design</p>
                </div>
                <div>
                    <span class="rent__text-bold">JOHN DOHLSTEN</span>
                    <p>Musik</p>
                </div>
                <div>
                    <span class="rent__text-bold">HANNA NORRNA</span>
                    <p>Textil/vävstol</p>
                </div>
            </div>
        </div>
    </section>
    <div class="rent__end-text">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/Rent-Large-Img.png" ?>" alt="Trappa i huset" loading="lazy">
        <p>Har du frågor? Tveka inte utan <br>hör av dig, antingen via <span>telefon</span><br>eller <span>mail.</span></p>
    </div>
</main>

<?php get_footer(); ?>
