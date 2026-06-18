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

.card-img-top {
    height: auto;
    max-height: 250px;
    object-fit: contain;
    padding: 10px;
    background-color: #f8f9fa;
}

.related-product-card { animation: fadeInUp 0.6s ease-out; border: none; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: white; position: relative; }
.related-product-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); }
.related-product-card:hover { transform: translateY(-12px); box-shadow: 0 20px 50px rgba(220, 53, 69, 0.25); }
.related-product-image { aspect-ratio: 4/3; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); display: flex; align-items: center; justify-content: center; padding: 15px; }
.related-product-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
.related-product-card:hover .related-product-image img { transform: scale(1.08); }
.related-product-card .card-body { padding: 20px; }
.related-product-card .card-title { font-size: 1.1rem; color: #333; margin-bottom: 8px; }
.related-product-card .card-text { font-size: 0.9rem; color: #999; margin-bottom: 15px; }
.related-product-card .btn { border-radius: 8px; font-weight: 600; transition: all 0.3s ease; }
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
        <h1 class="display-3 text-white mb-3 hero-title">Mechanical Shaft Seals</h1>
        <p class="text-white fs-5 mb-4">Advanced Sealing Solutions for Pumps & Compressors</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active">Mechanical Seals</li>
        </ol>
    </div>
</div>

<!-- PRODUCTS SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-primary mb-5 text-center">Our Mechanical Seal Products</h2>
        <div class="row g-4">
            <!-- Plain Shaft Seals -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/plain-shaft-seals.png" class="card-img-top" alt="Plain Shaft Seals">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-ring text-primary me-2"></i>Plain Shaft Seals
                        </h5>
                        <p class="text-muted small mb-3">Standard mechanical shaft seals for general pump applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">General Pumps</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon & Ceramic</span>
                            </div>
                        </div>
                        <a href="plain-shaft-seals.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Pumping Screw Seals -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/pumping-screw-seals.png" class="card-img-top" alt="Pumping Screw Seals">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-screw text-primary me-2"></i>Pumping Screw Seals
                        </h5>
                        <p class="text-muted small mb-3">Advanced pumping screw seals for high-performance pump systems.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">High-Performance Pumps</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon & Ceramic</span>
                            </div>
                        </div>
                        <a href="pumping-screw-seals.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Spring Seals -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/singlespringseals.png" class="card-img-top" alt="Single Spring Seals">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-spring text-primary me-2"></i>Single Spring Seals
                        </h5>
                        <p class="text-muted small mb-3">Single spring unbalanced seals for pump applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Pump Applications</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon & Ceramic</span>
                            </div>
                        </div>
                        <a href="single-spring-seals.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Mechanical Shaft Seals -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/shaftseals.png" class="card-img-top" alt="Mechanical Shaft Seals">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-ring text-primary me-2"></i>Mechanical Shaft Seals
                        </h5>
                        <p class="text-muted small mb-3">Precision mechanical shaft seals for pumps and compressors.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Pumps & Compressors</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon & Ceramic</span>
                            </div>
                        </div>
                        <a href="mechanical-shaft-seals.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Double Mechanical Seals -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/mechanicalseals.png" class="card-img-top" alt="Double Mechanical Seals">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-ring text-primary me-2"></i>Double Mechanical Seals
                        </h5>
                        <p class="text-muted small mb-3">Advanced double mechanical seals for critical applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Critical Applications</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon & Ceramic</span>
                            </div>
                        </div>
                        <a href="double-mechanical-seals.php" class="btn btn-primary btn-sm w-100">View Details</a>
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
                    <i class="fas fa-water fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Water Pumps</h5>
                    <p class="text-muted">Centrifugal and submersible pumps</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-wind fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Compressors</h5>
                    <p class="text-muted">Air and gas compressors</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-flask fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Chemical Pumps</h5>
                    <p class="text-muted">Corrosive fluid handling</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Industrial Equipment</h5>
                    <p class="text-muted">Rotating machinery</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- RELATED PRODUCTS SECTION -->


<!-- CTA SECTION -->
<section class="py-5 bg-primary">
    <div class="container text-center">
        <h2 class="text-white mb-4">Need Mechanical Seals?</h2>
        <p class="text-white fs-5 mb-4">Contact our team for customized solutions and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">Get in Touch</a>
    </div>
</section>

<?php include 'footer.php'; ?>
