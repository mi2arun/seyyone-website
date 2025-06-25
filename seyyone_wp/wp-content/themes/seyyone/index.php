<?php get_header(); ?>

<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <main class="page-content">
                    <?php if (have_posts()) : ?>
                        <!-- Blog post loop -->
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- Post content -->
                        <?php endwhile; ?>
                    <?php else : ?>
                        <!-- No posts found -->
                    <?php endif; ?>
                </main>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
