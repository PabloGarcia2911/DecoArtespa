<?php
/**
 * Funciones principales del tema Decoarte
 */

// Cargar estilos
function decoarte_enqueue_styles() {
    wp_enqueue_style(
        'decoarte-style',
        get_stylesheet_uri(),
        array(),
        time() // Cambiar a versión estática en producción
    );

    wp_enqueue_style(
        'decoarte-custom',
        get_template_directory_uri() . '/custom.css',
        array('decoarte-style'),
        time()
    );
}
add_action('wp_enqueue_scripts', 'decoarte_enqueue_styles');

// Soporte para logo personalizado
function decoarte_theme_support() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'decoarte_theme_support');
