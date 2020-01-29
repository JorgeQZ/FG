<?php get_header(); ?>

<div class="wrapper-content">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post();       
            the_content(); 
        endwhile; 
    endif;
    ?>
    <?php echo get_field('imagen')?>


</div>

<?php get_footer(); ?>