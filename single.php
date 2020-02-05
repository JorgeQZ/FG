<?php get_header(); ?>

<?php if(is_singular('post')): ?>

<div class="banner-blog"
    style="background-image: url(http://localhost:8888/fg/wp-content/uploads/2020/02/blog-banner.jpg)">
    <div class="banner-tit">
        Blog y noticias
    </div>
</div>
<div class="wrapper-content blog">
    <?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();   
            ?>
    <div class="single-blogpost-container">
        <div class="column">
            <div class="top-title">
                <div class="date-circle">
                    <div class="day"><?php the_time('d'); ?></div>
                    <div class="month"><?php the_time('M'); ?></div>
                </div>
                <div class="title">
                    <?php the_title();?>
                </div>
            </div>

            <div class="post-content">
                <div class="main-img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="column">
            <?php  if ( is_active_sidebar( 'post-sidebar' ) ) : ?>
            <div id="post-sidebar" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'post-sidebar' ); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
            endwhile;
        endif;
    ?>
</div>
<?php else: ?>

<?php
        if ( have_posts() ) : 
            while ( have_posts() ) : 
                the_post();       
                the_content(); 
            endwhile; 
        endif;
    ?>

<?php endif; ?>



<?php get_footer(); ?>