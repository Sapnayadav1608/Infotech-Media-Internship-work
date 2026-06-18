<?php include 'header.php'; ?>

<meta name="description" content="Carbon Brush Bearing, Holder, and Spring Job components for motors and generators. Precision electrical machine components from JM Graphite & Carbon.">
<meta name="keywords" content="carbon brush bearing, brush holder, spring job, motor components, generator components">
<link rel="stylesheet" href="css/product-animations.css">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Carbon Brush Bearing / Holder / Spring Job",
  "description": "Precision brush bearings, holders and spring assemblies for electrical machines.",
  "image": "https://jmgraphite.com/img/carbonbrushes.jpg",
  "brand": {"@type": "Brand", "name": "JM Graphite & Carbon (India) LLP"},
  "manufacturer": {"@type": "Organization", "name": "JM Graphite & Carbon (India) LLP", "url": "https://jmgraphite.com"},
  "category": "Carbon Technology",
  "material": "Carbon & Brass",
  "offers": {"@type": "Offer", "availability": "https://schema.org/InStock", "priceCurrency": "INR", "price": "Contact for pricing"}
}
</script>

<style>
@keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
@keyframes slideInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
@keyframes slideInLeft { from { opacity: 0; transform: translateX(-30px); } to { opacity: 1; transform: translateX(0); } }
@keyframes slideInRight { from { opacity: 0; transform: translateX(30px); } to { opacity: 1; transform: translateX(0); } }
@keyframes zoomIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
@keyframes bounceIn { 0% { opacity: 0; transform: scale(0.3); } 50% { opacity: 1; transform: scale(1.05); } 70% { transform: scale(0.9); } 100% { transform: scale(1); } }
@keyframes rotateIn { from { opacity: 0; transform: rotate(-5deg) scale(0.95); } to { opacity: 1; transform: rotate(0) scale(1); } }
@keyframes pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }

