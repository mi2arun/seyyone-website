

 
<?php include 'includes/header.php'; ?>
 
<!-- contact banner areas start -->
<div class="contact-page-banner jarallax bg_iamge">

</div>
<!-- contact banner areas end -->

<!-- contact area form wrapper start -->
<div class="contact-area-form-wrapper rts-section-gapTop">
    <div class="container-contact">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center-title-bg-white">
                    <h2 class="title">Get in touch</h2>
                    <p>We'd love to hear from you. Please fill out this form.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <form class="contact-form" action="mailer.php" method="post" id="contact-form">
                    <div class="half-input-wrapper">
                        <div class="single">
                            <label for="name">First name</label>
                            <input type="text" id="name" name="first_name" placeholder="First name" required>
                        </div>
                        <div class="single">
                            <label for="last">Last name</label>
                            <input type="text" id="last" name="last_name" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="single">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="you@company.com" required>
                    </div>
                    <div class="single">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="+1 (555) 000-0000">
                    </div>
                    <div class="single">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Leave us a message..."
                            required></textarea>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="agree"
                            required>
                        <label class="form-check-label" for="defaultCheck1">
                            You agree to our friendly privacy policy.
                        </label>
                    </div>
                    <button type="submit" class="rts-btn btn-primary">Send message
                        <img class="injectable" src="assets/images/service/icons/13.svg" alt="arrow">
                    </button>
                </form>
                <div id="form-messages"></div>
            </div>
        </div>
    </div>
</div>
<!-- contact area form wrapper end -->

<div class="rts-google-map-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.4691124052!2d76.99833857465073!3d10.997699855732064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859de62eed28d%3A0xad06f849d619bbf!2sSeyyone%20Group%20of%20Companies!5e0!3m2!1sen!2sin!4v1695127865421!5m2!1sen!2sin"
                        width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- rts location area start -->
<div class="rts-location-contact-area pt--70">
    <div class="container">
        <div class="row section-seperator-b pb--90 g-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="single-location-area-contact">
                    <div class="icon">
                        <i class="fa-sharp fa-regular fa-location-dot"></i>
                    </div>
                    <p>Registered Office</p>
                    <span>73, Anna Nagar, Ramanathapuram,</span>
                    <span>Coimbatore-641045. TN, India.</span>
                    <span>Mon-Sat 9am to 5pm.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts location area end -->

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const formMessages = document.getElementById('form-messages');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        
        fetch('mailer.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Clear previous messages
            formMessages.innerHTML = '';
            
            // Add success or error message
            if (data.success) {
                formMessages.innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
                form.reset(); // Reset form on success
            } else {
                formMessages.innerHTML = '<div class="alert alert-danger">' + data.message + '</div>';
            }
            
            // Fade out the message after 5 seconds
            setTimeout(function() {
                const alert = formMessages.querySelector('.alert');
                if (alert) {
                    // Add fade-out class
                    alert.style.transition = 'opacity 1s';
                    alert.style.opacity = '0';
                    
                    // Remove the element after fade completes
                    setTimeout(function() {
                        formMessages.innerHTML = '';
                    }, 1000);
                }
            }, 5000);
        })
        .catch(error => {
            formMessages.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again later.</div>';
            console.error('Error:', error);
            
            // Fade out error message as well
            setTimeout(function() {
                const alert = formMessages.querySelector('.alert');
                if (alert) {
                    alert.style.transition = 'opacity 1s';
                    alert.style.opacity = '0';
                    
                    setTimeout(function() {
                        formMessages.innerHTML = '';
                    }, 1000);
                }
            }, 5000);
        });
    });
});
</script>
