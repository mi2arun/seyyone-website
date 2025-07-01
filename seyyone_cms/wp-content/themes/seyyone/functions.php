<?php
/**
 * Seyyone Theme Functions
 * WordPress Default Functions First, Custom Functions at End
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// =============================================================================
// WORDPRESS DEFAULT FUNCTIONS
// =============================================================================

// Theme setup
function seyyone_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
 
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'seyyone'),
        'footer' => __('Footer Menu', 'seyyone'),
    ));

    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'seyyone_setup');

// INCLUDE CUSTOM FUNCTIONS
// Include Software Functions
require_once get_template_directory() . '/inc/software-functions.php';
require_once get_template_directory() . '/inc/healthcare-functions.php';
require_once get_template_directory() . '/inc/blog-functions.php';

// Deregister default WordPress jQuery to avoid conflicts with our custom loading
function seyyone_deregister_wp_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'seyyone_deregister_wp_jquery');

// Remove unnecessary WordPress styles
function seyyone_remove_wp_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'seyyone_remove_wp_styles', 100);

// Add custom CSS loading with preload technique
function seyyone_custom_styles() {
    $template_uri = get_template_directory_uri();
    ?>
    <!-- CSS Files with preload technique -->
    <link rel="stylesheet preload" href="<?php echo $template_uri; ?>/assets/css/vendor/bootstrap.min.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="<?php echo $template_uri; ?>/assets/css/plugins/fontawesome.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="<?php echo $template_uri; ?>/assets/css/plugins/magnifying-popup.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="<?php echo $template_uri; ?>/assets/css/plugins/swiper.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="<?php echo $template_uri; ?>/assets/css/plugins/metismenu.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="<?php echo $template_uri; ?>/assets/css/style.css" as="style" onload="this.media='all'">
    <link rel="stylesheet preload" href="<?php echo $template_uri; ?>/assets/css/seyyone-style.css" as="style" onload="this.media='all'">
    
    <!-- Fallback for browsers that don't support preload -->
    <noscript>
        <link rel="stylesheet" href="<?php echo $template_uri; ?>/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $template_uri; ?>/assets/css/plugins/fontawesome.css">
        <link rel="stylesheet" href="<?php echo $template_uri; ?>/assets/css/plugins/magnifying-popup.css">
        <link rel="stylesheet" href="<?php echo $template_uri; ?>/assets/css/plugins/swiper.css">
        <link rel="stylesheet" href="<?php echo $template_uri; ?>/assets/css/plugins/metismenu.css">
        <link rel="stylesheet" href="<?php echo $template_uri; ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo $template_uri; ?>/assets/css/seyyone-style.css">
    </noscript>
    <?php
}
add_action('wp_head', 'seyyone_custom_styles', 5);

// Add custom JS loading with defer attribute
function seyyone_custom_scripts() {
    $template_uri = get_template_directory_uri();
    ?>
    <!-- JavaScript Files with defer attribute -->
    <script defer src="<?php echo $template_uri; ?>/assets/js/plugins/jquery.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/vendor/waw.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/vendor/jarallax.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/plugins/smooth-scroll.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/plugins/counter-up.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/vendor/waypoint.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/plugins/popup.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/plugins/swiper.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/plugins/svg-inject.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/plugins/metismenu.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/vendor/contact-form.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script defer src="<?php echo $template_uri; ?>/assets/js/main.js"></script>
    <?php
}
add_action('wp_footer', 'seyyone_custom_scripts', 20);

// Add fallback for browsers that don't support preload
function seyyone_add_css_fallback() {
    ?>
    <script>
    (function() {
        var links = document.getElementsByTagName('link');
        for (var i = 0; i < links.length; i++) {
            if (links[i].rel === 'stylesheet preload' && links[i].hasAttribute('onload')) {
                // If media is still 'print', the onload handler hasn't fired yet
                if (links[i].getAttribute('media') === 'print') {
                    links[i].setAttribute('media', 'all');
                }
            }
        }
    })();
    </script>
    <?php
}
add_action('wp_head', 'seyyone_add_css_fallback', 99);

// Register widget areas
function seyyone_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'seyyone'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'seyyone'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'seyyone'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here for footer.', 'seyyone'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'seyyone_widgets_init');

// Basic WordPress Post Types
function seyyone_basic_post_types() {
    // Testimonials Post Type
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'seyyone'),
            'singular_name' => __('Testimonial', 'seyyone'),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    ));

    // Team Members Post Type
    register_post_type('team', array(
        'labels' => array(
            'name' => __('Team Members', 'seyyone'),
            'singular_name' => __('Team Member', 'seyyone'),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
    ));
}
add_action('init', 'seyyone_basic_post_types');

// Customizer settings
function seyyone_customize_register($wp_customize) {
    // Company Info Section
    $wp_customize->add_section('seyyone_company_info', array(
        'title' => __('Company Information', 'seyyone'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('seyyone_phone', array(
        'default' => '91 (422) 2310240',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('seyyone_phone', array(
        'label' => __('Phone Number', 'seyyone'),
        'section' => 'seyyone_company_info',
        'type' => 'text',
    ));

    // Address
    $wp_customize->add_setting('seyyone_address', array(
        'default' => '73, Anna Nagar, Ramanathapuram, Coimbatore-641045. TN, India.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('seyyone_address', array(
        'label' => __('Address', 'seyyone'),
        'section' => 'seyyone_company_info',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'seyyone_customize_register');

// Helper functions
function seyyone_get_testimonials($limit = -1) {
    return get_posts(array(
        'post_type' => 'testimonials',
        'numberposts' => $limit,
        'post_status' => 'publish'
    ));
}

// Security enhancements
function seyyone_remove_version_strings($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'seyyone_remove_version_strings', 9999);
add_filter('script_loader_src', 'seyyone_remove_version_strings', 9999);

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Hide admin bar on frontend
add_filter('show_admin_bar', '__return_false');

// Add custom body classes
function seyyone_body_classes($classes) {
    $classes[] = 'seyyone-theme';
    return $classes;
}
add_filter('body_class', 'seyyone_body_classes');

// Fix for WordPress admin bar pushing down fixed header
function seyyone_admin_bar_fix() {
    if (is_admin_bar_showing()) {
        ?>
        <style>
            .header--sticky {
                top: 32px !important;
            }
            @media screen and (max-width: 782px) {
                .header--sticky {
                    top: 46px !important;
                }
            }
        </style>
        <?php
    }
}
add_action('wp_head', 'seyyone_admin_bar_fix');
?>
