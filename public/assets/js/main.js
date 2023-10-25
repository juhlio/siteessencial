
/*---------------------------
      Table of Contents
    --------------------
    
    01- Mobile Menu
    02- Sticky Navbar
    03- Module Search 
    04- Module Sidenav 
    05- Module Cart 
    06- Module popup Menu
    07- Scroll Top Button
    08- Equal Height Elements
    09- Set Background-img to section 
    10- Increase and Decrease Input Value
    11- Add active class to accordions
    12- Switch Between List view and Grid View
    13- Nav Split
    14- Progress bars
    15- Owl Carousel
    16- Popup Video
    17- CounterUp
    18- Pie Charts 
    19- Products Filtering and Sorting
    20- Range Slider
    21- Count Down Timer
    
 ----------------------------*/

$(function () {

    // Global variables
    var $win = $(window);

    /*==========   Mobile Menu   ==========*/
    var $navToggler = $('.navbar-toggler');
    $navToggler.on('click', function () {
        $(this).toggleClass('actived');
    })
    $navToggler.on('click', function () {
        $('.navbar-collapse').toggleClass('menu-opened');
    })

    // Toggle dropdown Menu in Mobile
    $('.dropdown-menu [data-toggle=dropdown]').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).parent().siblings().removeClass("opened");
        $(this).parent().toggleClass("opened");
    });
    $('.dropdown-submenu [data-toggle=dropdown]').on('click', function (e) {
        $(this).next().toggleClass("show");
        $(this).parent().siblings().find('.dropdown-menu').removeClass('show');
    });

    /*==========   Sticky Navbar   ==========*/
    $win.on('scroll', function () {
        if ($win.width() >= 992) {
            var $navbar = $('.navbar');
            if ($win.scrollTop() > 80) {
                $navbar.addClass('fixed-navbar');
            } else {
                $navbar.removeClass('fixed-navbar');
            }
        }
    });
    /*==========  Module Search   ==========*/
    var $moduleBtnSearch = $('.module__btn-search'),
        $moduleSearchContainer = $('.module__search-container');
    // Show Module Search
    $moduleBtnSearch.on('click', function (e) {
        e.preventDefault();
        $moduleSearchContainer.toggleClass('active', 'inActive').removeClass('inActive');
    });
    // Close Module Search
    $('.close-search').on('click', function () {
        $moduleSearchContainer.removeClass('active').addClass('inActive');
    });

    /*==========  Module Sidenav   ==========*/
    var $moduleBtnSidenav = $('.module__btn-sidenav'),
        $moduleSidenavContainer = $('.module__sidenav-container')
    // Show Module Sidenav
    $moduleBtnSidenav.on('click', function (e) {
        e.preventDefault();
        $moduleSidenavContainer.toggleClass('active', 'inActive').removeClass('inActive');
    });
    // Close Module Sidenav
    $('.close-sidenav').on('click', function () {
        $moduleSidenavContainer.removeClass('active').addClass('inActive');
    });
    // Close Module Sidenav when clicking on an other place on the Document
    $(document).on('mouseup', function (e) {
        if (!$('.sidenav__menu').is(e.target) && !$moduleBtnSidenav.is(e.target) && $('.sidenav__menu').has(e.target).length === 0 && $moduleBtnSidenav.has(e.target).length === 0) {
            $moduleSidenavContainer.removeClass('active');
        }
    });

    /*==========  Module Cart   ==========*/
    var $moduleCartContainer = $('.module__cart-container');
    // show module cart
    $('.module__btn-cart').on('click', function (e) {
        e.preventDefault();
        $moduleCartContainer.toggleClass('active');
    });
    // Close Module Cart
    $('.close-cart').on('click', function () {
        $moduleCartContainer.removeClass('active');
    });
    $(document).on('mouseup', function (e) {
        if (!$moduleCartContainer.is(e.target) && !$('.module__btn-cart').is(e.target) && $moduleCartContainer.has(e.target).length === 0 && $moduleCartContainer.has(e.target).length === 0) {
            $moduleCartContainer.removeClass('active');
        }
    });

    /*==========  Module popup Menu   ==========*/
    var $modulePopupMenuContainer = $('.module__popupMenu-container');
    // show module popupMenu
    $('.module__btn-popupMenu').on('click', function (e) {
        e.preventDefault();
        $modulePopupMenuContainer.addClass('active')
    });
    // Close module popupMenu
    $('.close-popupMenu').on('click', function () {
        $modulePopupMenuContainer.removeClass('active')
    });


    /*==========   Scroll Top Button   ==========*/
    var $scrollTopBtn = $('#scrollTopBtn');
    // Show Scroll Top Button
    $win.on('scroll', function () {
        if ($(this).scrollTop() > 700) {
            $scrollTopBtn.addClass('actived');
        } else {
            $scrollTopBtn.removeClass('actived');
        }
    });
    // Animate Body after Clicking on Scroll Top Button
    $scrollTopBtn.on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    /*==========   Equal Height Elements   ==========*/
    var maxHeight = 0;
    $(".equal-height").each(function () {
        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
    });
    $(".equal-height").height(maxHeight);

    /*==========   Set Background-img to section   ==========*/
    $('.bg-img').each(function () {
        var imgSrc = $(this).children('img').attr('src');
        $(this).parent().css({
            'background-image': 'url(' + imgSrc + ')',
            'background-size': 'cover',
            'background-position': 'center',
        });
        $(this).parent().addClass('bg-img');
        $(this).remove();
    });

    /*==========   Increase and Decrease Input Value   ==========*/
    // Increase Value
    $('.increase-qty').on('click', function () {
        var $qty = $(this).parent().find('.qty-input');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    // Decrease Value
    $('.decrease-qty').on('click', function () {
        var $qty = $(this).parent().find('.qty-input');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });

    /*==========   Add active class to accordions   ==========*/
    $('.accordion__item-header').on('click', function () {
        $(this).addClass('opened')
        $(this).parent().siblings().find('.accordion__item-header').removeClass('opened')
    })
    $('.accordion__item-title').on('click', function (e) {
        e.preventDefault()
    });

    /*==========   Switch Between List view and Grid View   ==========*/
    $('.filter-option-view a').on('click', function (e) {
        e.preventDefault()
        $(this).addClass('active').siblings().removeClass('active');
    })
    $('#listView').on('click', function (e) {
        $('.product-item').parent().addClass('list-view');
    });
    $('#gridView').on('click', function (e) {
        $('.product-item').parent().removeClass('list-view');
    });

    /*==========   Nav Split   ==========*/
    $('.nav-split li a').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top - 100
        }, 1000);
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
    $win.on('scroll', function () {
        $('section').each(function () {
            if ($win.scrollTop() > $(this).offset().top - 100) {
                var sectionId = $(this).attr('id');
                $('.nav-split li a[data-scroll="' + sectionId + '"]').parent().addClass('active').siblings().removeClass('active');
            }
        });
    });


    /*==========   Progress bars  ==========*/
    if ($(".skills").length > 0) {
        $(window).on('scroll', function () {
            var skillsOffset = $(".skills").offset().top - 130,
                skillsHight = $(this).outerHeight(),
                winScrollTop = $(window).scrollTop();
            if (winScrollTop > skillsOffset - 1 && winScrollTop < skillsOffset + skillsHight - 1) {
                $('.progress-bar').each(function () {
                    $(this).width($(this).attr('aria-valuenow') + '%');
                });
                $('.progress__percentage').each(function () {
                    $(this).text($(this).parent('.progress-bar').attr('aria-valuenow') + '%')
                });
            }
        });
    }

    /*==========   Owl Carousel  ==========*/
    $('.carousel').each(function () {
        $(this).owlCarousel({
            nav: $(this).data('nav'),
            dots: $(this).data('dots'),
            loop: $(this).data('loop'),
            margin: $(this).data('space'),
            center: $(this).data('center'),
            dotsSpeed: $(this).data('speed'),
            autoplay: $(this).data('autoplay'),
            transitionStyle: $(this).data('transition'),
            animateOut: $(this).data('animate-out'),
            animateIn: $(this).data('animate-in'),
            autoplayTimeout: 15000,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: $(this).data('slide-sm'),
                },
                700: {
                    items: $(this).data('slide-md'),
                },
                1000: {
                    items: $(this).data('slide'),
                }
            }
        });
    });


    /*==========  Popup Video  ==========*/
    $('.popup-video').magnificPopup({
        mainClass: 'mfp-fade',
        preloader: false,
        fixedContentPos: false,
        removalDelay: 0,
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                }
            },
            srcAction: 'iframe_src',
        }
    });

    /*==========   counterUp  ==========*/
    $('.counter').counterUp({
        delay: 10,
        time: 4000
    });

    /*==========   Pie Charts ==========*/
    $win.on('scroll', function () {
        var chartItem = $('.piechart-item'),
            scrollTop = $win.scrollTop(),
            windowHeight = $win.height(),
            ChartItemData = $('.piechart-item-data');
        if (ChartItemData.length) {
            var winScrollTop = scrollTop + windowHeight,
                skillScroll = chartItem.offset().top + chartItem.outerHeight();
            if (winScrollTop > skillScroll) {
                ChartItemData.each(function () {
                    $(this).easyPieChart({
                        duration: 1500,
                        animate: 5000,
                        enabled: true,
                        scaleColor: false,
                        trackColor: false,
                        size: $(this).attr('data-chart-size'),
                        lineCap: $(this).attr('data-chart-line'),
                        lineWidth: $(this).attr('data-chart-width'),
                        barColor: $(this).attr('data-chart-color'),
                        onStep: function (from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                });
            }
        }
    });

    /*==========   Products Filtering and Sorting  ==========*/
    $("#filtered-items-wrap").mixItUp();
    $(".projects-filter li a").on('click', function (e) {
        e.preventDefault();
    });
    $('#viewProjects').on('click', function (e) {
        e.preventDefault();
        $(this).fadeOut();
        $('.project-hidden > .project-item').fadeIn();
    })

    /*==========   Range Slider  ==========*/
    var $rangeSlider = $("#rangeSlider"),
        $rangeSliderResult = $("#rangeSliderResult");
    $rangeSlider.slider({
        range: true,
        min: 0,
        max: 300,
        values: [50, 200],
        slide: function (event, ui) {
            $rangeSliderResult.val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $rangeSliderResult.val("$" + $rangeSlider.slider("values", 0) + " - $" + $rangeSlider.slider("values", 1));

    /*==========   Count Down Timer ==========*/
    $(".countdown").each(function () {
        var countingDate = $(this).data("count-date"),
            newDate = new Date(countingDate);
        $(this).countdown({
            until: newDate,
            format: "MMMM Do , h:mm:ss a"
        });
    });

});