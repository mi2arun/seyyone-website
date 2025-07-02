<?php
/**
 * Career Functions - Adds custom post type and functionality for job listings
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */

// Register Job Openings Custom Post Type
function seyyone_register_job_openings_post_type() {
    $labels = array(
        'name'               => _x('Job Openings', 'post type general name', 'seyyone'),
        'singular_name'      => _x('Job Opening', 'post type singular name', 'seyyone'),
        'menu_name'          => _x('Job Openings', 'admin menu', 'seyyone'),
        'name_admin_bar'     => _x('Job Opening', 'add new on admin bar', 'seyyone'),
        'add_new'            => _x('Add New', 'job opening', 'seyyone'),
        'add_new_item'       => __('Add New Job Opening', 'seyyone'),
        'new_item'           => __('New Job Opening', 'seyyone'),
        'edit_item'          => __('Edit Job Opening', 'seyyone'),
        'view_item'          => __('View Job Opening', 'seyyone'),
        'all_items'          => __('All Job Openings', 'seyyone'),
        'search_items'       => __('Search Job Openings', 'seyyone'),
        'parent_item_colon'  => __('Parent Job Openings:', 'seyyone'),
        'not_found'          => __('No job openings found.', 'seyyone'),
        'not_found_in_trash' => __('No job openings found in Trash.', 'seyyone')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Job openings for the career page.', 'seyyone'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'job-openings'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array('title', 'editor', 'thumbnail')
    );

    register_post_type('job_opening', $args);
}
add_action('init', 'seyyone_register_job_openings_post_type');

// Register Job Tags Taxonomy
function seyyone_register_job_tags_taxonomy() {
    $labels = array(
        'name'              => _x('Job Tags', 'taxonomy general name', 'seyyone'),
        'singular_name'     => _x('Job Tag', 'taxonomy singular name', 'seyyone'),
        'search_items'      => __('Search Job Tags', 'seyyone'),
        'all_items'         => __('All Job Tags', 'seyyone'),
        'parent_item'       => __('Parent Job Tag', 'seyyone'),
        'parent_item_colon' => __('Parent Job Tag:', 'seyyone'),
        'edit_item'         => __('Edit Job Tag', 'seyyone'),
        'update_item'       => __('Update Job Tag', 'seyyone'),
        'add_new_item'      => __('Add New Job Tag', 'seyyone'),
        'new_item_name'     => __('New Job Tag Name', 'seyyone'),
        'menu_name'         => __('Job Tags', 'seyyone'),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'job-tag'),
    );

    register_taxonomy('job_tag', array('job_opening'), $args);
}
add_action('init', 'seyyone_register_job_tags_taxonomy');

// Add custom meta boxes for job details
function seyyone_job_opening_meta_boxes() {
    add_meta_box(
        'job_responsibilities',
        __('Job Responsibilities', 'seyyone'),
        'seyyone_job_responsibilities_callback',
        'job_opening',
        'normal',
        'high'
    );
    
    add_meta_box(
        'job_qualifications',
        __('Job Qualifications', 'seyyone'),
        'seyyone_job_qualifications_callback',
        'job_opening',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'seyyone_job_opening_meta_boxes');

// Callback function for responsibilities meta box
function seyyone_job_responsibilities_callback($post) {
    wp_nonce_field('seyyone_save_job_meta', 'seyyone_job_meta_nonce');
    $responsibilities = get_post_meta($post->ID, '_job_responsibilities', true);
    ?>
    <textarea name="job_responsibilities" id="job_responsibilities" style="width: 100%; height: 150px;"><?php echo esc_textarea($responsibilities); ?></textarea>
    <p class="description"><?php _e('Enter the responsibilities for this job position.', 'seyyone'); ?></p>
    <?php
}

// Callback function for qualifications meta box
function seyyone_job_qualifications_callback($post) {
    $qualifications = get_post_meta($post->ID, '_job_qualifications', true);
    ?>
    <textarea name="job_qualifications" id="job_qualifications" style="width: 100%; height: 150px;"><?php echo esc_textarea($qualifications); ?></textarea>
    <p class="description"><?php _e('Enter the qualifications required for this job position.', 'seyyone'); ?></p>
    <?php
}

// Save meta box data
function seyyone_save_job_meta_data($post_id) {
    // Check if our nonce is set and verify it
    if (!isset($_POST['seyyone_job_meta_nonce']) || !wp_verify_nonce($_POST['seyyone_job_meta_nonce'], 'seyyone_save_job_meta')) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if (isset($_POST['post_type']) && 'job_opening' == $_POST['post_type']) {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save responsibilities
    if (isset($_POST['job_responsibilities'])) {
        update_post_meta(
            $post_id,
            '_job_responsibilities',
            sanitize_textarea_field($_POST['job_responsibilities'])
        );
    }

    // Save qualifications
    if (isset($_POST['job_qualifications'])) {
        update_post_meta(
            $post_id,
            '_job_qualifications',
            sanitize_textarea_field($_POST['job_qualifications'])
        );
    }
}
add_action('save_post', 'seyyone_save_job_meta_data');

// Function to get job openings for the career page
function seyyone_get_job_openings() {
    $args = array(
        'post_type' => 'job_opening',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    
    return new WP_Query($args);
}
