<?php get_header(); ?>
<div class="banner-blog"
    style="background-image: url(http://localhost:8888/fg/wp-content/uploads/2020/02/blog-banner.jpg)">
    <div class="banner-tit">
        <?php 
         printf( __( 'Archivos de categoría: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
        ?>
    </div>
</div>

<div class="wrapper-content blog">
    <?php
    $paged = (get_query_var('paged')) ? absint( get_query_var('paged')) : 1;
    $showitems = 2;
    $post_args = array(
        'paged' => get_query_var('paged'), 
        'post_type' => 'productos',
        'showposts' => 5,
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'marcas',
                'field' => 'term_id',
                'terms' => get_queried_object()->term_id,
            )
        )
    );
    $the_query = new WP_Query($post_args);
    ?>

    <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ):  $the_query->the_post(); ?>
    <div class="post" id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?>>
        <div class="column">
            <img src="<?php echo get_field('imagen'); ?>" alt="">
        </div>
        <div class="column">
            <div class="content">
                <div class="post-title"><?php the_title();?></div>
                <div class="desc">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <div class="leermas">Leer más</div>
                </a>
            </div>
        </div>
    </div><!-- /#post-<?php get_the_ID(); ?> -->
    <?php endwhile;
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


                <div class="numbered">
                    <?php echo $paged ?>
                </div>


            </div>

            <div class="total-number"> de
                <span> <?php  echo $the_query->max_num_pages; ?></span>
            </div>
        </div>
    </div>

    <?php endif; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>