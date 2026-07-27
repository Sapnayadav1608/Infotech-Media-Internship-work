<?php
$page_title = "Graphite Dies and Moulds | JM Graphite & Carbon (India) LLP";
$meta_description = "Premium graphite dies and moulds for casting and manufacturing. High-precision components from JM Graphite & Carbon.";
$meta_keywords = "graphite dies, graphite moulds, casting dies, manufacturing moulds";
include 'header.php';
?>

<link rel="stylesheet" href="css/product-animations.css">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Graphite Dies and Moulds",
  "description": "Premium graphite dies and moulds for casting and manufacturing.",
  "image": "https://jmgraphite.com/img/graphite-technology.png",
  "brand": {"@type": "Brand", "name": "JM Graphite & Carbon (India) LLP"},
  "manufacturer": {"@type": "Organization", "name": "JM Graphite & Carbon (India) LLP", "url": "https://jmgraphite.com"},
  "category": "Graphite Technology",
  "material": "Graphite",
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

.product-image-main {
    width: 100%;
    height: auto;
    aspect-ratio: 4/3;
    object-fit: contain;
    object-position: center;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
}

.product-image-main:hover { transform: scale(1.02); }

.product-info-card {
    animation: slideInRight 0.6s ease-out;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    border: none;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.product-info-card .card-body { padding: 30px; }

.info-badge {
    display: inline-block;
    background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    color: white;
    padding: 8px 16px;
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 15px;
}

.info-item { display: flex; align-items: center; padding: 12px 0; border-bottom: 1px solid #e9ecef; }
.info-item:last-child { border-bottom: none; }

.info-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-right: 15px;
    font-size: 1.1rem;
}

.info-label { font-weight: 600; color: #333; font-size: 0.9rem; }
.info-value { color: #666; font-size: 0.95rem; }

.specs-table { animation: fadeInUp 0.6s ease-out; }
.specs-table table { width: 100%; border-collapse: collapse; }
.specs-table th { background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; padding: 15px; text-align: left; font-weight: 600; }
.specs-table td { padding: 15px; border-bottom: 1px solid #e9ecef; }
.specs-table tr:hover { background-color: #f8f9fa; }

.feature-box {
    animation: fadeInUp 0.6s ease-out;
    background: white;
    padding: 25px;
    border-radius: 12px;
    border-left: 4px solid #dc3545;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.feature-box:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(220, 53, 69, 0.15); }

.feature-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.feature-title { font-weight: 700; color: #333; margin-bottom: 10px; }
.feature-text { color: #666; font-size: 0.95rem; line-height: 1.6; }

.section-title {
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 30px;
    font-weight: 700;
    color: #333;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    border-radius: 2px;
}

.cta-button {
    background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    border: none;
    padding: 15px 40px;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
}

.cta-button:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(220, 53, 69, 0.4); }

.nav-tabs .nav-link { color: #666; border: none; border-bottom: 3px solid transparent; font-weight: 600; transition: all 0.3s ease; }
.nav-tabs .nav-link:hover { color: #dc3545; border-bottom-color: #dc3545; }
.nav-tabs .nav-link.active { color: #dc3545; border-bottom-color: #dc3545; background: none; }
.tab-content { animation: fadeInUp 0.4s ease-out; }
</style>

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png'); background-size: cover; background-position: center; min-height: 420px; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 class="display-3 text-white mb-3 hero-title">Graphite Dies and Moulds</h1>
        <p class="text-white fs-5 mb-4">Precision Components for Casting and Manufacturing</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="breadcrumb-item"><a href="graphite-technology.php" class="text-white">Graphite Technology</a></li>
            <li class="breadcrumb-item text-primary active">Graphite Dies and Moulds</li>
        </ol>
    </div>
</div>

<!-- PRODUCT SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Product Overview -->
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img src="img/graphite-technology.png" alt="Graphite Dies and Moulds" class="product-image-main">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info-card">
                    <div class="card-body">
                        <span class="info-badge"><i class="fas fa-check-circle me-2"></i>In Stock</span>
                        <h2 class="fw-bold mb-4" itemprop="name">Graphite Dies and Moulds</h2>
                        
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-cube"></i></div>
                            <div>
                                <div class="info-label">Product Category</div>
                                <div class="info-value">Graphite Technology</div>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-flask"></i></div>
                            <div>
                                <div class="info-label">Material Composition</div>
                                <div class="info-value">Premium Graphite</div>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-cogs"></i></div>
                            <div>
                                <div class="info-label">Application Type</div>
                                <div class="info-value">Dies & Moulds</div>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-industry"></i></div>
                            <div>
                                <div class="info-label">Primary Use</div>
                                <div class="info-value">Casting & Manufacturing</div>
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

        <!-- Tabs Section -->
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
                    <!-- Overview Tab -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="section-title">Product Overview</h3>
                                <p class="text-muted mb-4" itemprop="description">
                                    Our Graphite Dies and Moulds are precision-engineered components designed for continuous casting, strip casting, vacuum furnace applications, and EDM operations. These dies and moulds are manufactured from premium graphite material, offering excellent thermal conductivity and dimensional stability. Each component is engineered to withstand extreme temperatures and provide superior performance in demanding casting and manufacturing applications.
                                </p>
                                <p class="text-muted mb-4">
                                    With superior material properties and precision manufacturing, our graphite dies and moulds ensure reliable performance in various industrial applications. Available for continuous casting, strip casting, vacuum furnace moulds, EDM electrodes, and gold bar moulds.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4 rounded-3 shadow-sm">
                                    <h5 class="fw-bold mb-3">Quick Specifications</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Material:</strong> Premium Graphite</li>
                                        <li class="mb-2"><strong>Type:</strong> Dies & Moulds</li>
                                        <li class="mb-2"><strong>Application:</strong> Casting & Manufacturing</li>
                                        <li class="mb-2"><strong>Availability:</strong> In Stock</li>
                                        <li class="mb-2"><strong>Customization:</strong> Available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h3 class="section-title mt-5">Key Benefits</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-thermometer-half"></i></div>
                                    <div class="feature-title">Excellent Thermal Conductivity</div>
                                    <div class="feature-text">Superior heat transfer properties for efficient casting and manufacturing processes.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-ruler"></i></div>
                                    <div class="feature-title">Dimensional Stability</div>
                                    <div class="feature-text">Maintains precise dimensions across temperature variations and repeated use cycles.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-fire"></i></div>
                                    <div class="feature-title">High-Temperature Resistant</div>
                                    <div class="feature-text">Withstands extreme temperatures in casting and furnace applications.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-check-double"></i></div>
                                    <div class="feature-title">Precision Engineered</div>
                                    <div class="feature-text">Manufactured to exact specifications for optimal casting and manufacturing results.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specifications Tab -->
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
                                        <td>Premium Graphite Composite</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Type</strong></td>
                                        <td>Dies & Moulds</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Application</strong></td>
                                        <td>Casting & Manufacturing</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Operating Temperature</strong></td>
                                        <td>Up to 3000°C</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Thermal Conductivity</strong></td>
                                        <td>High (100-150 W/m·K)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Density</strong></td>
                                        <td>1.8 - 2.1 g/cm³</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Hardness</strong></td>
                                        <td>Shore D 50-60</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Customization</strong></td>
                                        <td>Available in various sizes and designs</td>
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

                    <!-- Applications Tab -->
                    <div class="tab-pane fade" id="applications" role="tabpanel">
                        <h3 class="section-title">Industrial Applications</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-industry"></i></div>
                                    <div class="feature-title">Continuous Casting</div>
                                    <div class="feature-text">Precision dies for continuous casting of metals and alloys.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-industry"></i></div>
                                    <div class="feature-title">Strip Casting</div>
                                    <div class="feature-text">Specialized dies for strip casting applications in metal manufacturing.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-fire"></i></div>
                                    <div class="feature-title">Vacuum Furnace</div>
                                    <div class="feature-text">High-precision moulds for vacuum furnace applications.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                                    <div class="feature-title">EDM Electrodes</div>
                                    <div class="feature-text">Graphite electrodes for EDM operations in dies and moulds manufacturing.</div>
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
        <h2 class="text-white mb-4">Need Custom Graphite Dies and Moulds?</h2>
        <p class="text-white fs-5 mb-4">Contact our expert team for customized solutions, technical support, and competitive pricing.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">
            <i class="fas fa-envelope me-2"></i>Get in Touch Today
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
