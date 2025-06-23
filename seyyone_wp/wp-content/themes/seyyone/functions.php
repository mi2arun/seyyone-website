<?php
/**
 * Seyyone Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function seyyone_setup() {
    // Add theme support
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
 
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'seyyone'),
        'footer' => __('Footer Menu', 'seyyone'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'seyyone_setup');

// Enqueue scripts and styles
function seyyone_scripts() {
    // Styles
    wp_enqueue_style('seyyone-bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', array(), '5.3.0');
    wp_enqueue_style('seyyone-fontawesome', get_template_directory_uri() . '/assets/css/plugins/fontawesome.css', array(), '6.0.0');
    wp_enqueue_style('seyyone-magnifying-popup', get_template_directory_uri() . '/assets/css/plugins/magnifying-popup.css', array(), '1.0.0');
    wp_enqueue_style('seyyone-swiper', get_template_directory_uri() . '/assets/css/plugins/swiper.css', array(), '8.0.0');
    wp_enqueue_style('seyyone-metismenu', get_template_directory_uri() . '/assets/css/plugins/metismenu.css', array(), '3.0.0');
    
    // MAIN CHANGE: Your actual CSS file (this contains all your HTML styles)
    wp_enqueue_style('seyyone-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    
    // WordPress theme CSS (keep this last, it's mostly empty but required by WordPress)
    wp_enqueue_style('seyyone-style', get_stylesheet_uri(), array('seyyone-main'), wp_get_theme()->get('Version'));

    // Scripts - Remove the custom jQuery and use WordPress's built-in jQuery
    // wp_enqueue_script('seyyone-jquery', get_template_directory_uri() . '/assets/js/plugins/jquery.js', array(), '3.6.0', true); // REMOVE THIS LINE
    
    // Use WordPress jQuery instead
    wp_enqueue_script('jquery'); // WordPress built-in jQuery
    
    wp_enqueue_script('seyyone-waw', get_template_directory_uri() . '/assets/js/vendor/waw.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-jarallax', get_template_directory_uri() . '/assets/js/vendor/jarallax.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-smooth-scroll', get_template_directory_uri() . '/assets/js/plugins/smooth-scroll.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-counter-up', get_template_directory_uri() . '/assets/js/plugins/counter-up.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-waypoint', get_template_directory_uri() . '/assets/js/vendor/waypoint.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-popup', get_template_directory_uri() . '/assets/js/plugins/popup.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-swiper', get_template_directory_uri() . '/assets/js/plugins/swiper.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-svg-inject', get_template_directory_uri() . '/assets/js/plugins/svg-inject.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-metismenu', get_template_directory_uri() . '/assets/js/plugins/metismenu.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('seyyone-bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), '5.3.0', true);
    wp_enqueue_script('seyyone-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

    // Localize script for AJAX
    wp_localize_script('seyyone-main', 'seyyone_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('seyyone_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'seyyone_scripts');

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

// Custom post types
function seyyone_custom_post_types() {
    // Services Post Type
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'seyyone'),
            'singular_name' => __('Service', 'seyyone'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
    ));

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
add_action('init', 'seyyone_custom_post_types');

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
function seyyone_get_services($limit = -1) {
    return get_posts(array(
        'post_type' => 'services',
        'numberposts' => $limit,
        'post_status' => 'publish'
    ));
}

function seyyone_get_testimonials($limit = -1) {
    return get_posts(array(
        'post_type' => 'testimonials',
        'numberposts' => $limit,
        'post_status' => 'publish'
    ));
}

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Security enhancements
function seyyone_remove_version_strings($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'seyyone_remove_version_strings', 9999);
add_filter('script_loader_src', 'seyyone_remove_version_strings', 9999);
add_filter('show_admin_bar', '__return_false');



// Handle contact form submission
function handle_contact_form_submission() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $user_type = sanitize_text_field($_POST['user_type']);
    $services = isset($_POST['services']) ? array_map('sanitize_text_field', $_POST['services']) : array();
    $agree = isset($_POST['agree']) ? 1 : 0;

    // Prepare email
    $to = get_option('admin_email'); // or your specific email like 'info@seyyone.com'
    $subject = 'New Contact Form Submission from ' . $first_name . ' ' . $last_name;
    
    $email_message = "New contact form submission:\n\n";
    $email_message .= "Name: " . $first_name . " " . $last_name . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Phone: " . $phone . "\n";
    $email_message .= "User Type: " . $user_type . "\n";
    $email_message .= "Services: " . implode(', ', $services) . "\n";
    $email_message .= "Message: " . $message . "\n";
    
    $headers = array('Content-Type: text/html; charset=UTF-8');

    // Send email
    $sent = wp_mail($to, $subject, $email_message, $headers);

    if ($sent) {
        wp_redirect(home_url('/contact?success=1'));
    } else {
        wp_redirect(home_url('/contact?error=1'));
    }
    exit;
}
add_action('admin_post_contact_form_submission', 'handle_contact_form_submission');
add_action('admin_post_nopriv_contact_form_submission', 'handle_contact_form_submission');
