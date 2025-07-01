<?php
/**
 * Template Name: Blog Details Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 

// Get blog ID from URL
//$blog_id = isset($_GET['blog_id']) ? sanitize_text_field($_GET['blog_id']) : '';
$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;


// Get blog post data
//$blog_post = $blog_id ? seyyone_get_blog_by_id($blog_id) : false;
$blog_post = $post_id ? seyyone_get_blog_by_id($post_id) : false;

if (!$blog_post) {
    // No blog post found, show error message
    ?>
    <div class="rts-blog-list-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 15px; border: 2px dashed #dee2e6;">
                        <div style="font-size: 48px; color: #dc3545; margin-bottom: 20px;">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <h3 style="color: #495057; margin-bottom: 15px;">Blog Post Not Found</h3>
                        <p style="color: #6c757d; margin-bottom: 25px;">The blog post you're looking for doesn't exist or has been removed.</p>
                        <a href="<?php echo esc_url(home_url('/blogs/')); ?>" class="rts-btn btn-primary">
                            Back to Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    return;
}

// Get blog post data
$title = $blog_post['title'];
$content = $blog_post['content'];
 
?>

<div class="rts-blog-list-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="blog-single-post-listing details mb--0">
                   
                    <div class="blog-listing-content">

                       
  <h3 class="title animated fadeIn">
                            <?php 
                            // Get the title
                            $full_title = esc_html($title);
                            
                            // If title is at least 3 characters long
                            if (mb_strlen($full_title) >= 3) {
                                // Get first 3 characters and apply blue underline
                                $first_three = mb_substr($full_title, 0, 3);
                                $rest_of_title = mb_substr($full_title, 3);
                                echo '<b><span class="blue-underline">' . $first_three . '</span>' . $rest_of_title . '</b>';
                            } else {
                                // If title is less than 3 characters, just show it
                                echo $full_title;
                            }
                            ?>
                        </h3>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <?php echo apply_filters('the_content', $content); ?>
                        </div>
                        
                     
                         
                    </div>
                </div>
                <!-- single post End-->
            </div>
        </div>
       
    </div>
</div>

<br><br>

<?php get_footer(); ?>

            
