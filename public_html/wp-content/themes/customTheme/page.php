<?php get_header(); ?>




<div class="containertesto paginadimerda fs-4">

<?php if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part("template-parts/content","page");
    }
}



?>
</div>

<?php get_footer(); ?>