<?php
/**
 * The header for Astra Child theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Nunito+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- NAV -->
    <header>
        <div class="nav-inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
                <img src="https://transestrella.com/wp-content/uploads/2025/07/logo-transportadora-estrella-254x94.png"
                    alt="Transportadora Estrella" style="height: 48px; width: auto;">
            </a>
            <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class' => 'nav-links',
    'container' => false,
    'fallback_cb' => false, // Para no mostrar un menú alternativo si no está asignado
));
?>
        </div>
    </header>