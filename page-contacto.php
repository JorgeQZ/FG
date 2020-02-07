<?php
/**
 * Template Name: Contacto
 *
 */
?>
<?php get_header(); ?>

<div class="wrapper-page-content">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post();       
            the_content(); 
        endwhile; 
    endif;
 ?>
</div>

<div class="contacto-wrapper">
    <?php $group = get_field('forma_de_contacto');?>
    <?php if($group): ?>
    <div class="contact-container">
        <?php if($group['contacto_shortcode']): ?>
        <div class="column">
            <div class="form">
                <?php echo $group['contacto_shortcode'];?>
            </div>
            <?php if($group['sub_texto']): ?>
            <div class="sub-text">
                <?php if($group['sub_texto']['columna_1']): ?>
                <div class="column">
                    <?php echo $group['sub_texto']['columna_1']; ?>
                </div>
                <?php endif; ?>

                <?php if($group['sub_texto']['columna_2']): ?>
                <div class="column">
                    <?php echo $group['sub_texto']['columna_2']; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if($group['google_map_iframe']): ?>

        <div class="column">
            <?php echo $group['google_map_iframe']; ?>
        </div>
        <?php endif; ?>

    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>