<?php
// =============================================================================
// CUSTOM SEYYONE FUNCTIONS - BLOG SYSTEM
// =============================================================================

// Blog Post Type
function seyyone_blog_posts_post_type() {
    register_post_type('seyyone_blog', array(
        'labels' => array(
            'name' => __('Blog Posts', 'seyyone'),
            'singular_name' => __('Blog Post', 'seyyone'),
            'add_new' => __('Add New Post', 'seyyone'),
            'add_new_item' => __('Add New Blog Post', 'seyyone'),
            'edit_item' => __('Edit Blog Post', 'seyyone'),
            'view_item' => __('View Blog Post', 'seyyone'),
            'all_items' => __('All Blog Posts', 'seyyone'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-post',
        'show_in_rest' => true,
        'menu_position' => 27,
        'rewrite' => array('slug' => 'blog'),
    ));
}
add_action('init', 'seyyone_blog_posts_post_type');

// Add Meta Box for Blog ID
function add_blog_meta_boxes() {
    add_meta_box(
        'blog_details',
        'Blog Details',
        'blog_meta_box_callback',
        'seyyone_blog',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'add_blog_meta_boxes');

// Meta Box Callback
function blog_meta_box_callback($post) {
    wp_nonce_field('save_blog_meta', 'blog_meta_nonce');
 
    
    ?>
    
    
    <div style="background: #f0f0f1; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h4>📝 How to Add Blog Content:</h4>
        <ol>
           
            <li><strong>Title:</strong> Enter blog title above</li>
            <li><strong>Featured Image:</strong> Set featured image (shows in blog list)</li>
            <li><strong>Excerpt:</strong> Write short description in excerpt box</li>
            <li><strong>Content:</strong> Write your complete blog content in the main editor below</li>
        </ol>
        <p><strong>💡 Tip:</strong> You can write full HTML in the content editor including divs, classes, etc.</p>
    </div>
    <?php
}

// Save Blog Meta
function save_blog_meta($post_id) {
    if (!isset($_POST['blog_meta_nonce']) || !wp_verify_nonce($_POST['blog_meta_nonce'], 'save_blog_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
     
}
add_action('save_post', 'save_blog_meta');

 

// Get Recent Blog Posts
function seyyone_get_recent_blog_posts($count = 3) {
    $args = array(
        'post_type' => 'seyyone_blog',
        'posts_per_page' => $count,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    return new WP_Query($args);
}

function seyyone_get_blog_by_id($post_id) {
    $blog_post = get_post($post_id);
    
    if ($blog_post && $blog_post->post_type === 'seyyone_blog' && $blog_post->post_status === 'publish') {
        $post_data = array(
            'id' => $blog_post->ID,
            'title' => get_the_title($blog_post),
            'content' => $blog_post->post_content,
            'excerpt' => get_the_excerpt($blog_post),
            'permalink' => get_permalink($blog_post),
            'date' => get_the_date('d M, Y', $blog_post),
            'author' => get_the_author_meta('display_name', $blog_post->post_author),
            'image' => has_post_thumbnail($blog_post) ? get_the_post_thumbnail_url($blog_post, 'large') : '',
        );
        return $post_data;
    }
    
    return false;
}

// =============================================================================
// END BLOG FUNCTIONS
// =============================================================================
?>
