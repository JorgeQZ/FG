<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

    <textarea name="comment" id="comment" placeholder="Your Comment Here..." tabindex="4"></textarea>
    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment">
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>

    <?php if (function_exists('curPageURL')) { ?>
    <input type="hidden" name="redirect_to" value="<?php echo curPageURL() ?>" />
    <?php } ?>

</form>




<div class="wrapper-content blog">

    <?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>

    <?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>

    <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ); ?></a>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <span class="meta">
            <strong><?php the_time('d'); ?></strong> /
            <strong><?php the_time('M'); ?></strong>
        </span>

        <?php the_excerpt(__('Continue reading »','example')); ?>

    </div><!-- /#post-<?php get_the_ID(); ?> -->

    <?php endwhile; ?>

    <!-- <div class="navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span
            class="older"><?php next_posts_link(__('Older »','example')) ?></span>
    </div> -->
    <!-- /.navigation -->

    <?php else: ?>

    <!-- <div id="post-404" class="noposts">

        <p><?php _e('None found.','example'); ?></p>

    </div> -->
    <!-- /#post-404 -->

    <?php endif; wp_reset_query(); ?>

</div><!-- /#content -->

<?php get_footer(); ?>