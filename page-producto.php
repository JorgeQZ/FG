<?php
/**
 * Template Name: Producto
 *
 */
global $wp_query;
$paged = (get_query_var('paged')) ? absint( get_query_var('paged')) : 1;
$showitems = 3;
$parent_ID = $post->post_parent;
$page_ID = get_the_ID();

$featured_img = get_the_post_thumbnail_url();

if(!$featured_img){
    $featured_img = wp_get_attachment_url( get_post_thumbnail_id($parent_ID) );
}
?>
<?php get_header();?>

<div class="banner" style="background-image: url(<?php echo $featured_img; ?>)">
    <div class="banner-tit">
        Nuestros productos
    </div>
</div>

<div class="product-container">
    <div class="sliders-container">
        <div class="slider-tabs">
            <div class="active-bar"></div>
            <div class="owl-carousel owl-theme productos-carousel-tabs">
                <?php
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => 5,
                'post_parent'    => $parent_ID,
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
                    <a href="<?php the_permalink();?>">
                        <img src="<?php echo $img_url?>" alt="">
                    </a>
                    <div class="blop"></div>
                </div>
                <?php 
                 endwhile;
            endif; 
            wp_reset_postdata(); 
            ?>
            </div>
        </div>
        <div class="slider-tabs-content">
            <div class="tab active">
                <div class="info">
                    <p class="tit">
                        <?php the_title(); ?>
                    </p>
                    <div class="desc">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php 
                $taxonomy_ID = get_field('marca');
                $post_args = array(
                    'paged' => $paged, 
                    'post_type' => 'productos',
                    'showposts' => 4,
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'marcas',
                            'field' => 'term_id',
                            'terms' => $taxonomy_ID,
                        )
                    )
                );
                $the_query = new WP_Query($post_args);
                if( $the_query->have_posts() ):
                    while($the_query->have_posts()): $the_query->the_post();
                        ?>
                <div class="item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-1.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                <?php the_title(); ?>
                            </div>
                            <div class="description">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </a>
                </div>

                <?php
                    endwhile;
                    $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
                    $pages = $the_query->max_num_pages;
                    ?>

                <div class="pagination-container">

                    <div class="button-container">
                        <?php if( $paged > 1 && $showitems < $pages ): ?>
                        <a href="<?php echo get_pagenum_link($paged - 1)?>" class="item prev">Anterior</a>
                        <?php endif; ?>

                        <?php 
                        for ($i=1; $i <= $pages; $i++){
                            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                                if($paged == $i): 
                                    echo "<span class='item current'>".$i."</span>";
                                else:
                                    echo "<a href='".get_pagenum_link($i)."' class='item'>".$i."</a>";
                                endif;
                            }
                        }
                        ?>
                        <?php if( $paged < $pages && $showitems < $pages):?>
                        <a href="<?php echo get_pagenum_link($paged + 1)?>" class="item next">Siguiente</a>
                        <?php endif;?>
                    </div>



                    <?php                     
                    ?>
                    <div class="pagination">
                        <div class="page-button-container">

                            <?php if( $paged > 1 && 1 < $pages ): ?>
                            <a href="<?php echo get_pagenum_link($paged - 1)?>" class="button prev"></a>
                            <?php endif; ?>


                            <div class="numbered">
                                <?php echo $paged ?>
                            </div>

                            <?php if( $paged < $pages && 1 < $pages):?>
                            <a href="<?php echo get_pagenum_link($paged + 1)?>" class="button next"></a>
                            <?php endif;?>

                        </div>

                        <div class="total-number"> de
                            <span> <?php  echo $the_query->max_num_pages; ?></span>
                        </div>
                    </div>
                </div>
                <?php
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</div>

<script>
$('.productos-carousel-tabs').owlCarousel({
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

<?php echo "
<script>
var i = ".$pos.";
var w = $('.productos-carousel-tabs .owl-item').width();
var move = w * (i - 1);
current_bar_position = move;
$('.active-bar').animate({
    'left': move + 'px',
}, 200)
</script>";
?>

<?php echo "
<script>
var i = ".$pos.";
$('.productos-carousel-tabs .owl-item').removeClass('active');
//$('.productos-carousel-tabs .owl-item').eq(i-1).addClass('active');
$('.productos-carousel-tabs .owl-dots button').eq(i-1).click();
</script>";
?>
<?php get_footer();?>