.hero-title { animation: slideInDown 0.8s ease-out; }
.hero-title:hover { text-decoration: none !important; transform: none !important; }
.breadcrumb-item { animation: fadeInUp 0.6s ease-out 0.3s both; }
.product-gallery { animation: slideInLeft 0.8s cubic-bezier(0.34, 1.56, 0.64, 1); }
.product-image-main {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: contain;
    object-position: center;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    display: block;
}
.product-image-main:hover { transform: scale(1.05) rotateY(2deg); }
.product-info-card { animation: slideInRight 0.8s cubic-bezier(0.34, 1.56, 0.64, 1); background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: none; border-radius: 12px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08); transition: all 0.4s ease; }
.product-info-card:hover { box-shadow: 0 15px 40px rgba(220, 53, 69, 0.15); }
.product-info-card .card-body { padding: 30px; }
.info-badge { display: inline-block; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; padding: 8px 16px; border-radius: 25px; font-size: 0.85rem; font-weight: 600; margin-bottom: 15px; animation: bounceIn 0.6s ease-out; }
.info-item { display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #e9ecef; animation: slideInRight 0.6s ease-out; transition: all 0.3s ease; }
.info-item:hover { padding-left: 10px; background: rgba(220, 53, 69, 0.05); }
.info-item:last-child { border-bottom: none; }
.info-icon { width: 40px; height: 40px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; margin-right: 15px; font-size: 1.1rem; transition: all 0.3s ease; }
.info-item:hover .info-icon { transform: scale(1.2) rotate(10deg); }
.info-label { font-weight: 600; color: #333; font-size: 0.9rem; }
.info-value { color: #666; font-size: 0.95rem; }
.specs-table { animation: fadeInUp 0.6s ease-out; }
.specs-table table { width: 100%; border-collapse: collapse; }
.specs-table th { background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; padding: 15px; text-align: left; font-weight: 600; }
.specs-table td { padding: 15px; border-bottom: 1px solid #e9ecef; transition: all 0.3s ease; }
.specs-table tr:hover { background-color: #f8f9fa; transform: translateX(5px); }
.feature-box { animation: fadeInUp 0.6s ease-out; background: white; padding: 25px; border-radius: 12px; border-left: 4px solid #dc3545; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); position: relative; overflow: hidden; }
.feature-box::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(220, 53, 69, 0.1), transparent); transition: left 0.6s ease; }
.feature-box:hover::before { left: 100%; }
.feature-box:hover { transform: translateY(-8px) scale(1.02); box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2); }
.feature-icon { width: 50px; height: 50px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; margin-bottom: 15px; animation: bounceIn 0.8s ease-out; transition: all 0.4s ease; }
.feature-box:hover .feature-icon { transform: scale(1.3) rotate(15deg); }
.feature-title { font-weight: 700; color: #333; margin-bottom: 10px; transition: all 0.3s ease; }
.feature-box:hover .feature-title { color: #dc3545; }
.feature-text { color: #666; font-size: 0.95rem; line-height: 1.6; transition: all 0.3s ease; }
.feature-box:hover .feature-text { color: #555; }
.section-title { position: relative; padding-bottom: 15px; margin-bottom: 30px; font-weight: 700; color: #333; animation: slideDown 0.6s ease-out; }
.section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-radius: 2px; animation: slideInRight 0.6s ease-out 0.3s both; }
.cta-button { background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border: none; padding: 15px 40px; font-weight: 600; border-radius: 8px; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3); animation: bounceIn 0.8s ease-out; }
.cta-button:hover { transform: translateY(-4px) scale(1.05); box-shadow: 0 15px 40px rgba(220, 53, 69, 0.4); }
.related-product-card { animation: fadeInUp 0.6s ease-out; border: none; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12); transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); background: white; position: relative; }
.related-product-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); }
.related-product-card:hover { transform: translateY(-15px) scale(1.02); box-shadow: 0 25px 60px rgba(220, 53, 69, 0.3); }
.related-product-image { aspect-ratio: 4/3; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); display: flex; align-items: center; justify-content: center; padding: 15px; transition: all 0.4s ease; }
.related-product-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); }
.related-product-card:hover .related-product-image img { transform: scale(1.12) rotate(2deg); }
.related-product-card .card-body { padding: 20px; animation: slideUp 0.6s ease-out 0.2s both; }
.related-product-card .card-title { font-size: 1.1rem; color: #333; margin-bottom: 8px; transition: all 0.3s ease; }
.related-product-card:hover .card-title { color: #dc3545; }
.related-product-card .card-text { font-size: 0.9rem; color: #999; margin-bottom: 15px; }
.related-product-card .btn { border-radius: 8px; font-weight: 600; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); }
.related-product-card .btn-outline-primary:hover { background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-color: #dc3545; color: white; transform: translateY(-2px); }
.nav-tabs { animation: slideDown 0.6s ease-out; }
.nav-tabs .nav-link { color: #666; border: none; border-bottom: 3px solid transparent; font-weight: 600; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); }
.nav-tabs .nav-link:hover { color: #dc3545; border-bottom-color: #dc3545; transform: translateY(-3px); }
.nav-tabs .nav-link.active { color: #dc3545; border-bottom-color: #dc3545; background: none; }
.tab-content { animation: fadeInUp 0.6s ease-out; }

/* Staggered animations for info items */
.info-item:nth-child(1) { animation-delay: 0.1s; }
.info-item:nth-child(2) { animation-delay: 0.2s; }
.info-item:nth-child(3) { animation-delay: 0.3s; }
.info-item:nth-child(4) { animation-delay: 0.4s; }
.info-item:nth-child(5) { animation-delay: 0.5s; }

/* Staggered animations for feature boxes */
.feature-box:nth-child(1) { animation-delay: 0.1s; }
.feature-box:nth-child(2) { animation-delay: 0.2s; }
.feature-box:nth-child(3) { animation-delay: 0.3s; }
.feature-box:nth-child(4) { animation-delay: 0.4s; }

/* Staggered animations for related products */
.related-product-card:nth-child(1) { animation-delay: 0.1s; }
.related-product-card:nth-child(2) { animation-delay: 0.2s; }
.related-product-card:nth-child(3) { animation-delay: 0.3s; }

/* Product section animations */
.product-section { animation: fadeInUp 0.8s ease-out; }

/* CTA section animations */
.cta-section { animation: slideUp 0.8s ease-out; }
.cta-section h2 { animation: slideDown 0.6s ease-out; }
.cta-section p { animation: fadeInUp 0.6s ease-out 0.2s both; }
.cta-section .btn { animation: bounceIn 0.8s ease-out 0.4s both; }

@keyframes slideUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
<link rel="stylesheet" href="css/product-animations.css">

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png'); background-size: cover; background-position: center; min-height: 420px; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 class="display-3 text-white mb-3 hero-title">Carbon Brush Bearing / Holder / Spring Job</h1>
        <p class="text-white fs-5 mb-4">Precision Components for Electrical Machines</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="breadcrumb-item"><a href="carbon-technology.php" class="text-white">Carbon Technology</a></li>
            <li class="breadcrumb-item text-primary active">Carbon Brush Bearing / Holder / Spring Job</li>
        </ol>
    </div>
</div>

<!-- PRODUCT SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img src="img/carbonbrushes.jpg" alt="Carbon Brush Bearing / Holder / Spring Job - Electrical machine components" class="product-image-main">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info-card">
                    <div class="card-body">
                        <span class="info-badge"><i class="fas fa-check-circle me-2"></i>In Stock</span>
                        <h2 class="fw-bold mb-4" itemprop="name">Carbon Brush Bearing / Holder / Spring Job</h2>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-plug"></i></div>
                            <div>
                                <div class="info-label">Component Type</div>
                                <div class="info-value">Brush Assembly</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-flask"></i></div>
                            <div>
                                <div class="info-label">Material</div>
                                <div class="info-value">Carbon & Brass</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-cogs"></i></div>
                            <div>
                                <div class="info-label">Application</div>
                                <div class="info-value">Motors & Generators</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-check-double"></i></div>
                            <div>
                                <div class="info-label">Precision</div>
                                <div class="info-value">High Precision</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-certificate"></i></div>
                            <div>
                                <div class="info-label">Brand</div>
                                <div class="info-value">JM Graphite</div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-top">
                            <a href="contact.php" class="btn cta-button text-white w-100 mb-3">
                                <i class="fas fa-envelope me-2"></i>Request Quote
                            </a>
                            <a href="contact.php" class="btn btn-outline-primary w-100">
                                <i class="fas fa-phone me-2"></i>Contact Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs mb-4" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab">Specifications</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="applications-tab" data-bs-toggle="tab" data-bs-target="#applications" type="button" role="tab">Applications</button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="section-title">Product Overview</h3>
                                <p class="text-muted mb-4" itemprop="description">
                                    Carbon Brush Bearings, Holders and Spring Jobs are precision components designed to securely hold carbon brushes in motors and generators. They ensure proper alignment and efficient electrical contact. These precision-engineered assemblies are manufactured to exacting tolerances for optimal performance in electrical machines.
                                </p>
                                <p class="text-muted mb-4">
                                    Our brush bearing, holder, and spring job assemblies combine superior material properties with precision engineering to deliver reliable performance in motors, generators, and other electrical machines, ensuring efficient electrical contact and extended service life.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4 rounded-3 shadow-sm">
                                    <h5 class="fw-bold mb-3">Quick Specifications</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Material:</strong> Carbon & Brass</li>
                                        <li class="mb-2"><strong>Type:</strong> Brush Assembly</li>
                                        <li class="mb-2"><strong>Application:</strong> Motors & Generators</li>
                                        <li class="mb-2"><strong>Precision:</strong> High Precision</li>
                                        <li class="mb-2"><strong>Customization:</strong> Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h3 class="section-title mt-5">Key Benefits</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-check-double"></i></div>
                                    <div class="feature-title">Proper Alignment</div>
                                    <div class="feature-text">Ensures proper alignment of carbon brushes for optimal electrical contact.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-plug"></i></div>
                                    <div class="feature-title">Efficient Electrical Contact</div>
                                    <div class="feature-text">Maintains efficient electrical contact between brushes and rotating parts.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                                    <div class="feature-title">Precision Engineered</div>
                                    <div class="feature-text">Manufactured to exacting tolerances for optimal fit and performance.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                                    <div class="feature-title">Cost-Effective</div>
                                    <div class="feature-text">Competitive pricing with superior performance and reliability.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="specifications" role="tabpanel">
                        <h3 class="section-title">Technical Specifications</h3>
                        <div class="specs-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Specification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Material (Bearing)</strong></td>
                                        <td>Carbon</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Material (Holder)</strong></td>
                                        <td>Brass</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Component Type</strong></td>
                                        <td>Brush Assembly</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Application</strong></td>
                                        <td>Motors & Generators</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Precision Level</strong></td>
                                        <td>High Precision</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Electrical Contact</strong></td>
                                        <td>Efficient</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Customization</strong></td>
                                        <td>Available in various configurations</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quality Standard</strong></td>
                                        <td>ISO 9001:2015 Certified</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted mt-4">All specifications are subject to change based on specific application requirements. Contact our technical team for detailed specifications and custom configurations.</p>
                    </div>

                    <div class="tab-pane fade" id="applications" role="tabpanel">
                        <h3 class="section-title">Industrial Applications</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-plug"></i></div>
                                    <div class="feature-title">DC Motors</div>
                                    <div class="feature-text">Ideal for DC motor applications requiring precision brush assemblies.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                                    <div class="feature-title">AC Motors</div>
                                    <div class="feature-text">Suitable for AC motor applications requiring reliable brush components.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                                    <div class="feature-title">Generators</div>
                                    <div class="feature-text">Perfect for generator applications requiring high-precision brush assemblies.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                                    <div class="feature-title">Electrical Machinery</div>
                                    <div class="feature-text">Engineered for various electrical machinery requiring precision brush components.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA SECTION -->
<section class="py-5 bg-primary">
    <div class="container text-center">
        <h2 class="text-white mb-4">Need Carbon Brush Bearings, Holders, or Spring Jobs?</h2>
        <p class="text-white fs-5 mb-4">Contact our expert team for customized solutions, technical support, and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">
            <i class="fas fa-envelope me-2"></i>Get in Touch Today
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
