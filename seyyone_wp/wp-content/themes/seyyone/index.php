<?php get_header(); ?>

<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <main class="page-content">
                    <?php if (have_posts()) : ?>
                        <header class="page-header mb-4">
                            <h1 class="page-title">
                                <?php
                                if (is_home() && !is_front_page()) :
                                    single_post_title();
                                elseif (is_archive()) :
                                    the_archive_title();
                                elseif (is_search()) :
                                    printf(__('Search Results for: %s', 'seyyone'), get_search_query());
                                else :
                                    _e('Latest Posts', 'seyyone');
                                endif;
                                ?>
                            </h1>
                        </header>

                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5 p-4 bg-light rounded'); ?>>
                                <header class="entry-header mb-3">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    <div class="entry-meta text-muted">
                                        <span class="posted-on me-3">
                                            <i class="fa fa-calendar me-1"></i>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                        <span class="byline">
                                            <i class="fa fa-user me-1"></i>
                                            <?php the_author(); ?>
                                        </span>
                                    </div>
                                </header>

                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-thumbnail mb-3">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', array('class' => 'img-fluid rounded')); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="entry-content">
                                    <?php
                                    if (is_single()) :
                                        the_content();
                                    else :
                                        the_excerpt();
                                    endif;
                                    ?>
                                </div>

                                <?php if (!is_single()) : ?>
                                    <footer class="entry-footer mt-3">
                                        <a href="<?php the_permalink(); ?>" class="rts-btn btn-border btn-sm">
                                            Read More
                                            <i class="fa fa-arrow-right ms-1"></i>
                                        </a>
                                    </footer>
                                <?php endif; ?>
                            </article>
                        <?php endwhile; ?>

                        <!-- Pagination -->
                        <nav class="pagination-wrapper" aria-label="Posts navigation">
                            <?php
                            the_posts_pagination(array(
                                'mid_size' => 2,
                                'prev_text' => '<i class="fa fa-arrow-left"></i> Previous',
                                'next_text' => 'Next <i class="fa fa-arrow-right"></i>',
                                'class' => 'pagination justify-content-center',
                            ));
                            ?>
                        </nav>

                    <?php else : ?>
                        <div class="no-posts-found text-center p-5">
                            <h2><?php _e('Nothing Found', 'seyyone'); ?></h2>
                            <p class="lead"><?php _e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'seyyone'); ?></p>
                            <?php get_search_form(); ?>
                        </div>
                    <?php endif; ?>
                </main>
            </div>

            <div class="col-lg-4">
                <aside class="sidebar">
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php else : ?>
                        <!-- Default sidebar content -->
                        <div class="widget bg-light p-4 rounded mb-4">
                            <h3 class="widget-title">About Seyyone</h3>
                            <p>Leading provider of Healthcare KPO and Software Solutions with over 25 years of experience.</p>
                        </div>
                        
                        <div class="widget bg-light p-4 rounded mb-4">
                            <h3 class="widget-title">Our Services</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none">Healthcare KPO</a></li>
                                <li><a href="#" class="text-decoration-none">Software Solutions</a></li>
                                <li><a href="#" class="text-decoration-none">Medical Transcription</a></li>
                                <li><a href="#" class="text-decoration-none">EHR/EMR Services</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </aside>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>