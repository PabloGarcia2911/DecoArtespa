<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <!-- Logo -->
        <div class="site-logo">
            <?php 
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
            ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="<?php bloginfo('name'); ?>">
                </a>
            <?php } ?>
        </div>

        <!-- Navegación principal -->
        <nav class="main-navigation">
            <ul class="nav-menu">
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>

        <!-- Información de contacto -->
        <div class="contact-info">
            <a href="tel:+56986754131" class="contact-button">
                <i class="fas fa-phone"></i>
                +569 8675 4131
            </a>
            <a href="mailto:agi.decoarte@gmail.com" class="contact-button">
                <i class="fas fa-envelope"></i>
                contacto@printbrothers.cl
            </a>
        </div>
    </div>
    </nav>
</header>

<!-- Botón flotante de WhatsApp -->
<a href="https://wa.me/56986754131" class="whatsapp-btn" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i>
</a>
