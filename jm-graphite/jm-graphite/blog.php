<?php include 'header.php'; ?>

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

.hero-title {
    animation: slideInDown 0.8s ease-out;
    cursor: default;
}

.hero-title:hover {
    text-decoration: none !important;
    transform: none !important;
}

.sidebar-widget {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    animation: slideInRight 0.6s ease-out;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.sidebar-widget:hover {
    box-shadow: 0 10px 30px rgba(220, 53, 69, 0.15);
}

.sidebar-widget h5 {
    color: #dc3545;
    font-weight: 700;
    margin-bottom: 15px;
    border-bottom: 2px solid #dc3545;
    padding-bottom: 10px;
}

.sidebar-widget ul {
    list-style: none;
    padding: 0;
}

.sidebar-widget ul li {
    padding: 8px 0;
    border-bottom: 1px solid #e0e0e0;
}

.sidebar-widget ul li:last-child {
    border-bottom: none;
}

.sidebar-widget ul li a {
    color: #666;
    text-decoration: none;
    transition: all 0.3s ease;
}

.sidebar-widget ul li a:hover {
    color: #dc3545;
    padding-left: 5px;
}

.breadcrumb-item {
    animation: fadeInUp 0.6s ease-out 0.3s both;
}

.section-title {
    animation: fadeInUp 0.6s ease-out;
    cursor: default;
}

.section-title:hover {
    text-decoration: none !important;
    transform: none !important;
}

.blog-card {
    animation: fadeInUp 0.6s ease-out;
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2);
}
</style>

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png'); background-size: cover; background-position: center; min-height: 420px; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 class="display-3 text-white mb-3 hero-title">Our Blog</h1>
        <p class="text-white fs-5 mb-4">Industry Insights, Tips & Updates</p>
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active">Blog</li>
        </ol>
    </div>
</div>

<!-- BLOG SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Main Blog Content -->
            <div class="col-lg-8">
                <div class="card border-0 shadow p-5 text-center" style="min-height: 400px; display: flex; align-items: center; justify-content: center;">
                    <div>
                        <i class="fas fa-newspaper fa-4x text-primary mb-3"></i>
                        <h4 class="text-muted">Blog Coming Soon</h4>
                        <p class="text-muted">We're preparing exciting content about our products and industry insights. Stay tuned!</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="sidebar-widget">
                    <h5>Search Blog</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search articles...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="sidebar-widget">
                    <h5>Categories</h5>
                    <ul>
                        <li><a href="#">Carbon Technology</a></li>
                        <li><a href="#">Graphite Technology</a></li>
                        <li><a href="#">Mechanical Seals</a></li>
                        <li><a href="#">Industry Solutions</a></li>
                        <li><a href="#">Maintenance Tips</a></li>
                        <li><a href="#">Product Updates</a></li>
                    </ul>
                </div>

                <!-- Popular Tags Widget -->
                <div class="sidebar-widget">
                    <h5>Popular Tags</h5>
                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                        <span class="badge bg-light text-dark" style="cursor: pointer; padding: 8px 12px; border: 1px solid #dc3545; color: #dc3545;">Carbon</span>
                        <span class="badge bg-light text-dark" style="cursor: pointer; padding: 8px 12px; border: 1px solid #dc3545; color: #dc3545;">Graphite</span>
                        <span class="badge bg-light text-dark" style="cursor: pointer; padding: 8px 12px; border: 1px solid #dc3545; color: #dc3545;">Seals</span>
                        <span class="badge bg-light text-dark" style="cursor: pointer; padding: 8px 12px; border: 1px solid #dc3545; color: #dc3545;">Industrial</span>
                        <span class="badge bg-light text-dark" style="cursor: pointer; padding: 8px 12px; border: 1px solid #dc3545; color: #dc3545;">Manufacturing</span>
                        <span class="badge bg-light text-dark" style="cursor: pointer; padding: 8px 12px; border: 1px solid #dc3545; color: #dc3545;">Technology</span>
                    </div>
                </div>

                <!-- Newsletter Widget -->
                <div class="sidebar-widget" style="background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white;">
                    <h5 style="color: white; border-bottom-color: white;">Subscribe Newsletter</h5>
                    <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Get latest updates and industry insights delivered to your inbox.</p>
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your email address" required>
                        </div>
                        <button type="submit" class="btn btn-light w-100 fw-bold">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-5 bg-primary">
    <div class="container text-center">
        <h2 class="text-white mb-4">Have Questions About Our Products?</h2>
        <p class="text-white fs-5 mb-4">Contact our expert team for personalized solutions and technical support.</p>
        <a href="contact.php" class="btn btn-light rounded-pill text-primary py-3 px-5 fw-bold">Get in Touch</a>
    </div>
</section>

<?php include 'footer.php'; ?>
