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
    <div class="title-section">Nuestros Productos</div>


    <div class="sliders-container">

        <div class="slider-tabs">
            <div class="active-bar"></div>
            <div class="item">
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

            </div>
        </div>

        <div class="slider-tabs-content">
            <div class="tab active">
                <div class="item">
                    <a href="#" target="_blank">
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
                    <a href="#" target="_blank">

                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 7"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 10"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Atlas
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>

                <a href="#">
                    <div class="ver-mas">
                        ver más
                    </div>
                </a>
            </div>

            <div class="tab">
                <div class="item">
                    <a href="#" target="_blank">
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
                    <a href="#" target="_blank">

                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 7"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 10"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Atlas
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>

                <a href="#">
                    <div class="ver-mas">
                        ver más
                    </div>
                </a>
            </div>
            <div class="tab">
                <div class="item">
                    <a href="#" target="_blank">
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
                    <a href="#" target="_blank">

                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 7"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 10"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Atlas
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>

                <a href="#">
                    <div class="ver-mas">
                        ver más
                    </div>
                </a>
            </div>
            <div class="tab">
                <div class="item">
                    <a href="#" target="_blank">
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
                    <a href="#" target="_blank">

                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 7"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 10"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Atlas
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>

                <a href="#">
                    <div class="ver-mas">
                        ver más
                    </div>
                </a>
            </div>
            <div class="tab">
                <div class="item">
                    <a href="#" target="_blank">
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
                    <a href="#" target="_blank">

                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-2.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 7"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-3.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Mercury 10"
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
                    <a href="#" target="_blank">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri().'/img/p-4.png'; ?>" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                Atlas
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </a>
                </div>

                <a href="#">
                    <div class="ver-mas">
                        ver más
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-wrapper alternate">
    <div class="title-section">Nuestros Lanzamientos</div>
    <div class="grid-container">
        <div class="row">
            <div class="column alternate"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/bg-1.jpg'; ?>)">
                <div class="title">Lorem, ipsum <br> dolor</div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequatur ut facilis, omnis,
                        nesciunt voluptatum facere eligendi iste accusantium sed doloribus id quo illo cum suscipit
                        optio?
                        Commodi, id quam.
                    </p>
                </div>
                <a href="">
                    <div class="vermas">
                        Ver más
                    </div>
                </a>
                <div class="cover"></div>
                <div class="cover alternate"></div>

            </div>
            <div class="column alternate "
                style="background-image: url(<?php echo get_template_directory_uri().'/img/bg-2.jpg'; ?>)">
                <div class="title">Lorem, ipsum <br> dolor</div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequatur ut facilis, omnis,
                        nesciunt voluptatum facere eligendi iste accusantium sed doloribus id quo illo cum suscipit
                        optio?
                        Commodi, id quam.
                    </p>
                </div>
                <a href="">
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
                <div class="subcolumn alternate"
                    style="background-image: url(<?php echo get_template_directory_uri().'/img/pic-3.jpg'; ?>)">
                    <div class="title">Lorem, ipsum <br> dolor</div>
                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequatur ut facilis,
                            omnis,
                            nesciunt voluptatum facere eligendi iste accusantium sed doloribus id quo illo cum suscipit
                            optio?
                            Commodi, id quam.
                        </p>
                    </div>
                    <a href="">
                        <div class="vermas">
                            Ver más
                        </div>
                    </a>
                    <div class="cover"></div>
                    <div class="cover alternate"></div>
                </div>
                <div class="subcolumn alternate"
                    style="background-image: url(<?php echo get_template_directory_uri().'/img/pic-4.jpg'; ?>)">
                    <div class="title">Lorem, ipsum <br> dolor</div>
                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequatur ut facilis,
                            omnis,
                            nesciunt voluptatum facere eligendi iste accusantium sed doloribus id quo illo cum suscipit
                            optio?
                            Commodi, id quam.
                        </p>
                    </div>
                    <a href="">
                        <div class="vermas">
                            Ver más
                        </div>
                    </a>
                    <div class="cover"></div>
                    <div class="cover alternate"></div>

                </div>
            </div>
            <div class="column alternate"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/pic-5.jpg'; ?>)">
                <div class="title">Lorem, ipsum <br> dolor</div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam consequatur ut facilis,
                        omnis,
                        nesciunt voluptatum facere eligendi iste accusantium sed doloribus id quo illo cum suscipit
                        optio?
                        Commodi, id quam.
                    </p>
                </div>
                <a href="">
                    <div class="vermas">
                        Ver más
                    </div>
                </a>
                <div class="cover"></div>
                <div class="cover alternate"></div>

            </div>
        </div>
    </div>

    <div class="contact-container">
        <div class="column">
            <div class="form">
                <div class="title">Contáctanos</div>
                <div class="form-row">
                    <div class="form-input">
                        <div class="icon person"></div>
                        <input type="text" placeholder="Nombre">
                    </div>
                    <div class="form-input">
                        <div class="icon mail"></div>
                        <input type="text" placeholder="Correo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <div class="icon phone"></div>
                        <input type="text" placeholder="Teléfono">
                    </div>
                </div>

                <div class="form-row">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                </div>

                <div class="form-row">
                    <div class="privacy">
                        <label for="acepto">
                            <input type="checkbox" name="acepto" id="acepto">

                            Acepto las condiciones de uso y la política de privacidad.
                        </label>
                    </div>
                </div>

                <div class="form-row">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </div>
        <div class="column">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.5339419913366!2d-100.23769678435328!3d25.719850616607378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eae71bf53af1%3A0x7dab57ce80cbffa5!2sF%26G%20GLOBAL%20EQUIPMENT!5e0!3m2!1ses-419!2smx!4v1579036476658!5m2!1ses-419!2smx"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>