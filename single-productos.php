<?php 
$terms = get_the_terms( get_the_ID(), 'marcas' );
?>
<?php get_header(); ?>

<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-tit">
        <?php echo $terms[0]->name;?>
    </div>
</div>

<div class="wrapper-content">
    <div class="grid">
        <div class="column">
            <h1><?php echo get_the_title(); ?></h1>
            <img src=" <?php echo get_field('imagen')?>" alt="">
        </div>
        <div class="column">
            <?php echo get_field('descripcion')?>
        </div>
    </div>

    <div class="contenido">
        <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post();       
            the_content(); 
        endwhile; 
    endif;
    ?>
    </div>
</div>

<?php get_footer(); ?>