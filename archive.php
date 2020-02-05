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
    <?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
    <?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>
    <div class="post" id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
        <div class="column">
            <?php the_post_thumbnail('blog-post'); ?>
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
    </div>
    <!-- <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ); ?></a>

        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <span class="meta">
            <strong><?php the_time('d'); ?></strong> /
            <strong><?php the_time('M'); ?></strong>
        </span>

        <?php the_excerpt(__('Continue reading »','example')); ?>

    </div> -->
    <!-- /#post-<?php get_the_ID(); ?> -->

    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>