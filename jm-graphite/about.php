<?php
$page_title = "About Us | JM Graphite & Carbon (India) LLP";
$meta_description = "Learn about JM Graphite & Carbon (India) LLP - Established in 1974, leading manufacturer & exporter of carbon and graphite products with 50+ years of engineering excellence.";
$meta_keywords = "About JM Graphite, Carbon Component Manufacturer India, Graphite Manufacturer, Industrial Carbon Solutions";
include 'header.php';
?>

<!-- <link rel="stylesheet" href="css/about.css"> -->

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

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
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

    .company-card {
        animation: slideInLeft 0.8s ease-out;
    }

    .company-content {
        animation: slideInRight 0.8s ease-out;
    }

    .stats-card {
        animation: scaleIn 0.6s ease-out;
        transition: all 0.3s ease;
    }

    .stats-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2) !important;
    }

    .product-card {
        animation: fadeInUp 0.6s ease-out;
        transition: all 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
    }

    .industry-card {
        animation: scaleIn 0.6s ease-out;
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }

    .industry-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(220, 53, 69, 0.3) !important;
    }

    .industry-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.1), rgba(139, 0, 0, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
        pointer-events: none;
    }

    .industry-card:hover::before {
        opacity: 1;
    }

    .industry-card img {
        transition: transform 0.3s ease;
    }

    .industry-card:hover img {
        transform: scale(1.1);
    }

    .industry-card .card-body {
        transition: all 0.3s ease;
    }

    .industry-card:hover .card-body {
        background-color: #f8f9fa;
    }

    .industry-card .card-title {
        transition: color 0.3s ease;
    }

    .industry-card:hover .card-title {
        color: #dc3545 !important;
    }

    .feature-item {
        animation: fadeInUp 0.6s ease-out;
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        transform: translateX(10px);
    }

    .feature-item i {
        animation: pulse 2s infinite;
    }

    .section-title {
        animation: fadeInUp 0.6s ease-out;
        cursor: default;
    }

    .section-title:hover {
        text-decoration: none !important;
        transform: none !important;
    }

    .breadcrumb-item {
        animation: fadeInUp 0.6s ease-out 0.3s both;
    }

    /* Enhanced Professional Animations */
    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes rotateIn {
        from {
            opacity: 0;
            transform: rotate(-5deg) scale(0.95);
        }

        to {
            opacity: 1;
            transform: rotate(0) scale(1);
        }
    }

    @keyframes bounceIn {
        0% {
            opacity: 0;
            transform: scale(0.3);
        }

        50% {
            opacity: 1;
            transform: scale(1.05);
        }

        70% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Section animations */
    .company-overview-section {
        animation: fadeIn 0.6s ease-out;
    }

    .stats-section {
        animation: slideUp 0.8s ease-out;
    }

    .product-expertise-section {
        animation: fadeIn 0.6s ease-out;
    }

    .why-choose-section {
        animation: slideUp 0.8s ease-out;
    }

    .industries-section {
        animation: fadeIn 0.6s ease-out;
    }

    /* Enhanced card animations */
    .company-card {
        animation: slideInLeft 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .company-content {
        animation: slideInRight 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .stats-card {
        animation: bounceIn 0.6s ease-out;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .stats-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 20px 50px rgba(220, 53, 69, 0.25) !important;
    }

    .product-card {
        animation: zoomIn 0.6s ease-out;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .product-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2) !important;
    }

    .industry-card {
        animation: rotateIn 0.6s ease-out;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .industry-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 20px 50px rgba(220, 53, 69, 0.3) !important;
    }

    .feature-item {
        animation: slideUp 0.6s ease-out;
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        transform: translateX(12px);
        padding-left: 5px;
    }

    .feature-item i {
        animation: pulse 2s ease-in-out infinite;
        transition: all 0.3s ease;
    }

    .feature-item:hover i {
        animation: pulse 1s ease-in-out infinite;
    }

    /* Text animations */
    h2 {
        animation: slideDown 0.6s ease-out;
    }

    h4 {
        animation: slideDown 0.5s ease-out;
    }

    p {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Stagger animations for list items */
    .feature-item:nth-child(1) {
        animation-delay: 0s;
    }

    .feature-item:nth-child(2) {
        animation-delay: 0.1s;
    }

    .feature-item:nth-child(3) {
        animation-delay: 0.2s;
    }

    .stats-card:nth-child(1) {
        animation-delay: 0s;
    }

    .stats-card:nth-child(2) {
        animation-delay: 0.1s;
    }

    .stats-card:nth-child(3) {
        animation-delay: 0.2s;
    }

    .stats-card:nth-child(4) {
        animation-delay: 0.3s;
    }

    .product-card {
        animation-delay: 0.1s;
    }

    .industry-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .industry-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .industry-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .industry-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .industry-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .industry-card:nth-child(6) {
        animation-delay: 0.6s;
    }

    .industry-card:nth-child(7) {
        animation-delay: 0.7s;
    }

    .industry-card:nth-child(8) {
        animation-delay: 0.8s;
    }

    /* Why Choose Us Section Animations */
    .why-choose-section {
        animation: slideUp 0.8s ease-out;
    }

    .why-choose-item {
        animation: zoomIn 0.6s ease-out;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        padding: 30px 20px;
        border-radius: 12px;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.1));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(220, 53, 69, 0.1);
    }

    .why-choose-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .why-choose-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .why-choose-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .why-choose-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .why-choose-item:hover {
        transform: translateY(-15px) scale(1.05);
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.1), rgba(220, 53, 69, 0.05));
        box-shadow: 0 20px 50px rgba(220, 53, 69, 0.2);
        border-color: rgba(220, 53, 69, 0.3);
    }

    .why-choose-item i {
        animation: pulse 2s ease-in-out infinite;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-block;
    }

    .why-choose-item:hover i {
        animation: pulse 1s ease-in-out infinite;
        transform: scale(1.2) rotate(10deg);
        color: #dc3545;
    }

    .why-choose-item h5 {
        animation: slideDown 0.6s ease-out;
        transition: all 0.3s ease;
    }

    .why-choose-item:hover h5 {
        color: #dc3545;
        transform: translateY(-5px);
    }

    /* Enhanced Hovering Effects */
    .company-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }

    .company-content:hover h2 {
        color: #dc3545;
        transform: translateX(5px);
    }

    .company-content:hover h4 {
        color: #dc3545;
    }

    .company-content:hover .btn {
        transform: translateX(5px);
        box-shadow: 0 10px 30px rgba(220, 53, 69, 0.3);
    }

    /* Button hover effects */
    .btn {
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(220, 53, 69, 0.3);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #dc3545, #c82333);
    }

    /* Carousel item hover */
    .owl-carousel .item:hover .product-card {
        transform: scale(1.05);
    }

    /* Text hover effects */
    .company-content p {
        transition: all 0.3s ease;
    }

    .company-content:hover p {
        color: #555;
    }

    /* Icon hover effects */
    .why-choose-item i,
    .industry-card i {
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .industry-card:hover i {
        transform: scale(1.3) rotate(-10deg);
        color: #dc3545;
    }

    /* Company Overview Section Animations */
    .company-overview-section {
        animation: fadeIn 0.8s ease-out;
    }

    .company-card {
        animation: slideInLeft 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        position: relative;
        overflow: hidden;
    }

    .company-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
        z-index: 1;
    }

    .company-card:hover::before {
        left: 100%;
    }

    .company-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
    }

    .company-card .card-body {
        animation: slideUp 0.8s ease-out 0.2s both;
        transition: all 0.4s ease;
    }

    .company-card:hover .card-body {
        transform: translateY(-5px);
    }

    .company-card i {
        animation: bounceIn 0.8s ease-out 0.3s both;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-block;
    }

    .company-card:hover i {
        transform: scale(1.2) rotate(15deg);
        animation: pulse 1s ease-in-out infinite;
    }

    .company-card h3 {
        animation: slideDown 0.6s ease-out 0.4s both;
        transition: all 0.3s ease;
    }

    .company-card:hover h3 {
        color: #ffc107;
        transform: translateY(-5px);
    }

    .company-card p {
        animation: fadeInUp 0.6s ease-out 0.5s both;
        transition: all 0.3s ease;
    }

    .company-card:hover p {
        color: #f0f0f0;
    }

    .company-content {
        animation: slideInRight 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .company-content h4 {
        animation: slideDown 0.6s ease-out 0.2s both;
        transition: all 0.3s ease;
    }

    .company-content:hover h4 {
        color: #dc3545;
        transform: translateX(8px);
    }

    .company-content h2 {
        animation: slideDown 0.6s ease-out 0.3s both;
        transition: all 0.3s ease;
        position: relative;
    }

    .company-content h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #dc3545, #c82333);
        transition: width 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .company-content:hover h2::after {
        width: 100px;
    }

    .company-content:hover h2 {
        color: #dc3545;
        transform: translateX(5px);
    }

    .company-content p {
        animation: fadeInUp 0.6s ease-out 0.4s both;
        transition: all 0.3s ease;
        line-height: 1.8;
    }

    .company-content:hover p {
        color: #444;
    }

    .company-content .mt-4 {
        animation: slideUp 0.6s ease-out 0.5s both;
    }

    .feature-item {
        animation: slideUp 0.6s ease-out;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        padding: 15px;
        border-radius: 8px;
        background: rgba(220, 53, 69, 0.05);
    }

    .feature-item:nth-child(1) {
        animation-delay: 0.5s;
    }

    .feature-item:nth-child(2) {
        animation-delay: 0.6s;
    }

    .feature-item:nth-child(3) {
        animation-delay: 0.7s;
    }

    .feature-item:hover {
        transform: translateX(15px);
        background: rgba(220, 53, 69, 0.1);
        box-shadow: 0 5px 20px rgba(220, 53, 69, 0.15);
        padding-left: 25px;
    }

    .feature-item i {
        animation: pulse 2s ease-in-out infinite;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-block;
        margin-right: 15px;
    }

    .feature-item:hover i {
        animation: pulse 1s ease-in-out infinite;
        transform: scale(1.3) rotate(20deg);
        color: #dc3545;
    }

    .feature-item h6 {
        animation: slideDown 0.5s ease-out;
        transition: all 0.3s ease;
    }

    .feature-item:hover h6 {
        color: #dc3545;
        transform: translateY(-3px);
    }

    .feature-item p {
        animation: fadeInUp 0.5s ease-out;
        transition: all 0.3s ease;
    }

    .feature-item:hover p {
        color: #555;
    }

    .company-content .btn {
        animation: bounceIn 0.8s ease-out 0.8s both;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        position: relative;
        overflow: hidden;
    }

    .company-content .btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .company-content .btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .company-content .btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 15px 40px rgba(220, 53, 69, 0.4);
    }

    /* Product Expertise Section Animations */
    .product-expertise-section {
        animation: fadeIn 0.8s ease-out;
        position: relative;
    }

    .product-expertise-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, #dc3545, transparent);
        animation: slideInRight 1s ease-out;
    }

    .product-expertise-section h2 {
        animation: slideDown 0.6s ease-out;
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .product-expertise-section h2::before {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #dc3545, #c82333);
        border-radius: 2px;
        animation: scaleIn 0.6s ease-out 0.3s both;
    }

    .owl-carousel {
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    .owl-carousel .item {
        animation: zoomIn 0.6s ease-out;
    }

    .owl-carousel .item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .owl-carousel .item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .owl-carousel .item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .owl-carousel .item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .owl-carousel .item:nth-child(5) {
        animation-delay: 0.5s;
    }

    .owl-carousel .item:nth-child(6) {
        animation-delay: 0.6s;
    }

    .owl-carousel .item:nth-child(7) {
        animation-delay: 0.7s;
    }

    .owl-carousel .item:nth-child(8) {
        animation-delay: 0.8s;
    }

    .owl-carousel .item:nth-child(9) {
        animation-delay: 0.9s;
    }

    .owl-carousel .item:nth-child(10) {
        animation-delay: 1s;
    }

    .owl-carousel .item:nth-child(11) {
        animation-delay: 1.1s;
    }

    .owl-carousel .item:nth-child(12) {
        animation-delay: 1.2s;
    }

    .product-card {
        animation: zoomIn 0.6s ease-out;
        transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        border-radius: 12px;
        position: relative;
        overflow: hidden;
    }

    .product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.1), rgba(220, 53, 69, 0.05));
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
        pointer-events: none;
    }

    .product-card:hover::before {
        opacity: 1;
    }

    .product-card:hover {
        transform: translateY(-15px) scale(1.05) rotateX(5deg);
        box-shadow: 0 25px 60px rgba(220, 53, 69, 0.25);
    }

    .product-card .card-body {
        animation: slideUp 0.6s ease-out 0.2s both;
        transition: all 0.4s ease;
        position: relative;
        z-index: 2;
    }

    .product-card:hover .card-body {
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.05), rgba(220, 53, 69, 0.02));
    }

    .product-card i {
        animation: bounceIn 0.8s ease-out 0.3s both;
        transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-block;
    }

    .product-card:hover i {
        transform: scale(1.4) rotate(20deg);
        color: #dc3545;
        animation: pulse 1s ease-in-out infinite;
    }

    .product-card h6 {
        animation: slideDown 0.6s ease-out 0.4s both;
        transition: all 0.3s ease;
    }

    .product-card:hover h6 {
        color: #dc3545;
        transform: translateY(-5px);
    }

    .product-card p {
        animation: fadeInUp 0.6s ease-out 0.5s both;
        transition: all 0.3s ease;
        line-height: 1.6;
    }

    .product-card:hover p {
        color: #333;
    }

    /* Carousel Navigation */
    .owl-nav {
        animation: fadeIn 0.8s ease-out 1.5s both;
    }

    .owl-nav button {
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        background: linear-gradient(135deg, #dc3545, #c82333) !important;
        border-radius: 50%;
        width: 50px !important;
        height: 50px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    .owl-nav button:hover {
        transform: scale(1.2) rotate(10deg);
        box-shadow: 0 10px 30px rgba(220, 53, 69, 0.4);
    }

    .owl-nav button span {
        font-size: 20px;
    }

    /* Carousel dots */
    .owl-dots {
        animation: fadeIn 0.8s ease-out 1.5s both;
    }

    .owl-dot {
        transition: all 0.3s ease;
    }

    .owl-dot.active span {
        background: #dc3545 !important;
        transform: scale(1.2);
    }

    .owl-dot span {
        transition: all 0.3s ease;
    }

    .owl-dot:hover span {
        background: #dc3545 !important;
        transform: scale(1.1);
    }
</style>

<!-- HERO SECTION -->
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('img/aboutbg.png');
background-size: cover;
background-position: center;
min-height: 420px;
display:flex;
align-items:center;">

    <div class="container text-center">

        <h1 class="display-3 text-white mb-3 hero-title">
            About Us
        </h1>

        <p class="text-white fs-5 mb-4 hero-subtitle">
        </p>

        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item text-primary active breadcrumb-item">
                About
            </li>
        </ol>

    </div>
</div>


<!-- COMPANY OVERVIEW -->
<section class="py-5 bg-light company-overview-section">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="card border-0 shadow-lg h-100 company-card"
                    style="background: linear-gradient(rgba(139,0,0,.85), rgba(178,34,34,.85)), url('img/carbon-technology.png');
background-size:cover;
background-position:center;
min-height:420px;">

                    <div class="card-body p-5 d-flex flex-column justify-content-center">

                        <i class="fas fa-industry fa-4x text-white mb-4"></i>

                        <h3 class="text-white fw-bold mb-3">
                            50+ Years of Manufacturing Excellence
                        </h3>

                        <p class="text-white">
                            Founded in 1974 by Late <strong>Mr. Mahendra Bhai C. Shah</strong>,
                            JM Graphite & Carbon (India) LLP has established itself as a reliable manufacturer
                            of graphite and carbon industrial components across India and international markets.
                        </p>

                    </div>
                </div>

            </div>


            <div class="col-lg-6 company-content">

                <h4 class="text-primary fw-bold mb-2 section-title">
                    Company Overview
                </h4>

                <h2 class="fw-bold mb-4">
                    JM Graphite & Carbon (India) LLP
                </h2>

                <p>
                    Established in <strong>1974</strong>, JM Graphite & Carbon (India) LLP is a leading Indian manufacturer
                    specializing in high-performance graphite and carbon industrial products.
                </p>

                <p>
                    Our products are widely used in cement plants, textile industries, power plants,
                    chemical processing units, paper mills, sugar factories and engineering industries.
                </p>

                <div class="mt-4">

                    <div class="d-flex mb-3 feature-item">
                        <i class="fas fa-check-circle text-primary me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Indigenous Manufacturing Technology</h6>
                            <p class="text-muted mb-0">Developed using completely indigenous know-how</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 feature-item">
                        <i class="fas fa-check-circle text-primary me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">50+ Years Industry Experience</h6>
                            <p class="text-muted mb-0">Trusted expertise in graphite engineering</p>
                        </div>
                    </div>

                    <div class="d-flex feature-item">
                        <i class="fas fa-check-circle text-primary me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Global Export Presence</h6>
                            <p class="text-muted mb-0">Exported to UAE, Egypt, Malaysia, Nepal, Sri Lanka & more</p>
                        </div>
                    </div>

                </div>

                <a class="btn btn-primary rounded-pill text-white py-3 px-5 mt-4" href="products.php">
                    Explore Products
                </a>

            </div>

        </div>
    </div>
</section>


<!-- COMPANY STATS -->
<section class="py-5 bg-primary">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-lg h-100 text-center bg-white">
                    <div class="card-body p-5">
                        <h1 class="display-4 fw-bold text-primary mb-2"><span class="counter-number" data-target="50">0</span>+</h1>
                        <p class="text-muted fw-bold mb-0">Years Experience</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.2s">
                <div class="card border-0 shadow-lg h-100 text-center bg-white">
                    <div class="card-body p-5">
                        <h1 class="display-4 fw-bold text-primary mb-2"><span class="counter-number" data-target="12">0</span>+</h1>
                        <p class="text-muted fw-bold mb-0">Industrial Products</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.3s">
                <div class="card border-0 shadow-lg h-100 text-center bg-white">
                    <div class="card-body p-5">
                        <h1 class="display-4 fw-bold text-primary mb-2"><span class="counter-number" data-target="9">0</span>+</h1>
                        <p class="text-muted fw-bold mb-0">Export Countries</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.4s">
                <div class="card border-0 shadow-lg h-100 text-center bg-white">
                    <div class="card-body p-5">
                        <h1 class="display-4 fw-bold text-primary mb-2"><span class="counter-number" data-target="500">0</span>+</h1>
                        <p class="text-muted fw-bold mb-0">Satisfied Clients</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(220, 53, 69, 0.2) !important;
    }
</style>

<script>
    function startCounter() {
        const counters = document.querySelectorAll('.counter-number');

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 50;
            let current = 0;

            const updateCount = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    setTimeout(updateCount, 30);
                } else {
                    counter.textContent = target;
                }
            };

            updateCount();
        });
    }

    window.addEventListener('load', startCounter);

    const statsSection = document.querySelector('.bg-primary');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounter();
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(statsSection);
    }
