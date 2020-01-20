<footer>
    <div class="footer-container">
        <?php  if ( is_active_sidebar( 'fcolumn-1' ) ) : ?>
        <div id="fcolumn-1" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-1' ); ?>
        </div>
        <?php endif; ?>

        <?php  if ( is_active_sidebar( 'fcolumn-2' ) ) : ?>
        <div id="fcolumn-2" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-2' ); ?>
        </div>
        <?php endif; ?>


        <?php  if ( is_active_sidebar( 'fcolumn-3' ) ) : ?>
        <div id="fcolumn-3" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-3' ); ?>
        </div>
        <?php endif; ?>


        <?php  if ( is_active_sidebar( 'fcolumn-4' ) ) : ?>
        <div id="fcolumn-4" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'fcolumn-4' ); ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="footer-bottom">
        <p>F&G Global Equipment SA de CV All Copyrights @2019</p>
    </div>
</footer>
<?php wp_footer(); ?>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
</body>

</html>