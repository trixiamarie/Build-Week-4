<!-- PERCHE' FRONT-PAGE?  legga=> https://wordpress.stackexchange.com/questions/110981/what-is-the-difference-between-front-page-php-and-home-php -->
<?php get_header(); ?>

<div class="container homePage">

    <video class="videoHeader" playsinline="" loop="" autoplay="" muted="" preload="none"
        poster="https://www.bahamas.com/assets/images/home-video-poster.jpg">
        <source
            src="https://tempo.cdn.tambourine.com/windsong/media/bmot-website-homepage-header-desktop-658dd8a691a47.mp4"
            type="video/mp4; codecs=&quot;avc1.4D401E, mp4a.40.2&quot;">
    </video>

    <h1>
        <?php bloginfo('description'); ?>
    </h1>

    <div class="my-5">

        <div class="card mb-3 cardWithP border-0 bg-transparent">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body">
                        <p class="card-text homepageP">Il segreto meglio custodito delle Bahamas è la vastità e la
                            diversità del paese. Con 16 isole principali, le Bahamas sono una destinazione senza eguali,
                            un'avventura mozzafiato attraverso 100.000 miglia quadrate dell'oceano più limpido del
                            mondo.</p>
                    </div>
                </div>
                <div class="col-md-6" style="height: 250px;">
                    <img class="img-fluid rounded-start"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/motorino.jpg" />
                </div>
            </div>
        </div>

        <div class="card text-bg-dark imgHomePage mb-3">
            <img class="object-fit-cover"
                src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/indigeni-felici.jpg""
                class=" card-img h-100" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title fs-1 w-50 mt-5">VERO SPIRITO DELLE BAHAMAS</h5>
                <p class="card-text fs-3 w-50">Niente riflette la cultura delle Bahamas come la nostra gente: calda,
                    ospitale e sempre pronta con un sorriso, una storia, un momento per condividere il nostro amore per
                    le nostre isole </p>
                <p class="card-text fs-3 w-50"> Con un sorriso sempre pronto e un calore genuino, i bahamiani accolgono
                    i visitatori con un'ospitalità contagiosa, rendendo ogni incontro un'esperienza indimenticabile.
                </p>
            </div>
        </div>

        <div class="card mb-3 cardWithP w-100">
            <div class="row g-0">
                <div class="col-md-6">
                    <img class="object-fit-cover rounded-start h-100"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/barchettina.jpg" />
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card imgHomePage mb-3 row">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/lavitaloro.jpg"
                class="card-img w-50 col-6" alt="...">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/lavitaloroagua.jpg"
                class="card-img w-50 col-6" alt="...">
                <div class="card-img-overlay">
                <p class="card-text fs-3 w-50">Niente riflette la cultura delle Bahamas come la nostra gente: calda,
                    ospitale e sempre pronta con un sorriso, una storia, un momento per condividere il nostro amore per
                    le nostre isole 
                </p>
            </div>
        </div>

        <div class="card mb-3 cardWithP">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-6 h-100">
                    <img class="img-fluid rounded-start"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/fiorellino.png">
                </div>
            </div>
        </div>

        <div class="card imgHomePage mb-3 pb-2">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/agua.jpg">
            <div class="card-img-overlay d-flex justify-content-between">
                <?php get_template_part('template-parts/bahamasMap'); ?>
                <p class="card-text w-25">Arrivare alle Isole Bahamas è semplicissimo. L’arcipelago è comodamente
                    raggiungibile via mare o in aereo. Le Isole Bahamas accolgono visitatori in arrivo su voli
                    commerciali o charter, in traghetto, con navi da crociera, con velivoli privati o imbarcazioni da
                    diporto.
                </p>
            </div>
        </div>

    </div>

</div>

<?php get_footer(); // hook di WP per elaborare ed includere il file footer.php       ?>