</script>


<!-- PRODUCT EXPERTISE -->
<section class="py-5 bg-white product-expertise-section">
    <div class="container">

        <h2 class="text-primary text-center mb-5 section-title">
            Our Product Expertise
        </h2>

        <div class="owl-carousel owl-theme products-carousel pt-5 fadeInUp position-relative" data-wow-delay="0.1s">

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Graphite Sliding Parts</h6>
                        <p class="text-muted small mb-0">High-precision graphite components for smooth sliding applications in industrial machinery</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Graphite Blocks & Rods</h6>
                        <p class="text-muted small mb-0">Durable graphite blocks and rods for various industrial applications and custom machining</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Graphite Rotary Kiln Seals</h6>
                        <p class="text-muted small mb-0">Specialized seals for rotary kilns in cement and chemical industries with superior durability</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Carbon Raschig Rings</h6>
                        <p class="text-muted small mb-0">Efficient packing material for chemical processing and absorption towers</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Graphite Rails</h6>
                        <p class="text-muted small mb-0">Precision-engineered graphite rails for smooth motion and reduced friction in machinery</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Carbon Gland Packing</h6>
                        <p class="text-muted small mb-0">Reliable packing rings for shaft sealing in pumps and compressors</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Carbon Vanes</h6>
                        <p class="text-muted small mb-0">High-performance carbon vanes for vacuum pumps and rotary compressors</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Mechanical Seals</h6>
                        <p class="text-muted small mb-0">Advanced mechanical seals for pumps, compressors, and rotating equipment</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Carbon Brush Holders</h6>
                        <p class="text-muted small mb-0">Precision brush holders for electrical machines and motors</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Graphite Crucibles</h6>
                        <p class="text-muted small mb-0">High-temperature graphite crucibles for metal melting and casting applications</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Carbon Bush Bearings</h6>
                        <p class="text-muted small mb-0">Self-lubricating carbon bearings for long-lasting performance</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow-sm product-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="fas fa-cube fa-2x text-primary mb-3"></i>
                        <h6 class="fw-bold mb-2">Custom Components</h6>
                        <p class="text-muted small mb-0">Tailored graphite and carbon solutions for specialized industrial requirements</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .carousel-nav-arrows {
        position: absolute;
        bottom: 20px;
        right: 20px;
        display: flex;
        gap: 10px;
        z-index: 10;
    }

    .carousel-arrow {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background-color: #dc3545;
        color: white;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .carousel-arrow:hover {
        background-color: #c82333;
        transform: scale(1.1);
    }

    .owl-carousel .owl-item {
        animation: slideIn 0.6s ease-in-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<script>
    $(document).ready(function() {
        $(".products-carousel").owlCarousel({
            items: 4,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplaySpeed: 800,
            autoplayHoverPause: false,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
</script>


<!-- WHY CHOOSE US -->
<section class="py-5 bg-light why-choose-section">
    <div class="container">

        <h2 class="text-center text-primary mb-5">
            Why Choose JM Graphite & Carbon
        </h2>

        <div class="row text-center">

            <div class="col-md-3 why-choose-item">
                <i class="fas fa-award fa-3x text-primary mb-3"></i>
                <h5>50+ Years Experience</h5>
            </div>

            <div class="col-md-3 why-choose-item">
                <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                <h5>Advanced Manufacturing</h5>
            </div>

            <div class="col-md-3 why-choose-item">
                <i class="fas fa-globe fa-3x text-primary mb-3"></i>
                <h5>Global Export Market</h5>
            </div>

            <div class="col-md-3 why-choose-item">
                <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                <h5>Custom Engineering</h5>
            </div>

        </div>

    </div>
</section>


<!-- INDUSTRIES -->
<section class="bg-primary py-3">
    <div class="container py-3">

        <h2 class="text-center text-dark fw-bold mb-5">
            Industries We Serve
        </h2>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/cement-industry.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Cement Industry">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Cement Industry</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.2s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/textile-industry.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Textile Industry">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Textile Industry</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.3s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/chemical-plants.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Chemical Plants">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Chemical Plants</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.4s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/power-plants.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Power Plants">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Power Plants</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3  fadeInUp" data-wow-delay="0.5s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/metal-manufacturing.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Metal Manufacturing">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Metal Manufacturing</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.6s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/paper-mills.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Paper Mills">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Paper Mills</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.7s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/sugar-industry.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Sugar Industry">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sugar Industry</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fadeInUp" data-wow-delay="0.8s">
                <div class="card border-0 shadow h-100 text-center industry-card">
                    <img src="img/engineering-industries.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Engineering Industries">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Engineering Industries</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>



<?php include 'footer.php'; ?>