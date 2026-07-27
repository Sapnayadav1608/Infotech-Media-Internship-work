<?php
$page_title = "Contact Us | JM Graphite & Carbon (India) LLP";
$meta_description = "Get in touch with JM Graphite & Carbon (India) LLP for high-quality industrial carbon & graphite components. Request a quote or inquiry today.";
$meta_keywords = "Contact JM Graphite, Carbon Supplier Inquiry, Graphite Products Quote";
include 'header.php';
?>

<link rel="stylesheet" href="css/enhanced-animations.css">

<style>
    /* Global Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    .hero-title {
        animation: slideInDown 0.8s ease-out;
        cursor: default;
    }

    .hero-title:hover {
        text-decoration: none !important;
        transform: none !important;
    }

    .hero-subtitle {
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    .contact-form {
        animation: slideInLeft 0.8s ease-out;
    }

    .contact-info {
        animation: slideInRight 0.8s ease-out;
    }

    .contact-card {
        animation: scaleIn 0.6s ease-out;
        transition: all 0.3s ease;
        border: none !important;
        border-radius: 12px !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08) !important;
    }

    .contact-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2) !important;
    }

    .contact-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    }

    .contact-card {
        position: relative;
    }

    .breadcrumb-item {
        animation: fadeInUp 0.6s ease-out 0.3s both;
    }

    .why-contact-item {
        animation: fadeInUp 0.6s ease-out;
        transition: all 0.3s ease;
    }

    .why-contact-item:hover {
        transform: translateY(-5px);
    }

    .why-contact-item i {
        transition: all 0.3s ease;
    }

    .why-contact-item:hover i {
        color: #c82333 !important;
        transform: scale(1.1);
    }
</style>

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png');
background-size: cover;
background-position: center;
min-height: 420px;
display:flex;
align-items:center;">

    <div class="container text-center">

        <h1 class="display-3 text-white mb-3 hero-title">
            Contact Us
        </h1>

        <p class="text-white fs-5 mb-4 hero-subtitle">
            Get in touch with our team
        </p>

        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active breadcrumb-item">
                Contact
            </li>
        </ol>

    </div>
</div>


<!-- CONTACT SECTION -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6 contact-form">

                <h4 class="text-primary fw-bold mb-2">
                    Get In Touch
                </h4>

                <h2 class="fw-bold mb-4">
                    Send us a Message
                </h2>

                <form method="POST" action="send-mail.php">

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label fw-bold">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91 XXXXX XXXXX" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label fw-bold">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label fw-bold">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message here..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-pill text-white py-3 px-5">
                        Send Message
                    </button>

                </form>

            </div>


            <div class="col-lg-6 contact-info">

                <h4 class="text-primary fw-bold mb-2">
                    Contact Information
                </h4>

                <h2 class="fw-bold mb-4">
                    We're Here to Help
                </h2>

                <div class="mb-4 contact-card card border-0 shadow-lg p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-map-marker-alt text-primary fa-2x me-4 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-2">Address</h5>
                            <p class="text-muted mb-0">
                                Unit No. 2, Ground Floor, Building No. 1<br>
                                Riddhi Siddhi Sagar Industrial Premises<br>
                                Raj Vishnu Compound, Wali Road<br>
                                Vasai East, Thane – 401208<br>
                                Maharashtra, India
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mb-4 contact-card card border-0 shadow-lg p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-phone-alt text-primary fa-2x me-4 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-2">Phone</h5>
                            <p class="text-muted mb-0">
                                <a href="tel:9820449698" class="text-decoration-none text-muted">9820449698</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mb-4 contact-card card border-0 shadow-lg p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-envelope text-primary fa-2x me-4 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-2">Email</h5>
                            <p class="text-muted mb-0">
                                <a href="mailto:jmgraphite@gmail.com" class="text-decoration-none text-muted">carbonhome@hotmail.com</a><br>
                                <a href="  sales@jmgraphite.in" class="text-decoration-none text-muted">sales@jmgraphite.in</a><br>
                                
                            </p>
                        </div>
                    </div>
                </div>

                <div class="contact-card card border-0 shadow-lg p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-clock text-primary fa-2x me-4 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-2">Business Hours</h5>
                            <p class="text-muted mb-0">
                                Monday - Saturday: 9:00 AM - 6:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- WHY CONTACT US -->
<section class="py-5 bg-white">
    <div class="container">

        <h2 class="text-center text-primary mb-5">
            Why Contact JM Graphite & Carbon
        </h2>

        <div class="row text-center">

            <div class="col-md-3 why-contact-item">
                <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                <h5>Expert Support</h5>
                <p class="text-muted">Our team is ready to assist you with any inquiries</p>
            </div>

            <div class="col-md-3 why-contact-item">
                <i class="fas fa-bolt fa-3x text-primary mb-3"></i>
                <h5>Quick Response</h5>
                <p class="text-muted">We respond to all inquiries within 24 hours</p>
            </div>

            <div class="col-md-3 why-contact-item">
                <i class="fas fa-handshake fa-3x text-primary mb-3"></i>
                <h5>Custom Solutions</h5>
                <p class="text-muted">Tailored products and services for your needs</p>
            </div>

            <div class="col-md-3 why-contact-item">
                <i class="fas fa-check-circle fa-3x text-primary mb-3"></i>
                <h5>Quality Assured</h5>
                <p class="text-muted">50+ years of manufacturing excellence</p>
            </div>

        </div>

        <!-- Map Section Start -->
        <div class="new-map-section" style="margin-top: 60px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1162073928526!2d72.8553580752137!3d19.40738438186668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ae9400000001%3A0x36b6f33995df3803!2sJ.M.%20GRAPHITE%20%26%20CARBON%20(INDIA)%20LLP!5e0!3m2!1sen!2sin!4v1773406684496!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>