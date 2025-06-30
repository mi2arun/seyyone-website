<?php
/**
 * Template Name: Healthcare KPO Template
 * Using Custom Modal System with Dynamic Content
 */
get_header(); 
?>

<!-- Your Modal HTML -->
<div id="modalOverlay"></div>
<div id="myModal">
    <div class="modal-header-bar">
        <span class="close-button" onclick="closeModal()">&times;</span>
    </div>
    <div id="modalContent" class="modal-scroll-body">
        <!-- Content will be dynamically inserted here -->
    </div>
</div>

<!-- Banner Section -->
<div class="rts-service-banner-area ptb--80 position-relative">
    <div class="container">
        <div class="row d-flex align-items-center">
          
              <div class="col-lg-7 mb_md--30 mb_sm--30">
                      <div class="banner-wrapper-one">
                      
                        <h1 class="title wow fadeInUp" data-wow-delay=".3s" style="font-size: 55px">Be the most <br> trusted & respected <span>healthcare</span>
                            KPO</h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Seyyone provides complete revenue cycle management solutions to the healthcare community, that allow our exclusive clientele to have more face time with their patients and distress about billing and collections.</p>
                        <a href="#healthcare-services" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".7s">
                            View Solutions
                         <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/01.svg" alt="icons">
                        </a>
                    </div>
                </div>
            <div class="col-lg-5">
               <div class="thumbnail-bannr-service-right jarallax">
                        <img class=" " src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/medical-banner-with-stethoscope.jpg" alt="serivce-area"  >
                    </div>
                
            </div>
        </div>
    </div>
</div>

<!-- Healthcare Services Section -->
<div class="rts-service-area">
    <div class="container">
        <div class="bg-gradient-one-industry">
            <br><br>
            <div class="title-area-center-inner-with-sub" id="healthcare-services">
                <span>Our Services</span>
            </div>

            <div class="rts-case-studies-area rts-section-gapBottom mt_sm--30">
                <div class="container">
                    <div class="row g-80 mt--0">
                        <?php
                        // Get Healthcare Services from WordPress
                        $healthcare_services = new WP_Query(array(
                            'post_type' => 'healthcare_service',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'ASC'
                        ));

                        if ($healthcare_services->have_posts()) :
                            $delay_counter = 0;
                            while ($healthcare_services->have_posts()) : $healthcare_services->the_post();
                                $post_id = get_the_ID();
                                $title = get_the_title();
                                $excerpt = get_the_excerpt();
                                $service_id = get_post_meta($post_id, '_healthcare_service_id', true);
                                
                                // Calculate delay for animation
                                $delay_values = array('', '.2s', '.4s');
                                $delay_attr = $delay_counter > 0 ? ' data-wow-delay="' . $delay_values[$delay_counter % 3] . '"' : '';
                        ?>
                        
                        <!-- Healthcare Service Card with ID for URL anchoring -->
                        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-offset="120"<?php echo $delay_attr; ?> id="<?php echo esc_attr($service_id); ?>">
                            <div class="single-case-studies-three">
                                <!-- Service Image -->
                                <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" class="thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array(
                                            'alt' => 'healthcare-service',
                                            'style' => 'width: 100%; height: 250px; object-fit: cover;'
                                        )); ?>
                                    <?php else : ?>
                                        <div style="width: 100%; height: 250px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d; border: 2px dashed #dee2e6;">
                                            <div style="text-align: center;">
                                                <i class="fa fa-heartbeat" style="font-size: 48px; margin-bottom: 10px; display: block; color: #28a745;"></i>
                                                <strong>No Image Set</strong><br>
                                                <small>Add featured image</small>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </a>
                                
                                <!-- Service Content -->
                                <div class="inner-content">
                                    <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')">
                                        <h4 class="title"><?php echo esc_html($title); ?></h4>
                                    </a>
                                    <p><?php echo $excerpt ? esc_html($excerpt) : 'Click to learn more about this healthcare service.'; ?></p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        <?php 
                                $delay_counter++;
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                        
                       
                        
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="rts-cts-area pt--120 pt_md--60 pt_sm--50">
    <div class="container">
        <div class="row">
            <div class="col-gl-12">
                <div class="cta-one-wrapper">
                    <div class="shape-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/02.png" alt="cta-area">
                    </div>
                    <div class="left-area">
                        <h3 class="title wow fadeInUp" data-wow-delay=".1s">Book a Free Consultation</h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            Schedule a no-obligation consultation to discuss your healthcare outsourcing needs and how Seyyone can enhance your medical operations.
                        </p>
                        <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                            Get in Touch
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                    <div class="right wow move-out" data-wow-offset="140">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/01.png" alt="cta-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<!-- Your Modal CSS - Healthcare Theme -->
<style> 
#modalOverlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  z-index: 999;
}

