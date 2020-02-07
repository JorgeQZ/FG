<?php
/*
Template Name: Blog Posts
*/
?>

<?php get_header(); ?>
<div class="banner-blog" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-tit">
        <?php the_title() ?>
    </div>
</div>

<div class="wrapper-content blog">
    <?php 
    global $wp_query;
    $paged = (get_query_var('paged')) ? absint( get_query_var('paged')) : 1;
    $range = 2;
    $showitems = 8;
    $post_args = array(
        'paged' => $paged, 
        'post_type' => 'post',
        'post_status' => 'publish',
    );
    $the_query = new WP_Query($post_args);
    ?>
    <?php if( $the_query->have_posts() ): ?>

    <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
    <div class="post" id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
        <div class="column">
            <?php the_post_thumbnail('blog-post'); ?>
        </div>
        <div class="column">
            <div class="content">
                <a href="<?php the_permalink(); ?>">
                    <div class="post-title"><?php the_title();?></div>
                </a>
                <div class="desc">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <div class="leermas">Leer más</div>
                </a>
            </div>
        </div>
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