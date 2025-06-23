<!-- Footer Section Start -->
<div class="rts-footer-area pb--80 bg-light" style="padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                <div class="logo-area">
                    <a href="<?php echo home_url(); ?>" class="logo">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-blue.png" alt="<?php bloginfo('name'); ?>" width="200" height="50">
                        <?php endif; ?>
                    </a>
                    <p class="disc mt-4">
                        Seyyone is a leading provider of Healthcare KPO and Software Solutions with over 25 years of experience serving clients worldwide.
                    </p>
                    <div class="contact-info mt-3">
                        <div class="icon">
                            <i class="fa-sharp fa-regular fa-location-dot" style="color: blue;"></i>
                            <?php echo get_theme_mod('seyyone_address', '73, Anna Nagar, Ramanathapuram, Coimbatore-641045. TN, India.'); ?>
                            <br> Phone: <?php echo get_theme_mod('seyyone_phone', '91 (422) 2310240'); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="single-nav-area-footer">
                            <p class="parent">Healthcare Services</p>
                            <ul>
                                <li><a href="<?php echo home_url('/healthcare#emr-virtual-assistance'); ?>">EHR/EMR – Virtual Assistance</a></li>
                                <li><a href="<?php echo home_url('/healthcare#medical-transcription'); ?>">Medical Transcription</a></li>
                                <li><a href="<?php echo home_url('/healthcare#medical-scribe'); ?>">Medical Scribe</a></li>
                                <li><a href="<?php echo home_url('/healthcare#medical-billing'); ?>">Medical Billing</a></li>
                                <li><a href="<?php echo home_url('/healthcare#remote-medical-scribe'); ?>">Remote Medical Scribe Services</a></li>
                                <li><a href="<?php echo home_url('/healthcare#medical-record-summarization'); ?>">Medical Record Summarization</a></li>
                                <li><a href="<?php echo home_url('/healthcare#aps-summary'); ?>">APS Summary</a></li>
                                <li><a href="<?php echo home_url('/healthcare#peer-review-summary'); ?>">Peer Review Summary</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="single-nav-area-footer">
                            <p class="parent">Software Service</p>
                            <ul>
                                <li><a href="<?php echo home_url('/software#application-services'); ?>">Software Services</a></li>
                                <li><a href="<?php echo home_url('/software#mobile-solutions'); ?>">Mobile Solutions</a></li>
                                <li><a href="<?php echo home_url('/software#cloud-solutions'); ?>">Cloud Solutions</a></li>
                                <li><a href="<?php echo home_url('/software#ai-ml-solutions'); ?>">AI/ML Solutions</a></li>
                                <li><a href="<?php echo home_url('/software#analytical-reporting'); ?>">Analytical and Reporting</a></li>
                                <li><a href="<?php echo home_url('/software#talent-management'); ?>">Talent Management</a></li>
                                <li><a href="<?php echo home_url('/software#remote-hardware-infra'); ?>">Remote Hardware Infra</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="single-nav-area-footer">
                            <p class="parent">Company</p>
                            <ul>
                                <li><a href="<?php echo home_url('/about'); ?>">About us</a></li>
                                <li><a href="<?php echo home_url('/terms'); ?>">Terms and Conditions</a></li>
                                <li><a href="<?php echo home_url('/policy'); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo home_url('/blogs'); ?>">HIPAA Compliance</a></li>
                                <li><a href="<?php echo home_url('/career'); ?>">Career</a></li>
                                <li><a href="<?php echo home_url('/case-studies'); ?>">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section End -->

<!-- Copyright Section Start -->
<div class="rts-copyright-area-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-wrapper">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                    <div class="social-copyright-area">
                        <ul>
                            <li aria-label="Visit our Facebook page"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li aria-label="Visit our Twitter page"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li aria-label="Visit our Youtube page"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li aria-label="Visit our Linkedin page"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Copyright Section End -->

<!-- Mobile Menu Sidebar Start -->
<div id="side-bar" class="side-bar header-two" dir="ltr">
    <button class="close-icon-menu" aria-label="Close Menu"><i class="far fa-times"></i></button>
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li class="has-droupdown">
                    <a href="#" class="main">Who We Are</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="<?php echo home_url('/life-at-seyyone'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> About Us</a></li>
                        <li><a href="<?php echo home_url('/life-at-seyyone#life-at-seyyone'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Life At Seyyone</a></li>
                        <li><a href="<?php echo home_url('/#clients'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Clients</a></li>
                        <li><a href="#"><i class="fa-sharp fa-regular fa-chevron-right"></i> Our Management Team</a></li>
                        <li><a href="<?php echo home_url('/#testimonial'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Testimonial</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">What We Do</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="<?php echo home_url('/healthcare'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Healthcare KPO</a></li>
                        <li><a href="<?php echo home_url('/software'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Software Solutions</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Join Us</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="<?php echo home_url('/career'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Career</a></li>
                        <li><a href="<?php echo home_url('/open-positions'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Open Positions</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Insights</a>
                    <ul class="submenu mm-collapse">
                        <li><a href="<?php echo home_url('/blogs'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Blogs</a></li>
                        <li><a href="<?php echo home_url('/articles'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Articles</a></li>
                        <li><a href="<?php echo home_url('/infographics'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Infographics</a></li>
                        <li><a href="<?php echo home_url('/case-studies'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i> Case Study</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo home_url('/contact'); ?>" class="main">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="rts-social-border-area right-sidebar mt--80">
            <ul>
                <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Mobile Menu Sidebar End -->

<!-- Back to Top Button Start -->
<div id="anywhere-home"></div>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>
<!-- Back to Top Button End -->

<?php wp_footer(); ?>
</body>
</html>
