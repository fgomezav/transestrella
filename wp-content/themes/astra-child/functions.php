<?php
/**
 * Astra Child Theme functions and definitions
 */

function astra_child_enqueue_styles()
{
    // Deshabilitar el CSS principal del tema Astra (main.min.css)
    wp_dequeue_style('astra-theme-css');
    wp_deregister_style('astra-theme-css');

    // Cargar CSS del Child Theme sin dependencia del padre
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0', 'all');

    // Cargar CSS personalizado de Forminator globalmente
    wp_enqueue_style('forminator-custom-css', get_stylesheet_directory_uri() . '/forminator.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles', 99);

// Forzar diseño de ancho completo en las plantillas construidas a medida
add_filter('astra_get_content_layout', 'custom_astra_layout_for_custom_templates');
function custom_astra_layout_for_custom_templates($layout)
{
    if (is_page_template('front-page.php') || is_page_template('page-nosotros.php')) {
        return 'page-builder';
    }
    return $layout;
}

// Remover paddings extras
add_filter('astra_page_layout', 'custom_astra_page_layout');
function custom_astra_page_layout($layout)
{
    if (is_page_template('front-page.php') || is_page_template('page-nosotros.php')) {
        return 'ast-full-width';
    }
    return $layout;
}