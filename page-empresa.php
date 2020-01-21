<?php
/**
 * Template Name: Empresa
 *
 */
?>
<?php get_header();?>

<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="banner-tit">
        <?php the_title() ?>
    </div>
</div>


<div class="contenedor-general-empresa">

    <p class="encabezado">
        F&G GLOBAL EQUIPMENT 
    </p>

    <p class="desc">
        Se crea en 2013 con el objetivo de ofertar soluciones de control y automatización para la industria nacional. 
        Proveemos asesoría técnica, refaccionamiento e integración de soluciones completas para cualquier necesidad 
        industrial de automatización y control de máquinas y procesos.
    </p>


    <div class="contenedor-mision-vision">
        
        <div class="cont-info">
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/mision.png'?>" alt="" class="dec">
                <div>
                    <p class="tit">MISióN</p>
                    <p class="desc">
                    Resolver a nuestros clientes locales y foráneos sus necesidades de asesoría, diagnósticos en campo, refaccionamiento, 
                    integración y servicios de control y automatización (de máquinas y procesos) con personal capacitado y con una amplia 
                    existencia de equipos de marcas mundialmente reconocidas.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/vision.png'?>" alt="" class="dec">
                <div>
                    <p class="tit">VISióN</p>
                    <p class="desc">
                    Consolidarnos en la industria como una empresa capaz de solucionar cualquier problema en la industria; 
                    como líderes en el diagnóstico de redes industriales y como líderes en el desarrollo de soluciones para la industria 4.0. 
                    Siempre estableciendo el punto de referencia en calidad, servicio y atención al cliente.
                    </p>
                </div>
            </div>

        </div>

        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri().'/img/empresa-item.png'?>" alt="" class="dec">
        </div>

    </div>



</div>



<?php get_footer();?>