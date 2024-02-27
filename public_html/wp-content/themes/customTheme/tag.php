<?php
get_header();
?>

<div class="containertesto paginadimerda">
    <?php
    $current_tag = get_queried_object();

    ?>
    <div class="d-flex align-items-center justify-content-center mb-5" style="text-align: left;">
        <!-- <img src="<?php echo z_taxonomy_image_url($current_category->term_id); ?>" alt="immaginelollina" style="border-radius: 0rem 15rem; margin-right:2rem;width:35rem;"> -->
        <div>
            <!--  <p style="font-family: 'Playfair Display', serif;font-size:3rem">Benvenuti a</p> -->
            <p class="category-title pisolatitolo" style="font-family: 'Playfair Display', serif;font-size:5rem;">
                <?php echo esc_html($current_tag->name); ?>
            </p>
            <!--   <p style="font-size:1.5rem"><?php echo $current_category->description; ?></p> -->

            <!-- <?php if (function_exists('z_taxonomy_image'))
                z_taxonomy_image(); ?> -->
        </div>

    </div>
    <?php
    $current_tag_id = $current_tag->term_id;

    $categories = get_categories(
        array(
            'hide_empty' => false,
            'parent' => 0
        )
    );

    foreach ($categories as $category) {
        $args = array(
            'category__in' => array($category->term_id),
            'tag__in' => array($current_tag_id),
            'posts_per_page' => -1
        );
        $related_posts_query = new WP_Query($args);

        if ($related_posts_query->have_posts()):
            ?>
            <div class="child-category-container">
                <a class="d-flex align-items-end text-decoration-none text-secondary-emphasis"
                    href="<?php echo get_category_link($category->term_id); ?>">
                    <div class="rounded-circle me-2" style="overflow:hidden; height:3rem; width:3rem;">
                        <img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class=" img-fluid"
                            alt="Immagine categoria">
                    </div>
                    <h2 class="mb-1">
                        <?php echo esc_html($category->name); ?>
                    </h2>


                </a>
                <div class="row">
                    <!--  <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">

                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> -->
                    <div id="ciao" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active d-flex">
                             
                         

                    <?php while ($related_posts_query->have_posts()):
                        $related_posts_query->the_post(); ?>

                        <div class="card"
                            style="width: 35rem; border-radius: 10rem 0rem; border: none; transition: transform 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.1)'; this.nextElementSibling.style.display = 'inline-block'"
                            onmouseout="this.style.transform='scale(1)'; this.nextElementSibling.style.display = 'none'">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>"
                                    style="height:20rem;width:35rem;border-radius:10rem 0rem 0rem 0rem;">
                            <?php endif; ?>
                            <div class="card-body" style="height: 14rem;overflow:hidden;">
                                <h5 class="card-title">
                                    <?php the_title(); ?>
                                </h5>
                                <p class="paragrafostrano" style="position:absolute; top:10px; left:10px;">
                                    <?php the_excerpt(); ?>
                                </p>
                                <a style="position: absolute;top: 240px;left: 40%;" href="<?php the_permalink(); ?>"
                                    class="btn btn-primary">Leggi di più</a>
                            </div>
                        </div>
   </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#ciao" data-bs-slide="prev" onclick="scrolla(-1,)">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#ciao" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php
        endif;
        wp_reset_query();
    }
    ?>
</div>

<?php
get_footer();
?>