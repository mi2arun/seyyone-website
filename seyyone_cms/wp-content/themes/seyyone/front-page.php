<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 

$banner_url = get_field('home_banner_image');
 
?>

<!-- Banner Section Start -->
<div class="about-banner-area-bg">
    <div class="banner-four-area banner-four-bg rts-section-gap jarallax" style="background-image: url('<?php echo esc_url($banner_url); ?>');">
     
         <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-four-wrapper">
                        <div class="inner-left" style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 10px; max-width: 90%;">
                            <h1 class="title wow fadeInUp" data-wow-offset="120" data-wow-delay=".2s" style="font-size: 30px;">
                                Transforming
                                <span class="wow move-right" data-wow-offset="120" style="color: #85c4f1; display: inline-block; margin-right: 10px;">Businesses</span>
                                Through
                                <span class="wow move-right" data-wow-offset="120" style="color: #85c4f1; display: inline-block; margin-right: 10px;">Technology</span>
                                & Expertise
                            </h1>
                            <p class="disc wow fadeInUp" data-wow-offset="120" data-wow-delay=".4s">
                                For over 25 years, Seyyone has been delivering innovative solutions in Healthcare KPO and Software Development to clients worldwide. Our
                                HIPAA-compliant services and cutting-edge technology solutions help businesses achieve operational excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Statistics Section Start -->
<div class="counter-up-wrapper mt-dec-80">
    <div class="container">
        <div class="row g-0">
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top border-left card" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/index/icons8-calendar-32.png" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">25</span>+ Years
                    </h3>                    <p style="font-size: clamp(12px, 2vw, 14px);">Industry Experience</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/08.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">70</span>+ Clients
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">across 8 countries</p>
                </div>
            </div>
          
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/04.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">150</span>+
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Employees</p>
                </div>
            </div>
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/index/icons8-application-32.png" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">40</span>+
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Software Projects</p>
                </div>
            </div>
           
             <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/02.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">25</span>+ EMR Modules
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Exposure</p>
                </div>
            </div>
             <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 16px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/03.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                          Scribed <span class="counter">40</span> Mn <br>Lines
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Summarized 8 Mn pages </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Statistics Section End -->
<br><br>

<!-- Dual Expertise Section Start -->
<div class="container">
    <div class="row">
        <!-- Healthcare KPO Card -->
        <div class="col-lg-6 mb-4">
            <div class="service-card bg-light p-5 rounded h-100 wow fadeInLeft" data-wow-delay="0.3s">
                <h3 class="mb-3"><span class="blue-underline">Hea</span>lthcare KPO</h3>
                <p class="mb-4">
                    Our HIPAA-compliant healthcare knowledge process outsourcing services help medical facilities streamline operations, reduce costs, and improve patient
                    care. With over 25 years of experience, we deliver accurate and timely solutions.
                </p>
                <div class="row">
                    <div class="col-md-7">
                        <ul class="service-list mb-4" style="list-style: none;">
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> EHR/EMR – Virtual Assistance</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> Medical Transcription</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> Medical Scribe</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> Medical Billing</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> Remote Medical Scribe Services</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> Medical Record Summarization</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> APS Summary</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff; ; margin-right: 8px;"></i> Peer Review Summary</li>
                        </ul>

                        <a href="<?php echo home_url('/healthcare-kpo'); ?>" class="rts-btn btn-border mb-4">
                            Explore Healthcare KPO
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div class="h-100 d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/Home - healthcare kpo1.jpg" alt="Healthcare KPO" class="img-fluid rounded" style="width: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Software Solutions Card -->
        <div class="col-lg-6 mb-4">
            <div class="service-card bg-light p-5 rounded h-100 wow fadeInRight" data-wow-delay="0.3s">
                <h3 class="mb-3"><span class="blue-underline">Sof</span>tware Solutions</h3>
                
                <p class="mb-4">
                    Our software development team creates custom solutions tailored to your specific business needs. We specialize in healthcare software, web
                    applications, mobile apps, and enterprise solutions that drive efficiency and growth.
                </p>
                <div class="row">
                    <div class="col-md-7">
                        <ul class="service-list mb-4" style="list-style: none;">
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 6px;"></i> Application Services</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 6px;"></i> Application development</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 6px;"></i> Mobile Solutions</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 6px;"></i> Cloud Solutions</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 6px;"></i> AI/ML Solutions</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 6px;"></i> Analytical and Reporting</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> Talent Management</li>
                            <li><i class="fa fa-check-circle" style="color: #3534ff ; margin-right: 8px;"></i> Remote Hardware Infra</li>
                        </ul>
                        <a href="<?php echo home_url('/software-solutions'); ?>" class="rts-btn btn-border mb-4">
                            Explore Software Solutions
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div class="h-100 d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/Home - software services.jpg" alt="Software Solutions" class="img-fluid rounded" style="width: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dual Expertise Section End -->

