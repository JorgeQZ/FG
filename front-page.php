<?php
/**
 * Template Name: Front Page
 *
 */
?>
<?php get_header(); ?>

<?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post();       
            the_content(); 
        endwhile; 
    endif;
 ?>

<div class="home-wrapper">
    <div class="home-social">
        <?php  if ( is_active_sidebar( 'header-social-icons' ) ) : ?>
        <?php dynamic_sidebar( 'header-social-icons' ); ?>
        <?php else: ?>
        <a href="#" target="_blank">
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/icon-facebook.png'?>" alt="">
            </div>
        </a>
        <a href="#" target="_blank">
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/icon-twitter.png'?>" alt="">
            </div>
        </a>
        <a href="#" target="_blank">
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/icon-instagram.png'?>" alt="">
            </div>
        </a>
        <?php endif;?>
    </div>
    <?php if(get_field('pagina_de_productos')):?>
    <div class="title-section">Nuestros Productos</div>
    <div class="sliders-container">
        <div class="slider-tabs">
            <div class="active-bar"></div>
            <div class="owl-carousel owl-theme home-carousel-tabs">
                <?php
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => 5,
                    'post_parent'    => get_field('pagina_de_productos'),
                    'order'          => 'ASC',
                    'orderby'        => 'menu_order'
                );
                $pos = 0;
                $current_pos = 0;
                $parent = new WP_Query( $args );
                if ( $parent->have_posts() ) :
                    while ( $parent->have_posts() ) : $parent->the_post(); 
                    $current_pos++;
                    if($page_ID == get_the_ID()){$pos = $current_pos;}
                    $img_url =  get_field('producto_image', get_the_ID()); 
                ?>
                <div class="item">
                    <img src="<?php echo $img_url?>" alt="">
                    <div class="blop"></div>
                </div>
                <?php 
                 endwhile;
                 wp_reset_postdata(); 
            endif; 
            
            ?>
            </div>
        </div>
        <div class="slider-tabs-content">
            <?php
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => 5,
                'post_parent'    => get_field('pagina_de_productos'),
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );
            $act = 0;
            $parent = new WP_Query( $args );
            if ( $parent->have_posts() ) :
                    while ( $parent->have_posts() ) : $parent->the_post(); 
                    $current_TAX_ID = get_field('marca');
                    $url_ = get_the_permalink();
                    $carousel_prod = array(
                        'post_type'     => 'productos',
                        'post_status'   => 'publish',
                        'post_per_page' => 4,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'marcas',
                                'field' => 'term_id',
                                'terms' => $current_TAX_ID,
                            )
                        )
                    );

                    
                    $act ++;
                    $carousel_query = new WP_Query ($carousel_prod);
                    if ( $carousel_query->have_posts() ):
                     
                        if($act == 1){
                        echo "<div class='tab active'>";
                        }else{
                            echo "<div class='tab'>";
                        }
                        echo "<div class='owl-carousel owl-theme home-carousel'>";
                        while ( $carousel_query->have_posts() ): $carousel_query->the_post();
                        echo "<div class='item '>
                            <a href='".get_the_permalink()."' target='_blank'>
                                <div class='img-container'>
                                    <img src='".get_field('imagen')."' alt=''>
                                </div>
                                <div class='text'>
                                    <div class='title'>
                                       ".get_the_title()."
                                    </div>
                                    <div class='description'>
                                       ".get_the_excerpt()."
                                    </div>
                                </div>
                            </a>
                        </div>";
                        endwhile;
                        echo "</div>";
                        echo '<a href="'.$url_.'">
                                <div class="ver-mas">
                                    ver más
                                </div>
                            </a>';
                        echo "</div>";
                        wp_reset_postdata(); 
                    else: 
                        if($act == 1){
                            echo "<div class='tab active'>";
                            echo '<center>';
                            echo "<div class='owl-carousel owl-theme c-empty'>";
                            
                        }else{
                            echo "<div class='tab'>";
                            echo '<center>';
                            echo "<div class='owl-carousel owl-theme c-empty'>";
                            
                            
                        }  

                        echo '<h1>No hay productos en esta marca</h1>';
                        
                        echo "</div>";
                        echo '</center>';
                        echo "</div>";
                    endif;
                    
                 endwhile;
                 wp_reset_postdata(); 
            endif; 
            
            ?>
        </div>
    </div>
    <?php endif;?>
</div>

