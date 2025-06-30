<?php


// =============================================================================
// CUSTOM SEYYONE FUNCTIONS - SOFTWARE SERVICES
// =============================================================================

// Software Services Post Type
function seyyone_software_services_post_type() {
    register_post_type('software_service', array(
        'labels' => array(
            'name' => __('Software Services', 'seyyone'),
            'singular_name' => __('Software Service', 'seyyone'),
            'add_new' => __('Add New Service', 'seyyone'),
            'add_new_item' => __('Add New Software Service', 'seyyone'),
            'edit_item' => __('Edit Software Service', 'seyyone'),
            'view_item' => __('View Software Service', 'seyyone'),
            'all_items' => __('All Software Services', 'seyyone'),
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => false,
        'publicly_queryable' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-desktop',
        'show_in_rest' => true,
        'menu_position' => 25,
    ));
}
add_action('init', 'seyyone_software_services_post_type');

// Add Meta Box for Service ID
function add_software_service_meta_boxes() {
    add_meta_box(
        'software_service_details',
        'Service Details',
        'software_service_meta_box_callback',
        'software_service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_software_service_meta_boxes');

// Meta Box Callback - Only Service ID
function software_service_meta_box_callback($post) {
    wp_nonce_field('save_software_service_meta', 'software_service_meta_nonce');
    
    $service_id = get_post_meta($post->ID, '_service_id', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="service_id">Service ID</label></th>
            <td>
                <input type="text" id="service_id" name="service_id" value="<?php echo esc_attr($service_id); ?>" style="width: 300px;" />
                <p class="description">Enter unique service ID (e.g., mobile, software, cloud, aiml, analytics, talent, hardware)</p>
            </td>
        </tr>
    </table>
    
    <div style="background: #f0f0f1; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h4>📝 How to Add Content:</h4>
        <ol>
            <li><strong>Service ID:</strong> Enter unique ID (like "mobile")</li>
            <li><strong>Title:</strong> Enter service name above</li>
            <li><strong>Featured Image:</strong> Set featured image (shows in modal header)</li>
            <li><strong>Excerpt:</strong> Write short description in excerpt box</li>
            <li><strong>Content:</strong> Write your complete HTML content in the main editor below</li>
        </ol>
        <p><strong>💡 Tip:</strong> You can write full HTML in the content editor including divs, classes, Bootstrap classes, etc.</p>
    </div>
    <?php
}

// Save Meta Function
function save_software_service_meta($post_id) {
    if (!isset($_POST['software_service_meta_nonce']) || !wp_verify_nonce($_POST['software_service_meta_nonce'], 'save_software_service_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['service_id'])) {
        update_post_meta($post_id, '_service_id', sanitize_text_field($_POST['service_id']));
    }
}
add_action('save_post', 'save_software_service_meta');

// AJAX Handler - Show Direct HTML Content
function get_software_service_by_id() {
    $service_id = sanitize_text_field($_POST['service_id']);
    
    $services = new WP_Query(array(
        'post_type' => 'software_service',
        'meta_query' => array(
            array(
                'key' => '_service_id',
                'value' => $service_id,
                'compare' => '='
            )
        ),
        'posts_per_page' => 1,
        'post_status' => 'publish'
    ));
    
    if (!$services->have_posts()) {
        echo '<div style="text-align: center; padding: 40px;"><p style="color: #dc3545;">Service not found.</p></div>';
        wp_die();
    }
    
    $services->the_post();
    $post_id = get_the_ID();
    $title = get_the_title();
    $content = apply_filters('the_content', get_the_content());
    $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url($post_id, 'large') : '';
    
    // Output modal content - Header + Direct Content
    ?>
    <div class="header-row section-seperator-b" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px; padding: 0px 20px; border-radius: 10px;">
        <?php if ($image_url) : ?>
                       <div class="left-image" style="flex: 0 0 auto; margin-right: 15px;">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" style="width: 70px; height: 70px; object-fit: cover; border-radius: 50%; border: 3px solid #3498db; box-shadow: 0 4px 10px rgba(0,0,0,0.1); min-width: 50px;">
            </div>
        <?php endif; ?>
        <div class="center-title" style="flex: 1; text-align: center; padding: 0 10px; min-width: 0;">
            <h3 style="margin: 0; color: #2c3e50; font-weight: 1200;"><?php echo esc_html($title); ?></h3>
        </div>
    </div>
    
    <!-- Direct Content from WordPress Editor -->
    <?php echo $content; ?>
    
    
    
    <?php
    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_get_software_service_by_id', 'get_software_service_by_id');
add_action('wp_ajax_nopriv_get_software_service_by_id', 'get_software_service_by_id');

// =============================================================================
// END CUSTOM FUNCTIONS
// =============================================================================

?>