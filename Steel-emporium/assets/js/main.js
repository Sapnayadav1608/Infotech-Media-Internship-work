/*
|-----------------------------------------------------
| Template	: LexVersa - Law Firm & Lawyer Service HTML Template
| Author	: Themesfamily
| Developer	: Themesfamily
| Version	: 1.0.0
|-----------------------------------------------------
|-----------------------------------------------------
*/
/***************************************************
==================== JS ======================
****************************************************
01. PRELOADER JS
	---HEADER SEACRCH JS
02. STICKY HEADER JS 
03.	MOBILE MENU 
04. SCROLL MENU
	---STICKY MENU JS
	---SCROOL UP JS
05. ODOMETER JS 
06. PORTFOLIO ISOTOP JS
07. LIGHTCASE JS
08. MAILCHAMP JS
09. START NICE SELECT JS
10. WOW SCROLL SPY
11. MARQUEE JS 
12. CLIENT JS 
13. SERVICE JS 
14. PROFILIO SLIDER JS
15. START BRAND JS
16. START BLOG GALLERY JS 
17. START BLOG LIST SLIDER JS
18. START HOME SLIDER JS
	---START COUNTER
****************************************************/
(function($) {
    "use strict";
	
	
	/*--------------------------------------------------------------
	01. PRELOADER JS
	--------------------------------------------------------------*/			
	$(window).on('load', function() { 
		// Preloader
		setTimeout(function(){
			$('.atf_preloader').addClass('loaded');
		}, 1000);
	}); 
	/*--------------------------------------------------------------
	HEADER SEACRCH JS
	--------------------------------------------------------------*/
	$('.atf-searching-btn').on('click', function(){
		$('.atf-searching-area').addClass('active');
	});

	 $('.atf-searching-close-btn').on('click', function(){
		$('.atf-searching-area').removeClass('active');
	  });
	/*--------------------------------------------------------------
	02.	STICKY HEADER JS
	--------------------------------------------------------------*/
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
				$(".atf-sticky-header").removeClass("atf-sticky-active");
			} else {
				$('.atf-sticky-header').addClass('atf-sticky-active');
			}
    });
	$(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
				$(".atf-sticky-header.atf-style2").removeClass("atf-sticky-active");
			} else {
				$('.atf-sticky-header.atf-style2').addClass('atf-sticky-active');
			}
    });

    /*--------------------------------------------------------------
	03.	MOBILE MENU 
	--------------------------------------------------------------*/
    var atfHamburger = $(".atf-mobile-menu-active > ul").clone();
    var atfHamburgerMenu = $(".atf-hamburger-menu nav");
    atfHamburgerMenu.append(atfHamburger);
    if ($(atfHamburgerMenu).find(".sub-menu").length != 0) {
        $(atfHamburgerMenu).find(".sub-menu").parent().append('<button class="atf-menu-close"><i class="fas fa-chevron-right"></i></button>');
    }

    // Toggle button (chevron) - always prevent default
    $(".atf-hamburger-menu nav > ul > li button.atf-menu-close").on("click", function (e) {
        e.preventDefault();
        var $parent = $(this).parent();
        if (!$parent.hasClass("active")) {
            $parent.addClass("active");
            $(this).siblings(".sub-menu").slideDown();
        } else {
            $(this).siblings(".sub-menu").slideUp();
            $parent.removeClass("active");
        }
    });

    // Menu links with children - toggle submenu but allow navigation
    $(".atf-hamburger-menu nav > ul li.menu-item-children > a").on("click", function (e) {
        var $sub = $(this).siblings(".sub-menu");
        if ($sub.length && $sub.is(":hidden")) {
            e.preventDefault();
            $(this).parent().addClass("active");
            $sub.slideDown();
        }
        // if submenu already open, allow navigation
    });
	
    // Hamburger open/close
	$(".atf-hamburger-toogle").on("click", function () {
		$(".atf-hamburger").addClass("atf-hamburger-open");
		$(".atf-hamburger-overlay").addClass("atf-hamburger-overlay-open");
		$("body").addClass("menu-open");
	});

	$(".atf-hamburger-close-toggle, .atf-hamburger-overlay").on("click", function () {
		$(".atf-hamburger").removeClass("atf-hamburger-open");
		$(".atf-hamburger-overlay").removeClass("atf-hamburger-overlay-open");
		$("body").removeClass("menu-open");
	});

	// Make Hamburger independently scrollable
	$(".atf-hamburger").on('wheel touchmove', function(e){
		e.stopPropagation(); // prevent Lenis from blocking
	});
	// Make Hamburger Onepage scrollable
	$(".atf-hamburger-menu nav > ul.atf-onepage-menu li a").on("click", function () {
        $(".atf-hamburger").removeClass("atf-hamburger-open");
        $(".atf-hamburger-overlay").removeClass("atf-hamburger-overlay-open");
    });

    /*--------------------------------------------------------------
	04.	SCROLL MENU
	--------------------------------------------------------------*/
    function scrollPage() {
        $(".atf-onepage-menu li a").on('click',function () {
            $(".atf-onepage-menu li a.active").removeClass("active");
            $(this).addClass("active");

            $("html, body")
                .stop()
                .animate(
                    {
                        scrollTop: $($(this).attr("href")).offset().top - 100,
                    },
                    300
                );
            return false;
        });
    }
    scrollPage();
        
	/*--------------------------------------------------------------
	STICKY MENU JS
	--------------------------------------------------------------*/
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > 50) {
			$('.atf-sticky-header').addClass('atf-nav');
			$('.atf-back-to-top').addClass('open');
		} else {
			$('.atf-sticky-header').removeClass('atf-nav');
			$('.atf-back-to-top').removeClass('open');
		}
	});
		 
	/*--------------------------------------------------------------
	SCROOL UP JS
	--------------------------------------------------------------*/	
	$(window).on('scroll', function () { 
		var scrolled = $(window).scrollTop();
		if (scrolled > 400) $('.back-to-top').addClass('active');
		if (scrolled < 400) $('.back-to-top').removeClass('active');
	});

	$('.back-to-top').on('click', function () {
		$("html, body").animate({
			scrollTop: "0"
		}, 50);
	});
	
	/* --------------------------------------------------------
	05. ODOMETER JS 
	--------------------------------------------------------- */
	$('.odometer').appear(function() {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});
			
	/* --------------------------------------------------------
	06. PORTFOLIO ISOTOP JS
	--------------------------------------------------------- */

	var portfolioIsotope = $('.atf-main-portfolio').isotope({
		itemSelector: '.atf-grid'
	});

	$('#atf-portfolio-flters li').on('click', function() {
		$("#atf-portfolio-flters li").removeClass('filter-active');
		$(this).addClass('filter-active');

		portfolioIsotope.isotope({
			filter: $(this).data('filter')
		});
	});

	/* --------------------------------------------------------
	07.	LIGHTCASE JS
	--------------------------------------------------------- */
	const $lightcaseLinks = $("a[data-rel^=lightcase]");

	// Unbind any previous click events to avoid double trigger
	$lightcaseLinks.off('click.lightcase');

	// Initialize Lightcase once
	$lightcaseLinks.lightcase({
		transition: "elastic", // none, fade, fadeInline, elastic, scrollTop, etc.
		swipe: true,
		maxWidth: 1170,
		maxHeight: 600,
	});  

	/* --------------------------------------------------------
	08. MAILCHAMP JS
	--------------------------------------------------------- */
	$('#mc-form').ajaxChimp({
		url: 'https://themesfamily.us22.list-manage.com/subscribe/post?u=e056d9c3aeb53b20aff997467&amp;id=e307d7e1b8&amp;f_id=0012cee1f0'
		/* Replace Your AjaxChimp Subscription Link */
	}); 
	
	/* --------------------------------------------------------
	09.	START NICE SELECT JS
	--------------------------------------------------------- */
	$('select').niceSelect();	
		
	/*--------------------------------------------------------------
	10. WOW SCROLL SPY
	--------------------------------------------------------------*/	
	 var wow = new WOW({
		  //disabled for mobile
			mobile: false
		});

	wow.init();
	/* --------------------------------------------------------
	11. MARQUEE JS 
	--------------------------------------------------------- */	
	$('#marqueeLeft').marquee({
		speed: 70,     
		gap: 50,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});
				
		
	/* --------------------------------------------------------
	12. CLIENT JS 
	--------------------------------------------------------- */
	$('.atf_testimonial_slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="next"><i class="fa-solid fa-arrow-right"></i></button>'
	});
		  
		  
	/* --------------------------------------------------------
	13.  SERVICE JS 
	--------------------------------------------------------- */
	$('.atf__service-slider-active').slick({
		arrows: false,
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<a class="slick-prev"><i class="fas fa-arrow-left" alt="Arrow Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fas fa-arrow-right" alt="Arrow Icon"></i></a>',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
				}
			},
			{
				breakpoint: 580,
				settings: {
					arrows: false,
					dots: true,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
		
	/* --------------------------------------------------------
	14. PROFILIO SLIDER JS
	--------------------------------------------------------- */
	$('.atf__porfolio-slider-active').slick({
		arrows: true,
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<a class="slick-prev"><i class="fas fa-arrow-left" alt="Arrow Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fas fa-arrow-right" alt="Arrow Icon"></i></a>',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
				}
			},
			{
				breakpoint: 580,
				settings: {
					arrows: false,
					dots: true,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
		
	/* --------------------------------------------------------
	15. START BRAND JS
	--------------------------------------------------------- */
	$('.atf__brand-active').slick({
		arrows: false,
		dots: false,
		infinite: true,
		autoplay: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		prevArrow: '<a class="slick-prev"><i class="fas fa-arrow-left" alt="Arrow Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fas fa-arrow-right" alt="Arrow Icon"></i></a>',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
					dots: false,
				}
			},
			{
				breakpoint: 580,
				settings: {
					arrows: false,
					dots: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	
	/* --------------------------------------------------------
	16. START BLOG GALLERY JS 
		--------------------------------------------------------- */
	$('.atf__blog_slider_active').slick({
		arrows: true,
		dots: false,
		autoplay:false,
		infinite: true,
		speed: 300,
		slidesToShow:1,
		slidesToScroll: 1,
		prevArrow: '<a class="slick-prev"><i class="fa-light fa-arrow-left" alt=" Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fa-light fa-arrow-right" alt="Icon"></i></a>',
	});
	/* --------------------------------------------------------
	END BLOG GALLERY JS 
	--------------------------------------------------------- */
	
    /* --------------------------------------------------------
	18. START HOME SLIDER JS 
	--------------------------------------------------------- */
	$('.atf-slick-slider-1').slick({
		arrows: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 4000,
		speed: 500,
		loop: true,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		adaptiveHeight: true,
		slidesToScroll: 1,
		prevArrow: '<a class="slick-prev"><i class="fa-light fa-arrow-left-long" alt="Arrow Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fa-light fa-arrow-right-long" alt="Arrow Icon"></i></a>',
	});
	/* --------------------------------------------------------
	18. START COUNTER
	--------------------------------------------------------- */
	$('.counter-number').counterUp({
		delay: 15,
		time: 2000
	});
	
    
})(jQuery);


