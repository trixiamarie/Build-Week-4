<?php
/*
Template Name: Elenco Categorie Genitore
*/
get_header();
?>

<div class="containertesto paginadimerda categoryIsole">
    <p class="text-center" style="font-size: 1.5rem;text-align:left;line-height: 5rem;letter-spacing: 2rem;">BENVENUTI ALLE</br><span style="font-family: 'Playfair Display', serif;font-size: 7rem;">BAHAMAS</span></p>
        <?php
        $args = array(
            'parent' => 0 
        );
        $categorie_genitore = get_categories($args);
        foreach ($categorie_genitore as $categoria) {
            if( $categoria->slug=="itinerari" || $categoria->slug=="uncategorized"){
                continue;
            }
            ?>
             <a href="<?php echo get_category_link($categoria->term_id); ?>" class="btn"><div class="col-md-4">
                <div class="card cardIsola" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" style="width:20.061rem;background-color: transparent;
    border: none; margin:1.5rem;transition: transform 0.3s ease;">
                    <img src="<?php echo z_taxonomy_image_url($categoria->term_id); ?>" class="card-img-top img-fluid" alt="Immagine categoria" style="border-radius: 0rem 0rem 6rem 0rem;">
                    <p style="position: absolute;top: 32px;left: 25px;font-size: 3rem;
    font-family: 'Playfair Display', serif;text-align:left;color:white;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><?php echo $categoria->name; ?></p>  
                    <!-- <div class="card-body">
                        <h5 class="card-title"><?php echo $categoria->name; ?></h5>                        
                    </div> -->
                </div>
            </div></a>
            <?php
        }
        ?>
 
</div>

<?php
get_footer();
?>
