<!-- PERCHE' FRONT-PAGE?  legga=> https://wordpress.stackexchange.com/questions/110981/what-is-the-difference-between-front-page-php-and-home-php -->
<?php get_header(); ?>

<div class="container container-fluid homePage">
  <p class="text-center" style="position: absolute;
    font-size: 1.5rem;
    text-align: left;
    line-height: 5rem;
    letter-spacing: 2rem;
    z-index: 2;
    left: 242px;
    top: 712px;
    color: white;">BENVENUTI ALLE</br><span style="font-family: 'Playfair Display', serif;font-size: 7rem;">BAHAMAS</span></p>
  <img class="imgNavbar" style="width:40rem;transform: scaleX(-1);position: absolute;z-index: 2;top: 416px;
    left: -103px;" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/palmebianche.png">
  <!-- <h1 id="nomeSito">
    <?php bloginfo('name'); ?> </br><span><?php bloginfo('description'); ?></span>
  </h1> -->
  <!-- <h2 id="mottoSito"><?php bloginfo('description'); ?></h2> -->
  <video class="videoHeader" playsinline="" loop="" autoplay="" muted="" preload="none" poster="https://www.bahamas.com/assets/images/home-video-poster.jpg" style=" height: 100vh;">
    <source src="https://tempo.cdn.tambourine.com/windsong/media/bmot-website-homepage-header-desktop-658dd8a691a47.mp4" type="video/mp4; codecs=&quot;avc1.4D401E, mp4a.40.2&quot;">
  </video>



  <div class="my-5">

    <div class="containertesto card mb-3 cardWithP border-0 bg-transparent">

      <div class="row g-0 divheigth">
        <div class="col-md-6">
          <div class="card-body">
            <p class="card-text fs-4 homepageP">Vieni a gustare l'eccitante esperienza delle Bahamas: dove il sole cocente ti
              abbraccia come un polipo, le acque cristalline ti accolgono con la gentilezza di uno
              squalo affamato e i resort lussuosi ti faranno sentire come un granchio fuori dall'acqua. Un'opportunità
              per rilassarsi, abbronzarsi e rischiare di diventare l'aperitivo di un'iguana assetata!</p>
          </div>
        </div>

        <div class="col-md-6">
          <a href="?p=127"><div class="hover">
            <p class="freccia2" style="font-size: 1.5rem;">Nuota con i famosi </br><span> maiali nuotatori!</span></p>
            <svg class="freccia" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 75.4 25.3" style="enable-background:new 0 0 75.4 25.3;" xml:space="preserve">
              <path class="st0" d="M72.6,23.5c1.5,1-3.6-5-3.2-8.8c1.6,4.5,3.1,6,6,10.6c-4.7,0-9.3,0-14,0"></path>
              <path class="st1" d="M16.2,0.5c18.5,2,27.9,5.7,47.5,17.8C45.7,9.3,31.3,0,0,0.5C1-0.6,16.2,0.5,16.2,0.5z"></path>
            </svg>
          </div></a>
          <img class="img-fluid rounded-start" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/motorino.jpg" />
        </div>
      </div>
    </div>

    <!-- <div class="card text-white mb-3 rounded">
      <img class="object-fit-cover" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/indigeni-felici.jpg"
                class=" card-img h-100" alt="...">
      <div class="card-img-overlay">
        <h5 class="card-title fs-1 w-50 mt-5">VERO SPIRITO DELLE BAHAMAS</h5>
        <p class="card-text fs-4 w-50">Beh, i locali alle Bahamas sono come dei veri e propri maestri del relax: sempre
          con un sorriso stampato in faccia, pronti a darti il benvenuto con un "Hello, mon!" che suona tanto genuino
          quanto una pubblicità di dentifricio. Sono maestri nell'arte di prendersela comoda, tanto che sembrano vivere
          in un eterno "island time", dove le lancette dell'orologio sembrano avere una vita propria. E sì, potresti
          persino convincerti che la parola "stress" non esista nel loro vocabolario, ma non ti preoccupare, sono abili
          nel trasmetterti una calma rilassante mentre controlli il tuo saldo bancario prima di ordinare un altro
          cocktail a prezzi esorbitanti. </p>
      </div>
    </div> -->

    <div class="containertesto">
      <div class="row align-items-center">
        <div class="col-md-6 bg-transparent d-flex">
          <img class="img-fluid imgHome" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/casette-sostenibili.jpg" alt="Immagine">
        </div>
        <div class="col-md-6">
          <div class="d-flex flex-column justify-content-center">
            <h5 class="fs-2"><img class="imgNavbar" style="width:4rem" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/palme.png">LUSSUOSI ALLOGGI CHE AMANO L'AMBIENTE</h5>
            <p class="fs-4">Ogni dettaglio è curato con precisione per offrire un'esperienza di soggiorno indimenticabile: dalle suite private con terrazze panoramiche alle ville esclusive eco-sostenibili. Con un servizio impeccabile e una cornice naturale incomparabile, gli alloggi alle Bahamas trasformano ogni momento in un'opportunità per ritrovare la pace.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="containertesto">
      <div class="row align-items-center">
        <div class="col-md-6 bg-transparent d-flex">
          <div class="d-flex flex-column justify-content-center text-center">
            <h5 class="fs-2"><img class="imgNavbar" style="width:4rem" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/palme.png">VERO SPIRITO DELLE BAHAMAS</h5>
            <p class="fs-4">I locali alle Bahamas sono maestri del relax, accogliendoti sempre con un sorriso e un caloroso "Hello, mon!" genuino come una pubblicità di dentifricio. Vivono nell'eterno "island time", dove le lancette dell'orologio sembrano rallentare. Il concetto di "stress" sembra estraneo a loro, trasmettendo una calma rilassante mentre controlli il saldo bancario prima di ordinare un cocktail a prezzi esorbitanti.</p>
          </div>
        </div>
        <div class="col-md-6">
          <img class="img-fluid imgHome" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/indigeni-felici.jpg" alt="Immagine">
        </div>
      </div>
    </div>

    <div class="text-center" style="height: 35rem;background-color:white;position:relative;">

    <video class="videoHeader" playsinline="" loop="" autoplay="" muted="" preload="none" poster="https://www.bahamas.com/assets/images/home-video-poster.jpg" style=" height: 100vh;">
    <source src="https://e291f1206726d700191b-d0cedd1cc05016668dc83bc2742129e5.ssl.cf1.rackcdn.com/windsong/media/bahamas-bimini-dolphinswim-desktop-header-62ce29176479b.mp4" type="video/mp4; codecs=&quot;avc1.4D401E, mp4a.40.2&quot;">
  </video>
    <div style="position: absolute;
    z-index: 2;
    top: 12%;
    left: 34%;
    color: #333;
    padding: 2rem;
    background-color: #f8f9fa85;
    border-radius: 0rem 6rem;">
      <p style="font-size: 3rem;font-family: 'Playfair Display', serif;">PRONTO A PARTIRE?</p>
      <p style="font-size:1.5rem;margin:0rem;"> <span>Consulta il nostro</span></p><a class="titolodelcazzo" style="text-decoration: none;color:#333;padding:0.5rem;" href="?p=1629">
      <?php

      $post_id = 1629;
      $post = get_post($post_id);
      if ($post && $post->post_type == 'post') {
        echo '<h2>' . esc_html($post->post_title) . '</h2>';
      }
      ?></a>
      <p>Ogni settimana cambiamo destinazione!</p>
      </div>

    </div>


    <div>
      <div class="row align-items-center" style="position: relative;">
        <div class="col-md-12" >
          <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/compasso.png" style="        position: absolute;
    top: 60px;
    height: 16rem;
    left: 768px;
    z-index: 2;" alt="Immagine">
          <div class="card cardMap text-center" style="border:none;height:40rem;margin:auto; background: rgb(0,133,190);
background: linear-gradient(90deg, rgba(0,133,190,1) 0%, rgba(0,188,233,1) 38%);">
            <?php include get_parent_theme_file_path('template-parts/bahamasMap.php') ?>
          </div>
        </div>
        <div class="bg-transparent d-flex">
          <div class="d-flex flex-column justify-content-center text-center" style="position: absolute;
    width: 31rem;
    top: 150px;
    left: 1139px;
    color: #333;
    z-index: 2;
    padding: 1rem;
    background-color: white;
    border-radius: 0rem 6rem;">
            <h5 class="fs-2">L'EDEN DEI CARAIBI</h5>
            <p class="fs-4">Esplora le meravigliose isole Bahamas, un paradiso tropicale baciato dal sole e bagnato dalle acque cristalline dell'oceano. Spiagge di sabbia bianca, palme ondeggianti e una ricca vita marina ti aspettano in questo arcipelago incantato!
              </br>Clicca sulla mappa!
            </p>
          </div>
        </div>

      </div>
    </div>


  </div>

</div>

<?php get_footer(); // hook di WP per elaborare ed includere il file footer.php           
?>