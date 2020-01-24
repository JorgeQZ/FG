<?php
/**
 * Template Name: Producto
 *
 */



$parent_ID = $post->post_parent;
?>
<?php get_header();?>

<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-tit">
        <?php the_title() ?>
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
            
            $parent = new WP_Query( $args );

            if ( $parent->have_posts() ) : ?>

            <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
            <?php echo get_the_ID();?>
            <div class="item">

                <img src="<?php echo get_template_directory_uri().'/img/procentec.png'?>" alt="">
            </div>
            <?php endwhile; ?>

            <?php endif; wp_reset_postdata(); ?>
            <!-- <div class="item">

                <img src="<?php echo get_template_directory_uri().'/img/procentec.png'?>" alt="">
            </div>
            <div class="item">

                <img src="<?php echo get_template_directory_uri().'/img/siemens.png'?>" alt="">

            </div>
            <div class="item">

                <img src="<?php echo get_template_directory_uri().'/img/fg.png'?>" alt="">

            </div>
            <div class="item">

                <img src="<?php echo get_template_directory_uri().'/img/omron.png'?>" alt="">
            </div>
            <div class="item">

                <img src="<?php echo get_template_directory_uri().'/img/econ.png'?>" alt="">

            </div> -->
        </div>

        <div class="slider-tabs-content">
            <div class="tab active">
                <div class="info">
                    <p class="tit">
                        procentec
                    </p>
                    <p class="desc">
                        En F&G Global Equipment, somos distribuidores exclusivos de PROCENTEC para México.
                        Contamos con suministro de refacciones para tus redes PROFIBUS y PROFINET.
                    </p>
                    <p class="desc">
                        Ofrecemos asesoría para la selección de equipos para redes
                        industriales en nuevos proyectos y ampliaciones.
                    </p>
                    <p class="desc">
                        Brindamos cursos de capacitación técnica, cubriendo el uso del hardware y
                        software necesario para analiar y diagnosticar tus redes industriales.
                    </p>
                    <p class="desc">
                        Da clic en las imágenes para conocer los productos, o bien a mano derecha en el
                        logo de PROCENTEC para ir directamente al sitio web.
                    </p>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-1.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3-1.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-1.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3-1.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-1.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3-1.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                ComBricks
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>



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
                                1
                            </div>
                            <div class="button next">
                                <a href="#" class="">
                                </a>
                            </div>
                        </div>

                        <div class="total-number"> de
                            <span>4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>