/* Modal box */
#myModal {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 90%;
  max-height: 90vh;
  background: #fff;
  border-radius: 10px;
  transform: translate(-50%, -50%);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  z-index: 1000;
  overflow: hidden;
}

/* Scroll-lock when modal is open */
body.modal-open {
  overflow: hidden;
  position: fixed;
  width: 100%;
}

/* Scrollable content area inside modal */
#modalContent.modal-scroll-body {
  max-height: calc(90vh - 50px);
  overflow-y: auto;
  padding: 20px;
}

/* Close button */
.close-button {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 28px;
  background: #eee;
  border-radius: 0 0 0 12px;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.close-button:hover {
  background: #ddd;
}

/* Modal image styling */
#modalContent img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 10px;
}

/* Feature item section only layout */
.feature-item {
  margin-bottom: 20px;
}

/* Remove extra font styling to inherit site-wide styles */
#modalContent h1,
#modalContent h2,
#modalContent h3,
#modalContent h4,
#modalContent h5,
#modalContent h6,
#modalContent p,
#modalContent ul,
#modalContent li {
  
  display: revert;
  margin-bottom: 15px;
  line-height: 1.6;
}

/* Modal body layout */
.content-body {
  padding: 0 20px;
}

/* Header row (top of modal) */
.header-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 25px;
  padding: 0px 20px;
  border-radius: 10px;
}

/* Modal image on left */
.left-image {
  flex: 0 0 auto;
  margin-right: 15px;
}

/* Make circular image */
.left-image img {
  width: 70px;
  height: 70px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #3498db;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Modal title in header */
.center-title {
  flex: 1;
  text-align: center;
  padding: 0 10px;
  min-width: 0;
}

/* Mobile responsive */
@media (max-width: 768px) {
  #myModal {
    width: 95%;
  }

  .header-row {
    flex-direction: column;
    text-align: center;
  }

  .left-image {
    margin-right: 0;
    margin-bottom: 15px;
  }
}
</style>

<!-- JavaScript for Modal -->
<script>
    // Store current scroll position
 let currentScrollY = 0;
function openModal(serviceId) {
  currentScrollY = window.scrollY;
    console.log('Opening modal for service:', serviceId);
 
    
    // Show overlay and modal
    document.getElementById('modalOverlay').style.display = 'block';
    document.getElementById('myModal').style.display = 'block';
    document.body.classList.add('modal-open');
    
    // Show loading
    document.getElementById('modalContent').innerHTML = '<div style="text-align: center; padding: 40px;"><div style="font-size: 24px; color: #28a745; margin-bottom: 15px;"><i class="fa fa-spinner fa-spin"></i></div><p>Loading...</p></div>';
    
    // AJAX call to get service content
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '<?php echo admin_url('admin-ajax.php'); ?>', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById('modalContent').innerHTML = xhr.responseText;
            } else {
                document.getElementById('modalContent').innerHTML = '<div style="text-align: center; padding: 40px;"><p style="color: #dc3545;">Error loading healthcare service. Please try again.</p></div>';
            }
        }
    };
    
    xhr.send('action=get_healthcare_service_by_id&service_id=' + encodeURIComponent(serviceId));
      
    document.body.classList.add('modal-open');
    document.body.style.top = `-${currentScrollY}px`;
    
    modal.style.display = 'block';
    overlay.style.display = 'block';
    modal.scrollTop = 0;
}

function closeModal() {
    document.getElementById('modalOverlay').style.display = 'none';
    document.getElementById('myModal').style.display = 'none';
    document.body.classList.remove('modal-open');
     document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.width = '';

    // Restore scroll position
    window.scrollTo(0, currentScrollY);
}

// Close modal when clicking overlay
document.getElementById('modalOverlay').addEventListener('click', closeModal);

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});
</script>

<?php get_footer(); ?>

