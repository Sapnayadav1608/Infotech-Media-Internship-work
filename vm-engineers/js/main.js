(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);

    // Active nav link based on current page
    var currentPage = window.location.pathname.split('/').pop() || 'index.html';
    $('.navbar .navbar-nav .nav-link, .navbar .navbar-nav .nav-item.nav-link').each(function () {
        var href = $(this).attr('href');
        if (href === currentPage) {
            $(this).addClass('active');
            $(this).closest('.nav-item.dropdown').find('> .nav-link').addClass('active');
        }
    });
    $('.navbar .dropdown-menu .dropdown-item').each(function () {
        var href = $(this).attr('href');
        if (href === currentPage) {
            $(this).addClass('active');
            $(this).closest('.nav-item.dropdown').find('> .nav-link').addClass('active');
        }
    });

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
            $('.navbar').addClass('scrolled');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-200px');
            $('.navbar').removeClass('scrolled');
        }
    });

    // Counter animation
    function animateCounter($el) {
        var target = parseInt($el.text());
        if (isNaN(target)) return;
        $({ count: 0 }).animate({ count: target }, {
            duration: 2000,
            easing: 'swing',
            step: function () { $el.text(Math.ceil(this.count) + '+'); }
        });
    }
    var counted = false;
    $(window).scroll(function () {
        if (!counted && $(this).scrollTop() > 400) {
            counted = true;
            $('.about .about-item-content .bg-light p.text-muted').each(function () { animateCounter($(this)); });
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Mobile Dropdown
    function initMobileDropdown() {
        // Remove previous events
        $('.navbar .nav-item.dropdown > .nav-link').off('click.mobileDropdown');
        $('.navbar .dropdown-menu .dropdown-item').off('click.mobileDropdown');

        if ($(window).width() < 992) {
            // Hide all dropdowns initially on mobile
            $('.navbar .dropdown-menu').hide();

            $('.navbar .nav-item.dropdown > .nav-link').on('click.mobileDropdown', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var $item = $(this).closest('.nav-item.dropdown');
                var $menu = $item.find('.dropdown-menu');
                var isOpen = $item.hasClass('open');

                // Close all
                $('.navbar .nav-item.dropdown').not($item).removeClass('open').find('.dropdown-menu').slideUp(250);

                // Toggle current
                if (isOpen) {
                    $item.removeClass('open');
                    $menu.slideUp(250);
                } else {
                    $item.addClass('open');
                    $menu.slideDown(250);
                }
            });

            // Close on item click
            $('.navbar .dropdown-menu .dropdown-item').on('click.mobileDropdown', function () {
                $('.navbar .nav-item.dropdown').removeClass('open');
                $('.navbar .dropdown-menu').slideUp(250);
                var $collapse = $('.navbar-collapse');
                if ($collapse.hasClass('show')) {
                    $collapse.collapse('hide');
                }
            });

            // Close on outside click
            $(document).off('click.mobileDropdownOutside').on('click.mobileDropdownOutside', function (e) {
                if (!$(e.target).closest('.navbar').length) {
                    $('.navbar .nav-item.dropdown').removeClass('open');
                    $('.navbar .dropdown-menu').slideUp(250);
                }
            });

        } else {
            // Desktop - reset inline styles set by slideDown/slideUp
            $('.navbar .dropdown-menu').css('display', '');
            $('.navbar .nav-item.dropdown').removeClass('open');
            $(document).off('click.mobileDropdownOutside');
        }
    }

    // Init on load
    initMobileDropdown();

    // Re-init on resize
    var resizeTimer;
    $(window).on('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            initMobileDropdown();
        }, 150);
    });

    // Reset dropdown when navbar collapses
    $('.navbar-collapse').on('hide.bs.collapse', function () {
        $('.navbar .nav-item.dropdown').removeClass('open');
        $('.navbar .dropdown-menu').hide();
    });

})(jQuery);
