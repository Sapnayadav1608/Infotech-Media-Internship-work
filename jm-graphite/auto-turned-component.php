<?php include 'header.php'; ?>

<meta name="description" content="Auto Turned Component - Precision turned components for automotive industry. High-quality automotive parts from JM Graphite.">
<meta name="keywords" content="auto turned component, automotive parts, precision turned components, automotive machining">
<link rel="stylesheet" href="css/enhanced-animations.css">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Auto Turned Component",
  "description": "Precision turned components for automotive industry applications.",
  "image": "https://jmgraphite.com/img/cnc-machine-components.png",
  "brand": {"@type": "Brand", "name": "JM Graphite & Carbon (India) LLP"},
  "manufacturer": {"@type": "Organization", "name": "JM Graphite & Carbon (India) LLP", "url": "https://jmgraphite.com"},
  "category": "CNC Components",
  "material": "Stainless Steel",
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
.related-product-card .btn-outline-primary:hover { background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-color: #dc3545; color: white; }
.nav-tabs .nav-link { color: #666; border: none; border-bottom: 3px solid transparent; font-weight: 600; transition: all 0.3s ease; }
.nav-tabs .nav-link:hover { color: #dc3545; border-bottom-color: #dc3545; }
.nav-tabs .nav-link.active { color: #dc3545; border-bottom-color: #dc3545; background: none; }
.tab-content { animation: fadeInUp 0.4s ease-out; }
</style>

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png'); background-size: cover; background-position: center; min-height: 420px; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 class="display-3 text-white mb-3 hero-title">Auto Turned Component</h1>
        <p class="text-white fs-5 mb-4">Precision Turned Components for Automotive Industry Applications</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="breadcrumb-item"><a href="cnc-components.php" class="text-white">CNC Components</a></li>
            <li class="breadcrumb-item text-primary active">Auto Turned Component</li>
        </ol>
    </div>
</div>

<!-- PRODUCT SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img src="img/4.png" alt="Auto Turned Component" class="product-image-main">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info-card">
                    <div class="card-body">
                        <span class="info-badge"><i class="fas fa-check-circle me-2"></i>In Stock</span>
                        <h2 class="fw-bold mb-4" itemprop="name">Auto Turned Component</h2>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-car"></i></div>
                            <div>
                                <div class="info-label">Application</div>
                                <div class="info-value">Automotive</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-flask"></i></div>
                            <div>
                                <div class="info-label">Material</div>
                                <div class="info-value">Stainless Steel</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-ruler"></i></div>
                            <div>
                                <div class="info-label">Diameter</div>
                                <div class="info-value">Up to 12.5mm</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-check-double"></i></div>
                            <div>
                                <div class="info-label">Tolerance</div>
                                <div class="info-value">±0.02mm</div>
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
                                    Our Auto Turned Components are precision-engineered parts specifically designed for automotive industry applications. Manufactured from high-quality stainless steel using advanced CNC turning equipment, these components meet stringent automotive standards and specifications.
                                </p>
                                <p class="text-muted mb-4">
                                    Each component is produced with tight tolerances and undergoes comprehensive quality inspection to ensure reliability and performance in automotive systems. We specialize in high-volume production for automotive OEMs and suppliers.
                                </p>
                                
                                <h5 class="fw-bold mt-4 mb-3">Key Features</h5>
                                <ul class="text-muted">
                                    <li>Automotive-grade stainless steel</li>
                                    <li>Precision turned components</li>
                                    <li>Tight tolerances (±0.02mm)</li>
                                    <li>High-volume production capability</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4 rounded-3 shadow-sm">
                                    <h5 class="fw-bold mb-3">Quick Specifications</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Material:</strong> Stainless Steel</li>
                                        <li class="mb-2"><strong>Diameter:</strong> Up to 12.5mm</li>
                                        <li class="mb-2"><strong>Tolerance:</strong> ±0.02mm</li>
                                        <li class="mb-2"><strong>Surface Finish:</strong> Ra 0.8-1.6</li>
                                        <li class="mb-2"><strong>Certification:</strong> ISO 9001:2008</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h3 class="section-title mt-5">Key Benefits</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-check-double"></i></div>
                                    <div class="feature-title">Automotive Certified</div>
                                    <div class="feature-text">Manufactured to meet automotive industry standards and OEM requirements.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                                    <div class="feature-title">Corrosion Resistant</div>
                                    <div class="feature-text">Stainless steel material provides excellent corrosion resistance and durability.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                                    <div class="feature-title">High-Volume Production</div>
                                    <div class="feature-text">Efficient manufacturing for large-scale automotive production orders.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                                    <div class="feature-title">Cost-Effective</div>
                                    <div class="feature-text">Competitive pricing for high-volume automotive component supply.</div>
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
                                        <td>Stainless Steel (SS316/SS304)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Diameter Range</strong></td>
                                        <td>Up to 12.5mm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tolerance</strong></td>
                                        <td>±0.02mm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Surface Finish</strong></td>
                                        <td>Ra 0.8-1.6 µm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Production Capacity</strong></td>
                                        <td>High-volume</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quality Standard</strong></td>
                                        <td>ISO 9001:2008 Certified</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Inspection</strong></td>
                                        <td>100% Quality Check</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted mt-4">All specifications are subject to change based on specific application requirements. Contact our technical team for detailed specifications and custom configurations.</p>
                    </div>

                    <div class="tab-pane fade" id="applications" role="tabpanel">
                        <h3 class="section-title">Automotive Applications</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-car"></i></div>
                                    <div class="feature-title">Engine Components</div>
                                    <div class="feature-text">Precision parts for engine systems and fuel injection components.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                                    <div class="feature-title">Transmission Parts</div>
                                    <div class="feature-text">Components for automatic and manual transmission systems.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-plug"></i></div>
                                    <div class="feature-title">Electrical Systems</div>
                                    <div class="feature-text">Components for automotive electrical and electronic systems.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                                    <div class="feature-title">Suspension Systems</div>
                                    <div class="feature-text">Precision parts for vehicle suspension and steering systems.</div>
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
        <h2 class="text-white mb-4">Need Auto Turned Components?</h2>
        <p class="text-white fs-5 mb-4">Contact our expert team for customized solutions, technical support, and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">
            <i class="fas fa-envelope me-2"></i>Get in Touch Today
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