<!-- Our Values Section Start -->
<div class="keybenefits-area bg-light">
    <br>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="title-area-center-inner-with-sub">
                    <span>Our Core Values</span><br>
                    <h2 class="">The Principles That Guide Us</h2>
                    <p class="disc">
                        Our values form the foundation of our company culture and drive our approach to every client engagement.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-0 mt--15">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/04.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                    <span>Delivering the highest quality in everything we do</span>
                                    <a href="#">
                                        <h4 class="">Excellence</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industry/07.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Maintaining the highest ethical standards</span>
                                    <a href="#">
                                        <h4 class="">Integrity</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/02.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Constantly improving our solutions and processes</span>
                                    <a href="#">
                                        <h4 class="">Innovation</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
           </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/03.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Putting our clients' needs at the center of our work</span>
                                    <a href="#">
                                        <h4 class="">Client Focus</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
           </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/21.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">

                                                  <div class="left-content">
                                 <span>Working together to achieve exceptional results</span>
                                    <a href="#">
                                        <h4 class="">Collaboration</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
           </div>

           <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/22.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Adhering to all regulatory requirements</span>
                                    <a href="#">
                                        <h4 class="">Compliance</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
           </div>

           <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/23.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Protecting sensitive data with robust measures</span>
                                    <a href="#">
                                        <h4 class="">Security</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
           </div>

           <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/24.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Leveraging deep domain knowledge</span>
                                    <a href="#">
                                        <h4 class="">Expertise</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="over_link"></a>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
<!-- Our Values Section End -->
<br>

<!-- Our Clients Section Start -->
<div class="single-benefits-area-wrapper bg-light" id="clients">
    <div class="rts-brand-area-start pt--20" dir="ltr" >
        <div class="container">
            <div class="title-area-center-inner-with-sub">
                <span>Our Clients</span><br>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-area-main-wrapper" style="padding: 20px;">
                        <div class="swiper mySwiper-brand swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-0e4197335dd454510" aria-live="off"
                                style="transition-duration: 0ms; transform: translate3d(-1919.12px, 0px, 0px); transition-delay: 0ms;">

                                <div class="swiper-slide" role="group" aria-label="7 / 10" data-swiper-slide-index="6" style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/220px-Epic.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="8 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="7">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/bkg-login-CaretrackerHarris-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="9 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="8">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/bkg-login-CaretrackerHarris.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="10 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="9">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/curemd-142-52.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="1 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="0">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/salesforce.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="1">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/main-logo.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 10" data-swiper-slide-index="2" style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/netsuite.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 10" data-swiper-slide-index="3"
                                    style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/nextgen-logo-color.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 10" data-swiper-slide-index="4"
                                    style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/logo-color.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 10" data-swiper-slide-index="5"
                                    style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/Workday.png" alt="brand">
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

 <!-- Testimonials Section Start -->
