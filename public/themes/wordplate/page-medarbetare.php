<?php get_header(); ?>

<main role="main">
    <div class="coworker-hero">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/medarbetare.png" ?>" alt="Coworker landing page" loading="lazy">
        <p>Medarbetare</p>
    </div>
    <div class="breadcrumbs">
        <a href="/">
            <span class="breadcrumb-faded">HEM</span>
        </a>
        >
        <a href="/omoss">
            <span class="breadcrumb-faded">KONTAKT</span>
        </a>
        >
        <a href="/historia">
            <span class="breadcrumb-active">MEDARBETARE</span>
        </a>
        <p>Vi är tre personer idag som sitter i <br>ledningsgruppen och tio in-house aktörer som <br>verkar i Gathenhielmska huset.</p>
    </div>
    <div class="coworker-managment" style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/coworkers.png" ?>)">
        <h5>LEDNINGSGRUPPEN</h5>
        <hr>
        <div class="coworker-isabel">
            <div class="isabel-mail">
                <h6>ISABEL LAGOS</h6>
                <a href="#">
                    <p>isabel@historieverket.se</p>
                </a>
            </div>
            <div class="isabel-phone">
                <p>Projektledare & <br>Konstnärlig ledare</p>
                <a href="#">
                    <p>0769-21 11 07</p>
                </a>
            </div>
        </div>
        <div class="coworker-joel">
            <div class="joel-mail">
                <h6>JOEL HEIRÅS</h6>
                <a href="">
                    <p>joe.heiras@gmail.com</p>
                </a>
            </div>
            <div class="joel-phone">
                <p>Producent & <br>samordnare</p>
                <a href="">
                    <p>0760-98 38 32</p>
                </a>
            </div>
        </div>
        <div class="coworker-david">
            <div class="david-mail">
                <h6>DAVID SPERLING <br>BOLANDER</h6>
                <a href="#">
                    <p>sperlingbolander@<br>gmail.com</p>
                </a>
            </div>
            <div class="david-phone">
                <p>Projektledare</p>
                <a href="#">
                    <p>0707-30 51 34</p>
                </a>
            </div>
        </div>
        <h5>IN-HOUSE AKTÖRER</h5>
        <hr>
        <div class="coworker-inhouse">
            <div class="coworker-group-1">
                <div class="coworker-1">
                    <h6>PATRICIO GALVEZ</h6>
                    <p>Gyttja Interculture<br> producent</p>
                </div>
                <div class="coworker-2">
                    <h6>EMMA EKDALA/<br>EMMA VENDELEK</h6>
                    <p>Samtalsterapi</p>
                </div>
            </div>
            <div class="coworker-group-2">
                <div class="coworker-3">
                    <h6>CASTINGVERKET</h6>
                    <p>Filmcasting</p>
                </div>
                <div class="coworker-4">
                    <h6>MATTIAS GUNNARSSON</h6>
                    <p>Design/arkitektur/konst</p>
                </div>
            </div>
            <div class="coworker-group-3">
                <div class="coworker-5">
                    <h6>REOSTAT MEDIA</h6>
                    <p>Podcast</p>
                </div>
                <div class="coworker-6">
                    <h6>DOMA/DOMA/DOMA<br>/土間</h6>
                    <p>Design</p>
                </div>
            </div>
            <div class="coworker-group-4">
                <div class="coworker-7">
                    <h6>Folkstaden</h6>
                    <p>Arkitektur</p>
                </div>
                <div class="coworker-8">
                    <h6>JOHN DOHLSTEN</h6>
                    <p>Musik</p>
                </div>
            </div>
            <div class="coworker-group-5">
                <div class="coworker-9">
                    <h6>TEATER TOFTA</h6>
                    <p>Teater</p>
                </div>
                <div class="coworker-10">
                    <h6>HANNA NORRNA</h6>
                    <p>Textil/vävstol</p>
                </div>
            </div>
        </div>
        <div class="coworker-directions">
            <h5>HITTA HIT</h5>
            <hr>
            <div class="coworker-parking">
                <h6>PARKERING</h6>
                <p>Närmaste <br>parkeringsmöjligheter<br> finns utanför huset på<br>Stigbergstorget.</p>
            </div>
            <div class="coworker-streetcar">
                <h6>HÅLLPLATS</h6>
                <p>Stigbergstorget</p>
            </div>
            <div class="coworker-address">
                <h6>ADRESS</h6>
                <p>Stigbergstorget 7<br> 414 63 Göteborg</p>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
