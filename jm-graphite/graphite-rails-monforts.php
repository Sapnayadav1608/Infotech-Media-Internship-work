<?php
$page_title = "Graphite Rails for Monforts Stenter | JM Graphite & Carbon (India) LLP";
$meta_description = "Graphite Rails for Monforts Stenter Machine. High-quality carbon graphite rails for textile industry from JM Graphite.";
$meta_keywords = "graphite rails, monforts stenter, textile equipment, graphite carbon, stenter machine";
include 'header.php';
?>

<link rel="stylesheet" href="css/product-animations.css">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Graphite Rails for Monforts Stenter Machine",
  "description": "Graphite rails for Monforts Stenter machines used in textile industry applications.",
  "image": "https://jmgraphite.com/img/graphite-technology.png",
  "brand": {"@type": "Brand", "name": "JM Graphite & Carbon (India) LLP"},
  "manufacturer": {"@type": "Organization", "name": "JM Graphite & Carbon (India) LLP", "url": "https://jmgraphite.com"},
  "category": "Graphite Technology",
  "material": "Graphite Carbon",
  "offers": {"@type": "Offer", "availability": "https://schema.org/InStock", "priceCurrency": "INR", "price": "Contact for pricing"}
}
</script>

<style>
@keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
@keyframes slideInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
@keyframes slideInLeft { from { opacity: 0; transform: translateX(-30px); } to { opacity: 1; transform: translateX(0); } }
@keyframes slideInRight { from { opacity: 0; transform: translateX(30px); } to { opacity: 1; transform: translateX(0); } }
.hero-title { animation: slideInDown 0.8s ease-out; }
.hero-title:hover { text-decoration: none !important; transform: none !important; }
.breadcrumb-item { animation: fadeInUp 0.6s ease-out 0.3s both; }
.product-gallery { animation: slideInLeft 0.6s ease-out; }
.product-image-main { width: 100%; height: 450px; object-fit: cover; border-radius: 12px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); transition: transform 0.3s ease; }
.product-image-main:hover { transform: scale(1.02); }
.product-info-card { animation: slideInRight 0.6s ease-out; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: none; border-radius: 12px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08); }
.product-info-card .card-body { padding: 30px; }
.info-badge { display: inline-block; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; padding: 8px 16px; border-radius: 25px; font-size: 0.85rem; font-weight: 600; margin-bottom: 15px; }
.info-item { display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #e9ecef; }
.info-item:last-child { border-bottom: none; }
.info-icon { width: 40px; height: 40px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; margin-right: 15px; font-size: 1.1rem; }
.info-label { font-weight: 600; color: #333; font-size: 0.9rem; }
.info-value { color: #666; font-size: 0.95rem; }
.specs-table { animation: fadeInUp 0.6s ease-out; }
.specs-table table { width: 100%; border-collapse: collapse; }
.specs-table th { background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; padding: 15px; text-align: left; font-weight: 600; }
.specs-table td { padding: 15px; border-bottom: 1px solid #e9ecef; }
.specs-table tr:hover { background-color: #f8f9fa; }
.feature-box { animation: fadeInUp 0.6s ease-out; background: white; padding: 25px; border-radius: 12px; border-left: 4px solid #dc3545; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; }
.feature-box:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(220, 53, 69, 0.15); }
.feature-icon { width: 50px; height: 50px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; margin-bottom: 15px; }
.feature-title { font-weight: 700; color: #333; margin-bottom: 10px; }
.feature-text { color: #666; font-size: 0.95rem; line-height: 1.6; }
.section-title { position: relative; padding-bottom: 15px; margin-bottom: 30px; font-weight: 700; color: #333; }
.section-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-radius: 2px; }
.cta-button { background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border: none; padding: 15px 40px; font-weight: 600; border-radius: 8px; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3); }
.cta-button:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(220, 53, 69, 0.4); }
.related-product-card { animation: fadeInUp 0.6s ease-out; border: none; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; }
.related-product-card:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2); }
.related-product-image { aspect-ratio: 4/3; overflow: hidden; }
.related-product-image img { width: 100%; height: 100%; transition: transform 0.3s ease; }
.related-product-card:hover .related-product-image img { transform: scale(1.1); }
.nav-tabs .nav-link { color: #666; border: none; border-bottom: 3px solid transparent; font-weight: 600; transition: all 0.3s ease; }
.nav-tabs .nav-link:hover { color: #dc3545; border-bottom-color: #dc3545; }
.nav-tabs .nav-link.active { color: #dc3545; border-bottom-color: #dc3545; background: none; }
.tab-content { animation: fadeInUp 0.4s ease-out; }
</style>
<link rel="stylesheet" href="css/product-animations.css">

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png'); background-size: cover; background-position: center; min-height: 420px; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 class="display-3 text-white mb-3 hero-title">Graphite Rails for Monforts Stenter</h1>
        <p class="text-white fs-5 mb-4">Precision Components for Textile Industry Equipment</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="breadcrumb-item"><a href="graphite-technology.php" class="text-white">Graphite Technology</a></li>
            <li class="breadcrumb-item text-primary active">Graphite Rails for Monforts</li>
        </ol>
    </div>
</div>

<!-- PRODUCT SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img src="img/graphite-technology.png" alt="Graphite Rails for Monforts Stenter Machine" class="product-image-main">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info-card">
                    <div class="card-body">
                        <span class="info-badge"><i class="fas fa-check-circle me-2"></i>In Stock</span>
                        <h2 class="fw-bold mb-4" itemprop="name">Graphite Rails for Monforts Stenter</h2>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-bars"></i></div>
                            <div>
                                <div class="info-label">Usage/Application</div>
                                <div class="info-value">Textile Industry</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-ruler"></i></div>
                            <div>
                                <div class="info-label">Available Sizes</div>
                                <div class="info-value">9x13x1000 mm, 9x13x200 mm</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-flask"></i></div>
                            <div>
                                <div class="info-label">Material</div>
                                <div class="info-value">Graphite Carbon</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-industry"></i></div>
                            <div>
                                <div class="info-label">Production Capacity</div>
                                <div class="info-value">10,000 per month</div>
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
                                    Graphite Rails for Monforts Stenter Machines are precision-engineered components designed for textile industry applications. Established in 1973, we manufacture high-quality carbon and graphite products for various industries including textiles, paper mills, cement companies, and sugar companies. These rails are manufactured without cover and are available in multiple sizes to meet specific equipment requirements.
                                </p>
                                <p class="text-muted mb-4">
                                    Our graphite rails provide excellent durability and performance in high-temperature textile processing environments, ensuring reliable operation and extended service life for stenter machines.
                                </p>
                                
                                <h5 class="fw-bold mt-4 mb-3">Material Composition</h5>
                                <ul class="text-muted">
                                    <li>High-grade graphite carbon</li>
                                    <li>Precision machined to specifications</li>
                                    <li>Optimized for textile machinery applications</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4 rounded-3 shadow-sm">
                                    <h5 class="fw-bold mb-3">Quick Specifications</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Material:</strong> Graphite Carbon</li>
                                        <li class="mb-2"><strong>Size 1:</strong> 9x13x1000 mm</li>
                                        <li class="mb-2"><strong>Size 2:</strong> 9x13x200 mm</li>
                                        <li class="mb-2"><strong>Capacity:</strong> 10,000/month</li>
                                        <li class="mb-2"><strong>Delivery:</strong> 1 week</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h3 class="section-title mt-5">Key Benefits</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-check-double"></i></div>
                                    <div class="feature-title">Precision Engineered</div>
                                    <div class="feature-text">Manufactured to exact specifications for optimal fit and performance in stenter machines.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-hourglass-end"></i></div>
                                    <div class="feature-title">Extended Durability</div>
                                    <div class="feature-text">High-quality graphite carbon ensures excellent strength and long service life.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-thermometer-half"></i></div>
                                    <div class="feature-title">High Temperature Resistant</div>
                                    <div class="feature-text">Performs reliably in high-temperature textile processing environments.</div>
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
                                        <td><strong>Material</strong></td>
                                        <td>Graphite Carbon</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Size Option 1</strong></td>
                                        <td>9 x 13 x 1000 mm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Size Option 2</strong></td>
                                        <td>9 x 13 x 200 mm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Size Option 3</strong></td>
                                        <td>170 x 9 x 13 mm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Production Capacity</strong></td>
                                        <td>10,000 pieces per month</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Delivery Time</strong></td>
                                        <td>1 week</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Packaging</strong></td>
                                        <td>10 pieces in foil paper, then in wooden case</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Item Code</strong></td>
                                        <td>84482000</td>
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
                                    <div class="feature-icon"><i class="fas fa-industry"></i></div>
                                    <div class="feature-title">Textile Industry</div>
                                    <div class="feature-text">Monforts Stenter machines for fabric processing and finishing.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                                    <div class="feature-title">Stenter Equipment</div>
                                    <div class="feature-text">Rail components for textile drying and finishing machinery.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-fire"></i></div>
                                    <div class="feature-title">High Temperature Processing</div>
                                    <div class="feature-text">Suitable for high-temperature textile processing environments.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                                    <div class="feature-title">Precision Machinery</div>
                                    <div class="feature-text">Critical components in precision textile manufacturing equipment.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- RELATED PRODUCTS SECTION -->


<!-- CTA SECTION -->
<section class="py-5 bg-primary">
    <div class="container text-center">
        <h2 class="text-white mb-4">Need Graphite Rails for Monforts?</h2>
        <p class="text-white fs-5 mb-4">Contact our expert team for customized solutions, technical support, and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">
            <i class="fas fa-envelope me-2"></i>Get in Touch Today
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
