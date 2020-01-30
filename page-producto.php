<?php
/**
 * Template Name: Producto
 *
 */
global $wp_query;
$paged = (get_query_var('paged')) ? absint( get_query_var('paged')) : 1;
$parent_ID = $post->post_parent;
$page_ID = get_the_ID();
?>
<?php get_header();?>

<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-tit">
        Nuestros productos
    </div>
</div>

<div class="product-container">
    <div class="sliders-container">
        <div class="slider-tabs">
            <div class="active-bar"></div>

            <?php
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
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
            </div>
            <?php 
                 endwhile;
            endif; 
            wp_reset_postdata(); 
            ?>

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
                    the_posts_pagination(array(
                        'mid_size' => 1,
                        'prev_text' => __('Anterior', 'patelextensions'),
                        'next_text' => __('Siguiente', 'patelextensions'),
                        'before_page_number' => __('Page', 'patelextensions') ,
                    ));
                   
                    ?>

                <div class="pagination-container">
                    <div class="button-container">
                        <a href="#" class="item prev">Anterior</a>
                        <a href="#" class="item next">Siguiente</a>
                    </div>


                    <div class="pagination">
                        <div class="page-button-container">
                            <div class="button prev">
                                <a href="#" class="">
                                </a>
                            </div>
                            <div class="numbered">
                                <?php echo $paged ?>
                            </div>
                            <div class="button next">
                                <a href="#" class="">
                                </a>
                            </div>
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

<?php get_footer();?>