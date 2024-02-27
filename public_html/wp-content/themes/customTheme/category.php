<?php
get_header();
?>

<div class="containertesto paginadimerda">
    <?php
    $current_category = get_queried_object();

    ?>
    <div class="d-flex align-items-center justify-content-center mb-5" style="text-align: left; margin-left:5rem;margin-right:5rem;">
        <img src="<?php echo z_taxonomy_image_url($current_category->term_id); ?>" alt="immaginelollina" style="border-radius: 0rem 15rem 0rem 0rem; margin-right:2rem;width:35rem;">
        <div>
            <p style="font-family: 'Playfair Display', serif;font-size:3rem">Benvenuti a</p>
            <p class="category-title pisolatitolo" style="font-family: 'Playfair Display', serif;font-size:5rem;">
                <?php echo esc_html($current_category->name); ?>
            </p>
            <p style="font-size:1.5rem">
                <?php echo $current_category->description; ?>
            </p>

            <!-- <?php if (function_exists('z_taxonomy_image'))
                        z_taxonomy_image(); ?> -->
        </div>

    </div>
    <?php
    $current_category_id = $current_category->term_id;

    $tags = get_tags(
        array(
            'hide_empty' => false
        )
    );

    foreach ($tags as $tag) {
        $args = array(
            'tag__in' => array($tag->term_id),
            'category__in' => array($current_category_id),
            'posts_per_page' => -1
        );
        $related_posts_query = new WP_Query($args);

        if ($related_posts_query->have_posts()) :
    ?>
            <div class="child-category-container" style="margin-left:5rem;margin-right:5rem;">
                <a class="d-flex text-decoration-none align-items-center" href="<?php echo get_tag_link($tag->term_id); ?>">
                    <i class="bi bi-bookmark-fill text-secondary me-1"></i>
                    <h2 class="text-secondary mb-1" style="font-size:2.5rem;">
                        <?php echo esc_html($tag->name); ?>
                    </h2>
                </a>

                <?php while ($related_posts_query->have_posts()) :
                    $related_posts_query->the_post(); ?>
                    <div class="d-block d-md-flex my-5 align-items-center" style="background-color: white;border-radius:0rem 6rem;">
                        <div style="height: 25rem; width: 40rem;">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php the_title(); ?>" style="height: 25rem; width:40rem;border-radius:0rem 0rem 0rem 6rem;">
                            <?php endif; ?>
                            
                        </div> 
                        <div class="text-left paragrafostrano px-4">
                                <h5 style="font-size: 2.5rem;font-family: 'Playfair Display', serif;">
                                    <?php the_title(); ?>
                                </h5>
                                
                                    <?php the_excerpt(); ?>
                                
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary">Leggi di più</a>
                            </div>
                    </div>
                <?php endwhile; ?>

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