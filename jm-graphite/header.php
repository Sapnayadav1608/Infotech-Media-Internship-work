<?php
// Default title, description, and keywords fallback
if (!isset($page_title) || empty($page_title)) {
    $current_page_name = basename($_SERVER['PHP_SELF'], '.php');
    if ($current_page_name == 'index' || empty($current_page_name)) {
        $page_title = "JM Graphite & Carbon (India) LLP | Carbon & Graphite Solutions";
    } else {
        $formatted_name = ucwords(str_replace(['-', '_'], ' ', $current_page_name));
        $page_title = $formatted_name . " | JM Graphite & Carbon (India) LLP";
    }
}

if (!isset($meta_description) || empty($meta_description)) {
    $meta_description = "JM Graphite & Carbon (India) LLP is a trusted manufacturer of high-quality Carbon Gland Packing Rings, Carbon Vanes, Graphite Rails, Graphite Crucibles, Mechanical Shaft Seals & CNC Precision Components since 1974.";
}

if (!isset($meta_keywords)) {
    $meta_keywords = "";
}

if (!isset($canonical_url) || empty($canonical_url)) {
    $current_page_file = basename($_SERVER['PHP_SELF']);
    if ($current_page_file == 'index.php' || empty($current_page_file)) {
        $canonical_url = "https://jmgraphite.in/";
    } else {
        $canonical_url = "https://jmgraphite.in/" . $current_page_file;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <?php if (!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <?php endif; ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <!-- Favicon -->
    <link rel="icon" href="img/logo1.png" type="image/png">
    <link rel="shortcut icon" href="img/logo1.png" type="image/png">
    <link rel="apple-touch-icon" href="img/logo1.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/navbar-fix.css" rel="stylesheet">
    <link href="css/mobile-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* === TOP BAR STYLING === */
        .topbar-text-large {
            font-size: 15px !important;
        }

        .topbar-text-large a {
            color: #444 !important;
            text-decoration: none;
        }

        /* SOCIAL ICONS VISIBILITY FIX */
        .top-social-icons a {
            color: #444 !important;
            margin-left: 20px;
            font-size: 16px;
            transition: 0.3s;
            display: inline-block;
        }

        .top-social-icons a:hover {
            color: #dc3545 !important;
        }

        /* === ONLY NAVBAR STICKY === */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        @media (max-width: 991px) {
            .navbar {
                position: sticky !important;
                top: 0 !important;
                z-index: 1000 !important;
            }
        }

        /* === MEGA MENU DESIGN === */
        @media (min-width: 992px) {
            .nav-item.mega-dropdown {
                position: static !important;
            }

            .mega-dropdown .mega-menu {
                width: 1050px !important;
                left: 50% !important;
                transform: translateX(-50%) !important;
                background: #ffffff !important;
                border-top: 4px solid #931f12 !important;
                box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15) !important;
                padding: 30px !important;
                border-radius: 0 0 10px 10px;
                display: none !important;
                position: absolute !important;
                top: 100% !important;
            }

            .mega-dropdown:hover .mega-menu {
                display: block !important;
            }

            .mega-dropdown .mega-menu[style*="display: block"] {
                display: block !important;
            }

            .col-divider {
                border-right: 1px solid #f1f1f1;
            }
        }

        /* Active Class Logic Color */
        .navbar-nav .nav-link.active {
            color: #931f12 !important;
            font-weight: 700;
        }

        .cat-main-title {
            font-size: 15px;
            font-weight: 700;
            color: #000000 !important;
            text-transform: uppercase;
            border-bottom: 2px solid #f8f8f8;
            padding-bottom: 8px;
            margin-bottom: 12px;
            display: block;
        }

        .cat-sub-label {
            font-size: 13px;
            font-weight: 900 !important;
            color: #000000 !important;
            text-transform: uppercase;
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            border-bottom: 2px solid #000000;
            padding-bottom: 8px;
        }

        .mega-menu .dropdown-item {
            font-size: 14.5px !important;
            color: #444 !important;
            padding: 5px 0 !important;
            line-height: 1.4;
            white-space: normal !important;
            background: transparent !important;
            transition: 0.2s all ease;
        }

        .mega-menu .dropdown-item:hover {
            background-color: transparent !important;
            color: #dc3545 !important;
            padding-left: 8px !important;
        }

        @media (max-width: 991px) {
            .mega-menu {
                background: #ffffff !important;
                width: 100vw !important;
                display: none !important;
                position: absolute !important;
                left: -100vw !important;
                right: auto !important;
                top: 100% !important;
                z-index: 9999 !important;
                max-height: calc(100vh - 200px) !important;
                overflow-y: auto !important;
                margin-top: 0 !important;
            }

            .mega-menu[style*="display: block"] {
                display: block !important;
                left: 0 !important;
            }

            .mega-menu .dropdown-item {
                color: #444 !important;
            }

            .mega-dropdown {
                position: relative !important;
            }

            .mega-dropdown .dropdown-toggle::after {
                content: "" !important;
            }

            .mega-dropdown .dropdown-toggle.show::after {
                content: "" !important;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
    </div>

    <!-- Topbar Start -->
    <div class="container-fluid bg-light border-bottom px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-start topbar-text-large">
                <a href="#" class="me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Vasai (E), Thane</a>
                <a href="tel:9820449698" class="me-4"><i class="fas fa-phone-alt text-primary me-2"></i>9820449698</a>
                <a href="mailto:jmgraphite@gmail.com"><i class="fas fa-envelope text-primary me-2"></i>jmgraphite@gmail.com</a>
            </div>
            <div class="col-lg-4 text-end top-social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar Start (Sticky) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
        <div class="container-fluid px-3">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo1.png" alt="Logo" style="height:60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="about.php" class="nav-link">About</a>

                    <!-- PRODUCTS MEGA MENU -->
                    <div class="nav-item dropdown mega-dropdown" style="position: relative;">
                        <a href="#" class="nav-link dropdown-toggle" id="productsToggle" data-toggle="none">Our Products</a>
                        <div class="dropdown-menu mega-menu" id="megaMenu" style="display: none;">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- COLUMN 1 -->
                                    <div class="col-lg-3 col-md-6 mb-4 col-divider">
                                        <span class="cat-main-title">A) GRAPHITE TECHNOLOGY</span>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="graphite-block-rod-supporting-roller.php">Graphite Block & Rod for supporting roller</a></li>
                                            <li><a class="dropdown-item" href="graphite-inlet-outlet-seal.php">Graphite Inlet/outlet Seal</a></li>
                                            <li><a class="dropdown-item" href="graphite-easy-bar-rotary-kiln.php">Easy Bar for Rotary Kiln</a></li>
                                            <span class="cat-sub-label">Graphite Rails for all Stanter Machine</span>
                                            <li><a class="dropdown-item ps-3" href="graphite-rails-famatex.php">Graphite rails For Famatex STANTER M/C</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-rails-monforts-without-cover.php">Graphite Rails for Monforts Stenter M/C (Without Cover)</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-rails-monforts-with-cover.php">Graphite Slide Rails Monforts Stenter M/C (With Cover)</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-rails-bruckner.php">Graphite rails For Bruckner stanter M/C</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-rails-kranz.php">Graphite rails For kranz STANTER M/C</a></li>
                                            <li><a class="dropdown-item mt-2" href="graphite-lungs-famatex.php">Graphite Lungs, Half Round Bearing & Lock Pins For Famatex Stenter M/C</a></li>
                                        </ul>
                                    </div>
                                    <!-- COLUMN 2 -->
                                    <div class="col-lg-3 col-md-6 mb-4 col-divider">
                                        <ul class="list-unstyled mt-lg-5">
                                            <span class="cat-sub-label">Graphite Synthetic sliding parts for stanter m/c</span>
                                            <li><a class="dropdown-item ps-3" href="graphite-sliding-bushes-babcock-monforts.php">Sliding Bushes for Babcock & Monforts M/C</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-sliding-part-sanitex.php">Sliding Part Sanitex Machine</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-sliding-part-textima.php">Sliding Part Textima M/c</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-sliding-part-babcock.php">Sliding Part Babcock Machine</a></li>
                                            <span class="cat-sub-label">Graphite Dies and Moulds</span>
                                            <li><a class="dropdown-item ps-3" href="graphite-dies-continues-casting.php">Graphite dies for Continues Casting</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-dies-strip-casting.php">Graphite Dies for Strip Casting</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-moulds-vacuum-furnace.php">Graphite Moulds for Vaccume Furnace</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-broaching-jig.php">Broaching Graphite Semiconductor Jig</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-electrode-edm.php">Graphite Electrode For Edm For Dies And Moulds</a></li>
                                            <li><a class="dropdown-item ps-3" href="graphite-mould-gold-bar.php">Graphite mould for 1 kg Gold Bar (biscuit)</a></li>
                                            <li><a class="dropdown-item mt-2" href="graphite-anti-corrosion-bricks.php">Graphite Anti Corrosion Bricks</a></li>
                                            <li><a class="dropdown-item" href="graphite-crucible.php">Graphite crucible</a></li>
                                        </ul>
                                    </div>
                                    <!-- COLUMN 3 -->
                                    <div class="col-lg-3 col-md-6 mb-4 col-divider">
                                        <span class="cat-main-title">B) CARBON TECHNOLOGY</span>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="carbon-bush-bearing.php">Carbon Bush Bearing</a></li>
                                            <span class="cat-sub-label">Carbon Bush for Industries</span>
                                            <li><a class="dropdown-item ps-3" href="carbon-bush-bearing-food-chemicals.php">Carbon Bush for Food, Chemicals, TEXTILE & all type of industries</a></li>
                                            <li><a class="dropdown-item" href="carbon-bush-pumps.php">Carbon Bush for pumps</a></li>
                                            <li><a class="dropdown-item mt-2" href="carbon-sealing-ring.php">Carbon Sealing ring</a></li>
                                            <span class="cat-sub-label">Carbon Gland Packing/SEGMENT Ring</span>
                                            <li><a class="dropdown-item ps-3" href="carbon-gland-packing-segment-ring.php">Carbon Gland Packing & Segment Ring (All Turbine Machines)</a></li>
                                            <li><a class="dropdown-item ps-3" href="carbon-gland-packing-electricity-board.php">Carbon Gland Packing Ring for Water Turbine (Dam, Electric Board)</a></li>
                                            <li><a class="dropdown-item ps-3" href="carbon-gland-packing-cement-industries.php">Cement Industries Carbon Gland Packing Rings</a></li>
                                            <li><a class="dropdown-item ps-3" href="carbon-gland-packing-sugar-mills.php">Sugar Mills Carbon Gland Packing Rings</a></li>
                                            <li><a class="dropdown-item mt-2" href="carbon-ring-submersible-water-pump.php">Carbon Ring For Submersible Water Pump</a></li>
                                            <li><a class="dropdown-item" href="carbon-rings-paper-mill.php">Carbon Rings For Paper Mill</a></li>
                                            <li><a class="dropdown-item" href="carbon-sealing-rings-mechanical-shaft.php">Carbon Sealing Rings For Mechanical Shaft Seals</a></li>
                                        </ul>
                                    </div>
                                    <!-- COLUMN 4 -->
                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <ul class="list-unstyled mt-lg-5">
                                            <li><a class="dropdown-item" href="carbon-vanes-vacuum-pump.php">Carbon Vanes/ Vanes Blade for vacuum pump</a></li>
                                            <li><a class="dropdown-item mt-2" href="carbon-steam-joint-rings.php">Carbon STEAM JOINT RINGS</a></li>
                                            <span class="cat-sub-label">Carbon Brush FOR ALL DIFFRNT TYPES OF MOTORS</span>
                                            <li><a class="dropdown-item ps-3" href="carbon-brush-power-tools.php">Power Tools Carbon Brush (Welding Generator, Motor Brushes, Alternator)</a></li>
                                            <li><a class="dropdown-item ps-3" href="carbon-brush-slip-rings.php">Carbon brush for slip rings (Metal, Motor, Industrial)</a></li>
                                            <li><a class="dropdown-item ps-3" href="carbon-brush-dc-motor.php">DC Motor Carbon Brushes (AC, Electro Graphite)</a></li>
                                            <li><a class="dropdown-item mt-2" href="carbon-brush-holder.php">Carbon Brush Holder for All types of Motors & Generators</a></li>
                                            <li><a class="dropdown-item" href="slip-rings-motors.php">Slip Rings for all types of motors</a></li>
                                            <span class="cat-sub-label">POLYMER PRODUCTS</span>
                                            <li><a class="dropdown-item ps-3" href="carbon-fibre-composite-polymer-sheet.php">Carbon Fibre Composite Polymer Sheet (Carbon Fiber Rod)</a></li>
                                            <li><a class="dropdown-item ps-3" href="carbon-teflon-ptfe-products.php">Carbon Teflon / PTFE Products</a></li>
                                            <li><a class="dropdown-item ps-3" href="peak-products-peek.php">Peak Products (PEEK FILLED GRAPHITE SHOCK ABSORBER FOR MONTFORT'S STENTER MACHINE)</a></li>
                                            <li><a class="dropdown-item mt-2" href="mechanical-shaft-seals-industries.php">MECHANICAL SHAFT SEALS OF ALL TYPES OF INDUSTRIES</a></li>
                                            <span class="cat-sub-label">CNC MACHINE COMPONENTS</span>
                                            <li><a class="dropdown-item ps-3" href="turning-components.php">Turning Components</a></li>
                                            <li><a class="dropdown-item ps-3" href="precision-turning-components.php">Precision turn Components</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="blog.php" class="nav-link">Blogs</a>
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Page loaded - initializing mega menu');

            // Mega Menu Click
            const productsToggle = document.getElementById('productsToggle');
            const megaMenu = document.getElementById('megaMenu');
            const megaDropdown = document.querySelector('.mega-dropdown');

            console.log('Elements found:', {
                toggle: !!productsToggle,
                menu: !!megaMenu,
                dropdown: !!megaDropdown
            });

            if (productsToggle && megaMenu) {
                // Toggle menu on click
                productsToggle.addEventListener('click', function(e) {
                    console.log('Products toggle clicked!');
                    e.preventDefault();
                    e.stopPropagation();

                    // Log current state
                    console.log('Current display:', megaMenu.style.display);

                    // Toggle display property
                    if (megaMenu.style.display === 'none' || megaMenu.style.display === '') {
                        megaMenu.style.display = 'block';
                        console.log('Menu opened');
                    } else {
                        megaMenu.style.display = 'none';
                        console.log('Menu closed');
                    }
                });

                // Close menu when clicking on a link inside
                const dropdownItems = megaMenu.querySelectorAll('.dropdown-item');
                console.log('Found dropdown items:', dropdownItems.length);

                dropdownItems.forEach(item => {
                    item.addEventListener('click', function(e) {
                        console.log('Dropdown item clicked');
                        // Close after navigation
                        setTimeout(() => {
                            megaMenu.style.display = 'none';
                        }, 100);
                    });
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (megaDropdown && !megaDropdown.contains(e.target)) {
                        console.log('Click outside, closing menu');
                        megaMenu.style.display = 'none';
                    }
                });

                // Close when ESC key is pressed
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && megaMenu.style.display === 'block') {
                        console.log('ESC pressed, closing menu');
                        megaMenu.style.display = 'none';
                    }
                });
            }

            // Active Page Logic
            const currentLocation = window.location.pathname.split("/").pop();
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .dropdown-item');

            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentLocation) {
                    link.classList.add('active');
                    if (link.classList.contains('dropdown-item')) {
                        if (document.getElementById('productsToggle')) {
                            document.getElementById('productsToggle').classList.add('active');
                        }
                    }
                }
            });

            if (currentLocation === "" || currentLocation === "index.php") {
                const homeLink = document.querySelector('a[href="index.php"]');
                if (homeLink) homeLink.classList.add('active');
            }

            // Spinner
            setTimeout(function() {
                if (document.getElementById('spinner')) {
                    document.getElementById('spinner').classList.remove('show');
                }
            }, 100);
        });
    </script>