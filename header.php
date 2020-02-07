<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700&amp;display=swap" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <a href="#" class="brand-logo">
            <img src="<?php echo get_template_directory_uri().'/img/Logo.png' ?>" alt="">
        </a>

        <div class="menu-button">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="nav-container">
            <?php 
            $conf = [
                'menu' =>  '', 
                'menu_id' =>  'menu-content', 
                'menu_class' => 'menu-content', 
                'container' => 'nav', 
                'container_class' => 'menu', 
                'container_id' => '',    
                'theme_location' =>  'header', 
                'echo' => true,
                'fallback_cb' => 'wp_page_menu', 
                'before' => '', 
                'after' => '', 
                'link_before' => '<span>', 
                'link_after' => '</span>', 
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing' => 'preserve', 
                'depth' => 2 
                
            ];      
            wp_nav_menu($conf); 
            ?>

            <div class="header-social-container">
                <div class="phones-container">
                    <div class="phones-numbers">
                        <?php  if ( is_active_sidebar( 'header-telefonos' ) ) : ?>
                        <div id="post-sidebar" class="widget-area" role="complementary">
                            <?php dynamic_sidebar( 'header-telefonos' ); ?>
                        </div>
                        <?php else: ?>
                        <a href="tel:+52 (81) 19 33 77 54">
                            +52 (81) 19 33 77 54
                        </a>
                        <a href="tel:+52 (81) 20 86 29 29">
                            +52 (81) 20 86 29 29
                        </a>
                        <?php endif; ?>

                    </div>
                    <div class="phones-icon">
                        <img src="<?php echo get_template_directory_uri().'/img/phone.png'?>" alt="">

                    </div>
                </div>
                <div class="social-links">
                    <?php  if ( is_active_sidebar( 'header-social-icons' ) ) : ?>

                    <?php dynamic_sidebar( 'header-social-icons' ); ?>

                    <?php else: ?>
                    <a href="#" target="_blank">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri().'/img/icon-whatsapp.png'?>" alt="">
                        </div>
                    </a>
                    <a href="#" target="_blank">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri().'/img/icon-instagram.png'?>" alt="">
                        </div>
                    </a>
                    <a href="#" target="_blank">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri().'/img/icon-twitter.png'?>" alt="">
                        </div>
                    </a>
                    <a href="#" target="_blank">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri().'/img/icon-facebook.png'?>" alt="">
                        </div>
                    </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </header>
    <div class="mobile-phones">
        <?php  if ( is_active_sidebar( 'header-telefonos' ) ) : ?>
        <div id="post-sidebar" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'header-telefonos' ); ?>
        </div>
        <?php else: ?>
        <a href="tel:+52 (81) 19 33 77 54">
            +52 (81) 19 33 77 54
        </a>
        <a href="tel:+52 (81) 20 86 29 29">
            +52 (81) 20 86 29 29
        </a>
        <?php endif; ?>
    </div>