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

            <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false">
                <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

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