<div class="home-wrapper alternate">
    <div class="title-section">Nuestros Lanzamientos</div>

    <!-- --------------------------------------------------------------------GRID------------------------------------------------------------------------------------------------------------------------------------  -->
    <?php 
    $post_args = array(
        'post_per_page' => 5,
        'post_type' => 'post',
        'post_status' => 'publish',
     );
     
     $the_query = new WP_Query($post_args);

    ?>
    <div class="grid-container-desktop">
        <div class="row">
            <?php $the_query->the_post();?>
            <div class="column alternate" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                <div class="title">
                    <?php the_title(); ?>
                </div>
                <div class="description">
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
                <a href="<?php the_permalink();?>">
                    <div class="vermas">
                        Ver más
                    </div>
                </a>
                <div class="cover"></div>
                <div class="cover alternate"></div>

            </div>
            <?php $the_query->the_post();?>
            <div class="column alternate " style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                <div class="title"><?php the_title(); ?></div>
                <div class="description">
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
                <a href="<?php the_permalink();?>">
                    <div class="vermas">
                        Ver más
                    </div>
                </a>

                <div class="cover"></div>
                <div class="cover alternate"></div>

            </div>
        </div>
        <div class="row">
            <div class="column subcolumn-container">
                <?php $the_query->the_post();?>
                <div class="subcolumn alternate"
                    style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="description">
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>">
                        <div class="vermas">
                            Ver más
                        </div>
                    </a>
                    <div class="cover"></div>
                    <div class="cover alternate"></div>
                </div>

                <?php $the_query->the_post();?>
                <div class="subcolumn alternate"
                    style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="description">
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>">
                        <div class="vermas">
                            Ver más
                        </div>
                    </a>
                    <div class="cover"></div>
                    <div class="cover alternate"></div>

                </div>
            </div>
            <?php $the_query->the_post();?>
            <div class="column alternate" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                <div class="title"><?php the_title(); ?></div>
                <div class="description">
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
                <a href="<?php the_permalink();?>">
                    <div class="vermas">
                        Ver más
                    </div>
                </a>
                <div class="cover"></div>
                <div class="cover alternate"></div>

            </div>
        </div>
    </div>
    <?php wp_reset_postdata();  ?>
    <!-- --------------------------------------------------------------------GRID------------------------------------------------------------------------------------------------------------------------------------  -->
    <?php $the_query = new WP_Query($post_args); ?>
    <div class="grid-container-mobile">
        <?php $the_query->the_post();?>
        <div class="item-cell" style="background-image: url(<?php echo  get_the_post_thumbnail_url(); ?>)">
            <a href="<?php the_permalink() ?>" target="_blank">

                <div class="cover"></div>
                <div class="content">
                    <div class="title"><?php short_title();  ?></div>
                </div>
            </a>
        </div>
        <?php $the_query->the_post();?>
        <div class="item-cell" style="background-image: url(<?php echo  get_the_post_thumbnail_url(); ?>)">
            <a href="<?php the_permalink() ?>" target="_blank">
                <div class="cover"></div>
                <div class="content">
                    <div class="title"><?php short_title();  ?></div>
                </div>
            </a>
        </div>
        <?php $the_query->the_post();?>
        <div class="item-cell" style="background-image: url(<?php echo  get_the_post_thumbnail_url(); ?>)">
            <a href="<?php the_permalink() ?>" target="_blank">

                <div class="cover"></div>
                <div class="content">
                    <div class="title"><?php short_title();  ?></div>
                </div>
            </a>
        </div>
        <?php $the_query->the_post();?>
        <div class="item-cell" style="background-image: url(<?php echo  get_the_post_thumbnail_url();?>)">
            <a href="<?php the_permalink() ?>" target="_blank">

                <div class="cover"></div>
                <div class="content">
                    <div class="title"><?php short_title();  ?></div>
                </div>
            </a>
        </div>
        <?php $the_query->the_post();?>
        <div class="item-cell" style="background-image: url(<?php echo  get_the_post_thumbnail_url(); ?>)">
            <div class="cover"></div>
            <div class="content">
                <h2>¡Nuevos lanzamientos!</h2>
                <h2> <?php short_title(); ?></h2>

                <div class="desc">
                    <?php the_excerpt(); ?>
                </div>

                <a href="<?php the_permalink() ?>" target="_blank">

                    <div class="vermas">
                        Ver más
                    </div>
                </a>
                <div class="img-container">
                    <img src="<?php echo get_field('imagen_para_movil'); ?>" alt="" class="main-img-blog">
                </div>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata();  ?>

    <?php $group = get_field('forma_de_contacto');?>
    <?php if($group) :?>
    <div class="contact-container">
        <?php if($group['contacto_shortcode']) : ?>
        <div class="column">
            <div class="form">
                <?php echo $group['contacto_shortcode']?>
            </div>
        </div>
        <?php endif; ?>

        <?php if($group['google_map_iframe']) : ?>
        <div class="column">
            <?php echo $group['google_map_iframe']?>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<script>
$('.home-carousel').owlCarousel({
    loop: false,
    dots: false,
    smartSpeed: 450,
    margin: 10,

    responsive: {
        0: {
            nav: true,
            items: 1
        },
        990: {
            nav: false,
            items: 4
        }
    }
});

$('.c-empty').owlCarousel({
    loop: false,
    dots: false,
    margin: 10,
    items: 1
});


$('.home-carousel-tabs').owlCarousel({
    loop: false,
    dots: false,
    smartSpeed: 450,
    margin: 10,
    responsive: {
        0: {
            dots: true,
            items: 1
        },
        990: {
            dots: false,
            items: 5,
            margin: 0
        }
    }
});
</script>
<?php get_footer(); ?>