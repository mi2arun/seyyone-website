<?php
/**
 * Template Name: Infographics Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<!-- rts case studies banner area start -->
<div class="rts-case-studies-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-studies-banner-top">
                    <h1 class="title">
                        Info Graphics
                    </h1>
                    <p>Here are our featured projects that empower businesses.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-left-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/01.png" alt="case">
    </div>
</div>
<!-- rts case studies banner area end -->

<!-- case studies area start -->
<div class="single-large-case-studies-area rts-section-gapBottom">
    <div class="container">
        <div class="row g-80">
            <div class="col-lg-12">
                <div class="single-case-studies">
                    <a href="<?php echo home_url('/case-studies-single'); ?>" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/18.webp" alt="image">
                    </a>
                    <div class="inner-content">
                        <span>Healthcare KPO, Statistics</span>
                        <a href="<?php echo home_url('/case-studies-single'); ?>">
                            <h3 class="title animated fadeIn">Healthcare KPO Market Growth</h3>
                        </a>
                        <a href="<?php echo home_url('/case-studies-single'); ?>" class="rts-btn btn-border">
                            View Infographic
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-offset="120" data-wow-delay=".2s">
                <div class="single-case-studies">
                    <a href="<?php echo home_url('/case-studies-single'); ?>" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/01.webp" alt="image">
                    </a>
                    <div class="inner-content">
                        <span>Medical Transcription, Process</span>
                        <a href="<?php echo home_url('/case-studies-single'); ?>">
                            <h3 class="title animated fadeIn">Medical Transcription Workflow</h3>
                        </a>
                        <a href="<?php echo home_url('/case-studies-single'); ?>" class="rts-btn btn-border">
                            View Infographic
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-offset="120" data-wow-delay=".4s">
                <div class="single-case-studies">
                    <a href="<?php echo home_url('/case-studies-single'); ?>" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/03.webp" alt="image">
                    </a>
                    <div class="inner-content">
                        <span>HIPAA Compliance, Guidelines</span>
                        <a href="<?php echo home_url('/case-studies-single'); ?>">
                            <h3 class="title animated fadeIn">HIPAA Compliance Checklist</h3>
                        </a>
                        <a href="<?php echo home_url('/case-studies-single'); ?>" class="rts-btn btn-border">
                            View Infographic
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-offset="120" data-wow-delay=".2s">
                <div class="single-case-studies">
                    <a href="<?php echo home_url('/case-studies-single'); ?>" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/02.webp" alt="image">
                    </a>
                    <div class="inner-content">
                        <span>EHR/EMR, Implementation</span>
                        <a href="<?php echo home_url('/case-studies-single'); ?>">
                            <h3 class="title animated fadeIn">EHR Implementation Timeline</h3>
                        </a>
                        <a href="<?php echo home_url('/case-studies-single'); ?>" class="rts-btn btn-border">
                            View Infographic
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-offset="120" data-wow-delay=".4s">
                <div class="single-case-studies">
                    <a href="<?php echo home_url('/case-studies-single'); ?>" class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/04.webp" alt="image">
                    </a>
                    <div class="inner-content">
                        <span>Medical Billing, Revenue Cycle</span>
                        <a href="<?php echo home_url('/case-studies-single'); ?>">
                            <h3 class="title animated fadeIn">Medical Billing Process</h3>
                        </a>
                        <a href="<?php echo home_url('/case-studies-single'); ?>" class="rts-btn btn-border">
                            View Infographic
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- case studies area end -->

<!-- rts call to action area start -->
<div class="rts-call-to-action-area-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Book a Free Consultation</h2>
                <p class="disc">
                    Schedule a no-obligation consultation to discuss your unique needs and how Seyyone can elevate
                    your business technology.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                    View Solutions
                    <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- rts call to action area end -->

<br><br>

<?php get_footer(); ?>
