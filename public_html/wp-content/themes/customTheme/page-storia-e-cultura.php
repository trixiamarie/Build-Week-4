<?php get_header(); ?>




<div class="paginadimerda storia fs-4 ">

<p  class="text-center container testo" style="font-size:7rem;font-family: 'Playfair Display', serif;">LA NOSTRA STORIA</p>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part("template-parts/content", "page");
        }
    }



    ?>
</div>

<?php get_footer(); ?>