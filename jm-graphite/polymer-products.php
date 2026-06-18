<?php include 'header.php'; ?>

<link rel="stylesheet" href="product-animations.css">

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

.hero-title {
    animation: slideInDown 0.8s ease-out;
    cursor: default;
}

.hero-title:hover {
    text-decoration: none !important;
    transform: none !important;
}

.product-item {
    animation: fadeInUp 0.6s ease-out;
    transition: all 0.3s ease;
}

.product-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
}

.breadcrumb-item {
    animation: fadeInUp 0.6s ease-out 0.3s both;
}

.product-details {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 15px;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px solid #e0e0e0;
}

.detail-item:last-child {
    border-bottom: none;
}

.detail-label {
    font-weight: 600;
    color: #333;
}

.detail-value {
    color: #666;
}

.section-title {
    animation: fadeInUp 0.6s ease-out;
    cursor: default;
}

.section-title:hover {
    text-decoration: none !important;
    transform: none !important;
}

.application-item {
    animation: fadeInUp 0.6s ease-out;
    transition: all 0.3s ease;
}

.application-item:hover {
    transform: translateY(-8px);
}

.application-item i {
    transition: all 0.3s ease;
}

.application-item:hover i {
    transform: scale(1.2);
    color: #c82333;
}

.gallery-item {
    animation: fadeInUp 0.6s ease-out;
    transition: all 0.3s ease;
    overflow: hidden;
    border-radius: 12px;
    aspect-ratio: 1;
}

.gallery-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}
</style>

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png'); background-size: cover; background-position: center; min-height: 420px; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 class="display-3 text-white mb-3 hero-title">Polymer Products</h1>
        <p class="text-white fs-5 mb-4">Advanced Polymer & Composite Solutions for Industrial Applications</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active">Polymer Products</li>
        </ol>
    </div>
</div>

<!-- PRODUCTS SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-primary mb-5 text-center">Our Polymer Products</h2>
        <div class="row g-4">
            <!-- Carbon Fiber Composite Polymer Sheet -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/polymer-composite.jpg" class="card-img-top" alt="Carbon Fibre Composite Polymer Sheet">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-cube text-primary me-2"></i>Carbon Fibre Composite Polymer Sheet
                        </h5>
                        <p class="text-muted small mb-3">High-strength carbon fiber reinforced polymer composites for precision engineering applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon Fiber Composite</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Forms:</span>
                                <span class="detail-value">Sheet & Rod</span>
                            </div>
                        </div>
                        <a href="carbon-fibre-composite-polymer-sheet.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Carbon Teflon / PTFE Products -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/polymer-teflon.jpg" class="card-img-top" alt="Carbon Teflon / PTFE Products">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-ring text-primary me-2"></i>Carbon Teflon / PTFE Products
                        </h5>
                        <p class="text-muted small mb-3">Carbon teflon and PTFE products for industrial sealing applications with superior chemical resistance.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon & Teflon PTFE</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Brand:</span>
                                <span class="detail-value">JM Graphite</span>
                            </div>
                        </div>
                        <a href="carbon-teflon-ptfe-products.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Peak Products (PEEK) -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/polymer-peek.jpg" class="card-img-top" alt="Peak Products (PEEK)">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-crown text-primary me-2"></i>Peak Products (PEEK)
                        </h5>
                        <p class="text-muted small mb-3">Premium high-performance PEEK polymer for demanding industrial applications with exceptional properties.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">PEEK (Polyetheretherketone)</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Brand:</span>
                                <span class="detail-value">JM Graphite</span>
                            </div>
                        </div>
                        <a href="peak-products-peek.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- APPLICATIONS SECTION -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-primary mb-5 text-center section-title">Applications</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-industry fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Aerospace & Aviation</h5>
                    <p class="text-muted">High-performance aerospace components</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-fire fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Oil & Gas</h5>
                    <p class="text-muted">Harsh environment sealing solutions</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Industrial Machinery</h5>
                    <p class="text-muted">Lubrication and sealing components</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-flask fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Chemical Processing</h5>
                    <p class="text-muted">High-temperature applications</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-5 bg-primary">
    <div class="container text-center">
        <h2 class="text-white mb-4">Need Premium Polymer Solutions?</h2>
        <p class="text-white fs-5 mb-4">Contact our expert team for customized solutions, technical support, and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">Get in Touch</a>
    </div>
</section>

<?php include 'footer.php'; ?>
