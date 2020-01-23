<?php
/**
 * Template Name: Contacto
 *
 */
?>
<?php get_header(); ?>

<div class="contacto-wrapper">
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

            <div class="sub-text">
                <div class="column">
                    F&G Global Equipment SA de CV <br>

                    Romulo Garza #205 <br>

                    Colonia Industrias del Vidrio, <br>

                    San Nicolás de los Garza, NL CP 66492
                </div>
                <div class="column">
                    <a href="tel:+52 (81) 19 33 77 54 " target="_top">+52 (81) 19 33 77 54 </a> <br>

                    <a href="tel:+52 (81) 20 86 29 29">+52 (81) 20 86 29 29</a> <br>

                    <a href="mailto:ventas@fgequipment.com">ventas@fgequipment.com</a>
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