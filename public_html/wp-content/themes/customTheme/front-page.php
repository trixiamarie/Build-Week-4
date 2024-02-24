<!-- PERCHE' FRONT-PAGE?  legga=> https://wordpress.stackexchange.com/questions/110981/what-is-the-difference-between-front-page-php-and-home-php -->
<?php get_header(); ?>

<div class="container container-fluid homePage">
  <!-- <h1 id="nomeSito">
    <?php bloginfo('name'); ?> </br><span><?php bloginfo('description'); ?></span>
  </h1> -->
  <!-- <h2 id="mottoSito"><?php bloginfo('description'); ?></h2> -->
  <video class="videoHeader" playsinline="" loop="" autoplay="" muted="" preload="none" poster="https://www.bahamas.com/assets/images/home-video-poster.jpg">
    <source src="https://tempo.cdn.tambourine.com/windsong/media/bmot-website-homepage-header-desktop-658dd8a691a47.mp4" type="video/mp4; codecs=&quot;avc1.4D401E, mp4a.40.2&quot;">
  </video>



  <div class="containertesto my-5">

    <div class="card mb-3 cardWithP border-0 bg-transparent">

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
          <div class="hover">
            <p class="freccia2" style="font-size: 1.5rem;">Nuota con i famosi </br><span> maiali nuotatori!</span></p>
            <svg class="freccia" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 75.4 25.3" style="enable-background:new 0 0 75.4 25.3;" xml:space="preserve">
              <path class="st0" d="M72.6,23.5c1.5,1-3.6-5-3.2-8.8c1.6,4.5,3.1,6,6,10.6c-4.7,0-9.3,0-14,0"></path>
              <path class="st1" d="M16.2,0.5c18.5,2,27.9,5.7,47.5,17.8C45.7,9.3,31.3,0,0,0.5C1-0.6,16.2,0.5,16.2,0.5z"></path>
            </svg>
          </div>
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

    <div class="bg-transparent d-flex">
      <img class="imgHome" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/casette-sostenibili.jpg" />
      <div>
        <h5 class="fs-2">LUSSUOSI ALLOGGI CHE AMANO L'AMBIENTE</h5>
        <p class="fs-4">Ogni dettaglio è curato con precisione per offrire un'esperienza di soggiorno
          indimenticabile: dalle suite private con terrazze panoramiche alle ville esclusive eco-sostenibili. Con un
          servizio impeccabile e una cornice naturale incomparabile, gli alloggi alle Bahamas trasformano ogni
          momento in un'opportunità per ritrovare la pace.</p>
      </div>
    </div>

    <div class="bg-transparent d-flex">
     
      <div>
        <h5 class="fs-2">VERO SPIRITO DELLE BAHAMAS</h5>
        <p class="fs-4">I locali alle Bahamas sono maestri del relax, accogliendoti sempre con un sorriso e un caloroso "Hello, mon!" genuino come una pubblicità di dentifricio. Vivono nell'eterno "island time", dove le lancette dell'orologio sembrano rallentare. Il concetto di "stress" sembra estraneo a loro, trasmettendo una calma rilassante mentre controlli il saldo bancario prima di ordinare un cocktail a prezzi esorbitanti.</p>
      </div> 
      <img class="imgHome" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/indigeni-felici.jpg" />
    </div>



    <!--     <div class="card text-white mb-3 border-0">
      <div class="row">
        <img class="object-fit-cover col-6"
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/lavitaloro.jpg" class=" card-img h-100"
          alt="...">
        <img class="object-fit-cover col-6 position-relative"
          src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/lavitaloroagua.jpg" class=" card-img h-100"
          alt="...">
          <div class="card-img-overlay w-50 bg-info position-absolute end-0">
        <p class="card-text fs-4 w-100 lavitaloroText bg-danger">Esplorare le Bahamas è un'esperienza unica. Se il tuo portafoglio non risplende
          di opulenza, potresti voler ripensare alla tua destinazione di viaggio. Queste isole incantate, immerse nelle
          acque turchesi dell'oceano, sono un rifugio per coloro che non conoscono il significato della parola "budget".
          Sì, la bellezza è palpabile, ma anche il prezzo. Tuttavia, se hai il saldo del conto in banca giusto,
          preparati a immergerti in un mondo di lusso e tranquillità senza pari. Se invece hai solo monete perdute nel
          divano, forse è meglio considerare alternative più economiche.</p>
      </div>
      </div>
     
    </div> -->


    <!-- <div class="card mb-3 cardWithP">
      <div class="row g-0">
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Nuotare con i maiali alle Bahamas, un'esperienza così unica che potresti
              pensare che il destination managaer abbia fatto troppo affidamento sull'immaginazione durante la
              progettazione
              delle attività turistiche </h5>
            <p class="card-text">Immagina di fare snorkeling con Babe! Sì, hai capito
              bene, stiamo parlando di nuotare con i maiali! È come se la fattoria si trasferisse
              direttamente nell'oceano, con i maiali che si sono diplomati alla scuola di nuoto di Aquaman. Mentre ti
              tuffi nell'acqua turchese, ti accorgi che questi suini acquatici sono più alla moda di te, sfoggiando i
              loro migliori costumi da bagno fatti di pelle grinzosa e con un atteggiamento da divi di Hollywood. E
              mentre ti osservano con sguardo curioso, non puoi fare a meno di pensare che al contrario di te i maiali
              conoscono
              davvero il segreto della felicità: immergersi nelle acque cristalline e prendersela comoda al sole.</p>
          </div>
        </div>
        <div class="col-md-6 h-100">
          <img class="img-fluid rounded-end" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/maialino.jpg">
        </div>
      </div>
    </div> -->

    <div class="card cardMap">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/agua.jpg">
      <?php include get_parent_theme_file_path('template-parts/bahamasMap.php') ?>
    </div>

    <!-- <div class="bg-transparent d-flex">
      <img class="d-none d-md-flex img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/lavitaloro.jpg" />
      <div>
      <img class="img-fluid" style="margin:3.7rem 0rem 0rem 0rem; height: 40.6rem;
    width: 50rem;" src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/lavitaloroagua.jpg" />
      </div>
    </div> -->

  </div>

</div>

<?php get_footer(); // hook di WP per elaborare ed includere il file footer.php           
?>