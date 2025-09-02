<?php
/**
 * Funciones principales del tema Decoarte
 */

function decoarte_enqueue_styles() {
    // Cargar el CSS principal del tema
    wp_enqueue_style(
        'decoarte-style-bundle',
        get_stylesheet_directory_uri() . '/assets/css/style-bundle.css',
        array(), // Dependencias, si las hubiera
        filemtime(get_stylesheet_directory() . '/assets/css/style-bundle.css') // Versión dinámica según última modificación
    );
}

add_action('wp_enqueue_scripts', 'decoarte_enqueue_styles');
