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

.hero-subtitle {
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.product-item {
    animation: fadeInUp 0.6s ease-out;
    transition: all 0.3s ease;
}

.product-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
}

.product-item .card-img-top {
    width: 100%;
    height: 280px;
    object-fit: cover;
    object-position: center;
    display: block;
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

.related-product-card {
    animation: fadeInUp 0.6s ease-out;
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.related-product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2);
}

.related-product-image {
    height: 200px;
    object-fit: cover;
    overflow: hidden;
}

.related-product-image img {
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease;
}

.related-product-card:hover .related-product-image img {
    transform: scale(1.1);
}
</style>

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png'); background-size: cover; background-position: center; min-height: 420px; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 class="display-3 text-white mb-3 hero-title">Carbon Technology Products</h1>
        <p class="text-white fs-5 mb-4 hero-subtitle">Precision-Engineered Carbon Components for Industrial Excellence</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active">Carbon Technology</li>
        </ol>
    </div>
</div>

<!-- PRODUCTS SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-primary mb-5 text-center">Our Carbon Technology Products</h2>
        <div class="row g-4">
            <!-- Carbon Gland Packing Ring -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/Carbon Gland Packing Ring.jpg" alt="Carbon Gland Packing Ring" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-ring text-primary me-2"></i>Carbon Gland Packing Ring
                        </h5>
                        <p class="text-muted small mb-3">High-quality carbon packing rings for shaft sealing in pumps and compressors.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Pumps & Compressors</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="carbon-gland-packing-ring.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Carbon Vanes / Vane Blade -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/carbonp2.jpg" alt="Carbon Vanes / Vane Blade" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-fan text-primary me-2"></i>Carbon Vanes / Vane Blade
                        </h5>
                        <p class="text-muted small mb-3">High-performance carbon vanes for vacuum pumps and rotary compressors.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Vacuum Pumps</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="carbon-vanes-vane-blade.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Carbon Rings -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/carbonring.png" alt="Carbon Rings" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-ring text-primary me-2"></i>Carbon Rings
                        </h5>
                        <p class="text-muted small mb-3">Precision-engineered carbon rings for industrial applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Industrial Sealing</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="carbon-rings.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Carbon Sealing Ring / Steam Joint Ring -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/cbnsealing.jpg" alt="Carbon Sealing Ring / Steam Joint Ring" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-ring text-primary me-2"></i>Carbon Sealing Ring / Steam Joint Ring
                        </h5>
                        <p class="text-muted small mb-3">Reliable sealing rings for mechanical seals and steam joints.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Mechanical Seals</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="carbon-sealing-ring.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Carbon Bush Bearing -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/vanesp1.png" alt="Carbon Bush Bearing" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-cog text-primary me-2"></i>Carbon Bush Bearing
                        </h5>
                        <p class="text-muted small mb-3">Self-lubricating carbon bush bearings for high-speed applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">High-Speed Machinery</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="carbon-bush-bearing.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Carbon Brush Bearing / Holder / Spring Job -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/carbonbrushes.jpg" alt="Carbon Brush Bearing / Holder / Spring Job" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-plug text-primary me-2"></i>Carbon Brush Bearing / Holder / Spring Job
                        </h5>
                        <p class="text-muted small mb-3">Precision brush bearings, holders and spring assemblies for electrical machines.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Motors & Generators</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="carbon-brush-bearing-holder-spring-job.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Carbon Brush -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/carbon-t1.png" alt="Carbon Brush" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-plug text-primary me-2"></i>Carbon Brush
                        </h5>
                        <p class="text-muted small mb-3">High-performance carbon brushes for electrical machines and rotating equipment.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Motors & Generators</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="carbon-brush.php" class="btn btn-primary btn-sm w-100">View Details</a>
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
                    <h5 class="fw-bold">Pumps & Compressors</h5>
                    <p class="text-muted">Shaft sealing and bearing applications</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Rotating Equipment</h5>
                    <p class="text-muted">Motors, generators, and turbines</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-flask fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Chemical Processing</h5>
                    <p class="text-muted">Industrial chemical equipment</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-wind fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Vacuum Systems</h5>
                    <p class="text-muted">Vacuum pumps and systems</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- RELATED PRODUCTS SECTION -->


<!-- CTA SECTION -->
<section class="py-5 bg-primary">
    <div class="container text-center">
        <h2 class="text-white mb-4">Need Carbon Technology Products?</h2>
        <p class="text-white fs-5 mb-4">Contact our team for customized solutions and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">Get in Touch</a>
    </div>
</section>

<?php include 'footer.php'; ?>
