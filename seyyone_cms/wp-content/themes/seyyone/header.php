<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav.jpg">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Section Start -->
<header class="header-style-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-wrapper-1">
                    <a href="<?php echo home_url(); ?>" class="logo-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-blue.png" alt="Seyyone logo" style="height: 60px;">
                    </a>
                    <div class="nav-area">
                        <nav>
                            <ul>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="#">
                                        Who We are
                                        <i class="fa-duotone fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu parent-nav with-border">
                                        <li><a href="<?php echo home_url('/about'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>About Us</a></li>
                                        <li><a href="<?php echo home_url('/about#life-at-seyyone'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Life At Seyyone</a></li>
                                        <li><a href="<?php echo home_url('/#clients'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Clients</a></li>
                                   
                                        <li><a href="<?php echo home_url('/#testimonials'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Testimonial</a></li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a class="nav-link" href="#">Join Us <i class="fa-duotone fa-regular fa-chevron-down"></i></a>
                                    <ul class="submenu parent-nav with-border">
                                        <li><a href="<?php echo home_url('/career'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Career</a></li>
                                        <li><a href="<?php echo home_url('/career#job-openings'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Open Positions</a></li>
                                    </ul>
                                </li>

                                <li class="has-dropdown position-static with-megamenu">
    <a class="nav-link" href="#">What we do <i class="fa-duotone fa-regular fa-chevron-down"></i></a>
    <div class="submenu">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="single-menu parent-nav">
                        <li>
                            <a class="single-service-area-wrapper" href="<?php echo home_url('/healthcare'); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/23.svg" alt="Healthcare KPO">
                                </div>
                                <div class="info">
                                    <h4 class="title">Healthcare KPO</h4>
                                    <p> Seyyone  has been delivering innovative solutions in Healthcare</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="single-menu parent-nav">
                        <li>
                            <a class="single-service-area-wrapper" href="<?php echo home_url('/software'); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/23.svg" alt="Software">
                                </div>
                                <div class="info">
                                    <h4 class="title">Software Solutions</h4>
                                    <p>Custom software development and enterprise solutions.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>


                                <li class="has-dropdown">
                                    <a class="nav-link" href="#">Join Us <i class="fa-duotone fa-regular fa-chevron-down"></i></a>
                                    <ul class="submenu parent-nav with-border">
                                        <li><a href="<?php echo home_url('/career'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Career</a></li>
                                        <li><a href="<?php echo home_url('/career#job-openings'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Open Positions</a></li>
                                    </ul>
                                </li>
                                
                                <li class="has-dropdown">
                                    <a class="nav-link" href="#">Insights<i class="fa-duotone fa-regular fa-chevron-down"></i></a>
                                    <ul class="submenu parent-nav with-border">
                                        <li><a href="<?php echo home_url('/blogs'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Blogs</a></li>
                                        <li><a href="<?php echo home_url('/articles'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Articles</a></li>
                                        <li><a href="<?php echo home_url('/infographics'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Infographics</a></li>
                                        <li><a href="<?php echo home_url('/case-studies'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Case Study</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="button-area-right-header">
                        <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-border">
                            Get in touch
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                        <div class="menu-btn-toggle">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="header-style-one header--sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-wrapper-1">
                    <a href="<?php echo home_url(); ?>" class="logo-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-blue.png" alt="Seyyone logo" style="height: 60px;">
                    </a>
                    <div class="nav-area">
                        <nav>
                            <ul>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="#">
                                        Who We are
                                        <i class="fa-duotone fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="submenu parent-nav with-border">
                                        <li><a href="<?php echo home_url('/about#'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>About Us</a></li>
                                        <li><a href="<?php echo home_url('/about#life-at-seyyone'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Life At Seyyone</a></li>
                                        <li><a href="<?php echo home_url('/#clients'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Clients</a></li>
                                 
                                        <li><a href="<?php echo home_url('/#testimonials'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Testimonial</a></li>
                                    </ul>
                                </li>

                                 <li class="has-dropdown position-static with-megamenu">
    <a class="nav-link" href="#">What we do <i class="fa-duotone fa-regular fa-chevron-down"></i></a>
    <div class="submenu">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="single-menu parent-nav">
                        <li>
                            <a class="single-service-area-wrapper" href="<?php echo home_url('/healthcare'); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/23.svg" alt="Healthcare KPO">
                                </div>
                                <div class="info">
                                    <h4 class="title">Healthcare KPO</h4>
                                    <p><span style="color: #3498db;">Seyyone</span> has been delivering innovative solutions in Healthcare</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="single-menu parent-nav">
                        <li>
                            <a class="single-service-area-wrapper" href="<?php echo home_url('/software'); ?>">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/23.svg" alt="Software">
                                </div>
                                <div class="info">
                                    <h4 class="title">Software Solutions</h4>
                                    <p>Custom software development and enterprise solutions.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>


                                <li class="has-dropdown">
                                    <a class="nav-link" href="#">Join Us <i class="fa-duotone fa-regular fa-chevron-down"></i></a>
                                    <ul class="submenu parent-nav with-border">
                                        <li><a href="<?php echo home_url('/career'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Career</a></li>
                                        <li><a href="<?php echo home_url('/career#job-openings'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Open Positions</a></li>
                                    </ul>
                                </li>
                                
                                <li class="has-dropdown">
                                    <a class="nav-link" href="#">Insights<i class="fa-duotone fa-regular fa-chevron-down"></i></a>
                                    <ul class="submenu parent-nav with-border">
                                        <li><a href="<?php echo home_url('/blogs'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Blogs</a></li>
                                        <li><a href="<?php echo home_url('/articles'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Articles</a></li>
                                        <li><a href="<?php echo home_url('/infographics'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Infographics</a></li>
                                        <li><a href="<?php echo home_url('/case-studies'); ?>"><i class="fa-sharp fa-regular fa-chevron-right"></i>Case Study</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="button-area-right-header">
                        <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-border">
                            Get in touch
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                        <div class="menu-btn-toggle">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

