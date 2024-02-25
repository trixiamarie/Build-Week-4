<?php
/*
Template Name: Elenco Categorie Genitore
*/
get_header();
?>

<div class="containertesto paginadimerda">
    <div class="row">
        <?php
        // Ottenere tutte le categorie genitore
        $args = array(
            'parent' => 0 // Restituisce solo le categorie genitore
        );
        $categorie_genitore = get_categories($args);

        // Iterare attraverso le categorie genitore
        foreach ($categorie_genitore as $categoria) {
            // Ottenere l'ID dell'immagine associata alla categoria genitore
            $thumbnail_id = get_term_meta($categoria->term_id, 'thumbnail_id', true);
            // Ottenere l'URL dell'immagine
            $thumbnail_url = $thumbnail_id ? wp_get_attachment_image_src($thumbnail_id, 'thumbnail')[0] : '';

            ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(); ?>" class="card-img-top" alt="Immagine categoria">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $categoria->name; ?></h5>
                        <p class="card-text"><?php echo $categoria->description; ?></p>
                        <a href="<?php echo get_category_link($categoria->term_id); ?>" class="btn btn-primary">Visualizza post</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php
get_footer();
?>
