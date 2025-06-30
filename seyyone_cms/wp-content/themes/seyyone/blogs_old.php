<?php
/**
 * Template Name: Blogs Old Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<div class="rts-blog-list-area rts-section-gapTop">
    <div class="container">
        <div class="row g-5">
            <!-- rts blog post area -->
            <div class="col-xl-8 col-lg-8">
                <div class="row">
                    <?php
                    // Query for blog posts
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blog_posts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                        'post_status' => 'publish'
                    ));

                    if ($blog_posts->have_posts()) :
                        while ($blog_posts->have_posts()) : $blog_posts->the_post();
                    ?>
                        <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                            <div class="single-blog-area-start border-none mb--30">
                                <a href="<?php the_permalink(); ?>" class="thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/01.webp" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </a>
                                <div class="inner-content-area">
                                    <div class="top-area">
                                        <span><?php echo get_the_category_list(', '); ?></span>
                                        <a href="<?php the_permalink(); ?>">
                                            <h3 class="title animated fadeIn"><?php the_title(); ?></h3>
                                        </a>
                                        <p class="disc">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                        </p>
                                        <div class="bottom-author-area">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                                            <div class="author-area-info">
                                                <h6 class="title"><?php the_author(); ?></h6>
                                                <span><?php echo get_the_date('j M Y'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                        endwhile;
                    else :
                    ?>
                        <div class="col-12">
                            <p>No blog posts found.</p>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <?php if ($blog_posts->max_num_pages > 1) : ?>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <div class="pagination-one">
                            <ul>
                                <?php
                                $current_page = max(1, get_query_var('paged'));
                                $total_pages = $blog_posts->max_num_pages;

                                // Previous page
                                if ($current_page > 1) :
                                ?>
                                    <li><a href="<?php echo get_pagenum_link($current_page - 1); ?>"><i class="fa-solid fa-chevrons-left"></i></a></li>
                                <?php endif; ?>

                                <?php
                                // Page numbers
                                for ($i = 1; $i <= $total_pages; $i++) :
                                    if ($i == $current_page) :
                                ?>
                                    <li><button class="active"><?php echo sprintf('%02d', $i); ?></button></li>
                                <?php else : ?>
                                    <li><a href="<?php echo get_pagenum_link($i); ?>"><?php echo sprintf('%02d', $i); ?></a></li>
                                <?php 
                                    endif;
                                endfor; 
                                ?>

                                <?php
                                // Next page
                                if ($current_page < $total_pages) :
                                ?>
                                    <li><a href="<?php echo get_pagenum_link($current_page + 1); ?>"><i class="fa-solid fa-chevrons-right"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </div>

            <!-- rts-blog sidebar area -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 pl-b-list-controler">
                <!-- single sidebar start -->
                <div class="rts-single-wized search">
                    <div class="wized-header">
                        <h5 class="title">Search Here</h5>
                    </div>
                    <div class="wized-body">
                        <div class="rts-search-wrapper">
                            <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                                <input class="Search" type="text" name="s" placeholder="Enter Keyword" value="<?php echo get_search_query(); ?>">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- single sidebar End -->

                <!-- single sidebar start -->
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">Categories</h5>
                    </div>
                    <div class="wized-body">
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'number' => 5
                        ));
                        foreach ($categories as $category) :
                        ?>
                        <ul class="single-categories">
                            <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?> <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- single sidebar End -->

                <!-- single sidebar start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">Recent Posts</h5>
                    </div>
                    <div class="wized-body">
                        <?php
                        $recent_posts = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post_status' => 'publish'
                        ));
                        if ($recent_posts->have_posts()) :
                            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                        ?>
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sm/01.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span><?php echo get_the_date('j M, Y'); ?></span>
                                </div>
                                <a class="post-title" href="<?php the_permalink(); ?>">
                                    <h6 class="title"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></h6>
                                </a>
                            </div>
                        </div>
                        <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif; 
                        ?>
                    </div>
                </div>
                <!-- single sidebar End -->

                <!-- single sidebar start -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">Gallery Posts</h5>
                    </div>
                    <div class="wized-body">
                        <div class="gallery-inner">
                            <div class="row-1 single-row">
                                <a href="<?php echo home_url('/blogs'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sm/04.jpg" alt="Gallery"></a>
                                <a href="<?php echo home_url('/blogs'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sm/05.jpg" alt="Gallery"></a>
                                <a href="<?php echo home_url('/blogs'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sm/06.jpg" alt="Gallery"></a>
                            </div>
                            <div class="row-2 single-row">
                                <a href="<?php echo home_url('/blogs'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sm/07.jpg" alt="Gallery"></a>
                                <a href="<?php echo home_url('/blogs'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sm/08.jpg" alt="Gallery"></a>
                                <a href="<?php echo home_url('/blogs'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sm/09.jpg" alt="Gallery"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single sidebar End -->

                <!-- single sidebar start -->
                <div class="rts-single-wized">
                    <div class="wized-header">
                        <h5 class="title">Popular Tags</h5>
                    </div>
                    <div class="wized-body">
                        <div class="tags-wrapper">
                            <?php
                            $tags = get_tags(array(
                                'orderby' => 'count',
                                'order' => 'DESC',
                                'number' => 9
                            ));
                            foreach ($tags as $tag) :
                            ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- single sidebar End -->
            </div>
            <!-- rts- blog sidebar end area -->
        </div>
    </div>
</div>

<br><br>

<?php get_footer(); ?>