<div class="rts-testimonials-area-about rts-section-gap bg-dark-1" dir="ltr" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonails-title-wrapper-between">
                    <h2 class="title">What they said about us</h2>
                    <div class="swiper-btn">
                        <a href="<?php echo home_url('/testimonials'); ?>" class="rts-btn btn-primary">
                            View More
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt--55">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-testimonials-about" style="height: 250px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                            <p class="disc" style="flex-grow: 1; overflow: hidden;">
                                "Thx for all of your help. You're a good teammate.
                                I know that it has saved my practice and enjoyment of medicine."
                            </p>
                            <div class="author-area" style="margin-top: auto;">
                                <div class="information">
                                    <h5 class="title">Plastic Surgeon on the West Coast</h5>
                                    <p>USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-testimonials-about" style="height: 250px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                            <p class="disc" style="flex-grow: 1; overflow: hidden;">
                                "We feel your company is trustworthy and would like to give you the business instead of looking
                                elsewhere and thanks for keeping up a high standard."
                            </p>
                            <div class="author-area" style="margin-top: auto;">
                                <div class="information">
                                    <h5 class="title">Orthopedic Physician</h5>
                                    <p>Australia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-testimonials-about" style="height: 250px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                            <p class="disc" style="flex-grow: 1; overflow: hidden;">
                                "Thank you for continuing to do a wonderful job with our transcription!
                                Great job! I'm impressed. Thank you so much! I'm excited that this transition is turning out to be easier
                                than I was expecting."
                            </p>
                            <div class="author-area" style="margin-top: auto;">
                                <div class="information">
                                    <h5 class="title">Office Manager, Oregon Eye Clinic</h5>
                                    <p>USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Section End -->


<!-- Contact area start -->
<div class="contact-area-start rts-section-gap bg_color-dark-5" style="padding: 40px 0;" id="ourclients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-footer-5">
                    <h5 class="title">Our Client Geographies</h5>
                </div>
            </div>
        </div>
       <div class="row mt-4 d-none d-md-block">
            <div class="col-lg-12">
                <div class="thumbnail-map" style="position: relative; height: 350px; overflow: hidden;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/01.webp" alt="banner" style="width: 100%; height: auto; max-height: 350px; object-fit: contain;">
                    <!-- Adjusted tooltip positions with percentage-based positioning -->
                    <div class="map-tool-tip-single" style="position: absolute; top: 30%; left: 35%;">
                        <a href="#" class="map-tooltip" data-tooltip="California USA,Mid Hourse #25" tabindex="0">
                            <span></span>
                        </a>
                    </div>
                    <div class="map-tool-tip-single two" style="position: absolute; top: 45%; left: 55%;">
                        <a href="#" class="map-tooltip" data-tooltip="Dubai USA,Mid Hourse #25" tabindex="0">
                            <span></span>
                        </a>
                    </div>
                    <div class="map-tool-tip-single three" style="position: absolute; top: 35%; left: 30%;">
                        <a href="#" class="map-tooltip" data-tooltip="Los Angeles" tabindex="0">
                            <span></span>
                        </a>
                    </div>
                                        <div class="map-tool-tip-single four" style="position: absolute; top: 40%; left: 60%;">
                        <a href="#" class="map-tooltip" data-tooltip="Dubai DU,Mid Hourse #25" tabindex="0">
                            <span></span>
                        </a>
                    </div>
                    <div class="map-tool-tip-single five" style="position: absolute; top: 35%; left: 70%;">
                        <a href="#" class="map-tooltip" data-tooltip="japan USA,Mid Hourse #25" tabindex="0">
                            <span></span>
                        </a>
                    </div>
                    <div class="map-tool-tip-single six" style="position: absolute; top: 30%; left: 65%;">
                        <a href="#" class="map-tooltip" data-tooltip="Koria USA,Mid Hourse #25" tabindex="0">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 d-none d-md-block">
            <div class="col-lg-24">
                <div class="map-location-area" style="display: flex; flex-wrap: wrap; gap: 5px;">
                    <div class="location-single" style="flex: 0 0 3%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">USA</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 2%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">UK</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 45; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Canada</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 6%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Australia</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 6%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Ireland</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 6%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Germany</h3>
                    </div>
                    <div class="location-single" style="flex: 0 9%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Netherlands</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 4%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">India</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 d-block d-md-none">
            <div class="col-12">
                <div class="mobile-countries-grid">
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">USA</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;"> UK</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;"> Canada</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;"> Australia</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">Ireland</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">Germany</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">Netherlands</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">India</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<br><br>

<!-- Call to Action Section -->
<div class="rts-call-to-action-area-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Ready to Transform Your Business?</h2>
                <p class="disc">
                    Schedule a no-obligation consultation to discuss your unique needs and how Seyyone can help streamline your operations and technology solutions.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                   Get in touch
                    <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>

<?php get_footer(); ?>

