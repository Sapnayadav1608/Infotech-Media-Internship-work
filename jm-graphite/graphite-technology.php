<?php
$page_title = "Graphite Technology Products | JM Graphite & Carbon";
$meta_description = "Discover premium graphite technology products including graphite rails, graphite crucibles, graphite EDM electrodes, and sliding parts.";
$meta_keywords = "Graphite Technology, Graphite Products, Graphite Crucibles, Graphite Rails";
include 'header.php';
?>

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
        <h1 class="display-3 text-white mb-3 hero-title">Graphite Technology Products</h1>
        <p class="text-white fs-5 mb-4">Precision-Engineered Graphite Components for Industrial Excellence</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active">Graphite Technology</li>
        </ol>
    </div>
</div>

<!-- PRODUCTS SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-primary mb-5 text-center">Our Graphite Technology Products</h2>
        <div class="row g-4">
            <!-- Graphite Rails for Monforts -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/gr.png" alt="Graphite Rails for Monforts Stenter" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-bars text-primary me-2"></i>Graphite Rails for Monforts Stenter
                        </h5>
                        <p class="text-muted small mb-3">Precision-engineered graphite rails for textile machinery applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Textile Machinery</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Graphite Carbon</span>
                            </div>
                        </div>
                        <a href="graphite-rails-monforts-stenter.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Graphite Blocks -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/gb.png" alt="Graphite Blocks" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-cube text-primary me-2"></i>Graphite Blocks
                        </h5>
                        <p class="text-muted small mb-3">Durable graphite blocks for industrial lubrication applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Shape:</span>
                                <span class="detail-value">Rectangular</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Graphite</span>
                            </div>
                        </div>
                        <a href="polymer-graphite-blocks.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Graphite Rod for Lubrication -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/graprode.png" alt="Graphite Rod for Lubrication" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-bars text-primary me-2"></i>Graphite Rod for Lubrication
                        </h5>
                        <p class="text-muted small mb-3">Self-lubricating graphite rods for roller machine support.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Type:</span>
                                <span class="detail-value">Self-Lubricating</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Graphite</span>
                            </div>
                        </div>
                        <a href="graphite-rod-lubrication.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Graphite Sliding Parts -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/grapsli.png" alt="Graphite Sliding Parts" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-sliders-h text-primary me-2"></i>Graphite Sliding Parts
                        </h5>
                        <p class="text-muted small mb-3">Precision machined graphite components for smooth sliding applications.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Industrial Machinery</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Graphite</span>
                            </div>
                        </div>
                        <a href="polymer-graphite-sliding-part.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Graphite Crucibles & V Block -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/gracruci.png" alt="Graphite Crucibles & V Block" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-flask text-primary me-2"></i>Graphite Crucibles & V Block
                        </h5>
                        <p class="text-muted small mb-3">High-temperature graphite components for diamond industries.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Diamond Industry</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Graphite</span>
                            </div>
                        </div>
                        <a href="graphite-crucibles-v-block.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Graphite Crucibles -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/crucibles.png" alt="Graphite Crucibles" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-flask text-primary me-2"></i>Graphite Crucibles
                        </h5>
                        <p class="text-muted small mb-3">High-temperature graphite crucibles for metal melting and casting.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Max Temperature:</span>
                                <span class="detail-value">1000-1500°C</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Graphite</span>
                            </div>
                        </div>
                        <a href="polymer-graphite-crucibles.php" class="btn btn-primary btn-sm w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Graphite Lungs & Lock Pins -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow product-item h-100">
                    <img src="img/gralung.png" alt="Graphite Lungs & Lock Pins" class="card-img-top">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-link text-primary me-2"></i>Graphite Lungs & Lock Pins
                        </h5>
                        <p class="text-muted small mb-3">Specialized graphite components for Famatex Stenter machines.</p>
                        <div class="product-details mb-3">
                            <div class="detail-item">
                                <span class="detail-label">Application:</span>
                                <span class="detail-value">Stenter Machinery</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Material:</span>
                                <span class="detail-value">Carbon</span>
                            </div>
                        </div>
                        <a href="graphite-lungs-famatex.php" class="btn btn-primary btn-sm w-100">View Details</a>
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
                    <h5 class="fw-bold">Textile Industry</h5>
                    <p class="text-muted">Stenter machines and textile equipment</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-fire fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Cement Industry</h5>
                    <p class="text-muted">Rotary kiln sealing systems</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-flask fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Metal Casting</h5>
                    <p class="text-muted">Crucibles and melting equipment</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 application-item">
                <div class="text-center">
                    <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Machinery</h5>
                    <p class="text-muted">Industrial machinery components</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-5 bg-primary">
    <div class="container text-center">
        <h2 class="text-white mb-4">Need Graphite Technology Products?</h2>
        <p class="text-white fs-5 mb-4">Contact our team for customized solutions and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">Get in Touch</a>
    </div>
</section>

<?php include 'footer.php'; ?>
