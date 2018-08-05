(function($) {
    'use strict';

    var Neostore = Neostore || {};

    Neostore = {

        // registers the properties
        registerVars: function() {
            this.backBtn = $('.back-to-top');
            this.header = $('.stik-header');
            this.mainEl = $('html, body');
            this.bodyEl = $('body');
            this.searchInput = $('.search-input');
            this.searchBar = $('#morphsearch');
            this.searchClose = $('.morphsearch-close');
            this.mainSlideEl = $('.slider');
            this.secSlideEl = $('.electronic-banner');

            this.aniCirc = $('.anmi-circ');

            this.win = $(window);

            this.resizeEnd = null;
        },

        // initialize
        init: function() {
            this.toggleSearch();
            this.scrollWin();
            this.sliderInit();
            this.displayModal();
            this.toggleFilter();
            this.toggleSlidebar();
            this.toggleCart();
            this.displayFullScreenMenu();
            this.playVideo();
            this.rangeSlider();
            this.countDownTimer();
            this.scrollEvent();
            this.timeOuts();
            this.tooltip();
            this.initAccordion();
            this.initCarousel();
            this.initCountUp();
            this.initMasonryLayout();
            this.initLightCase();
            this.flyCart();
            this.quickViewSlide();
            this.initNotifications();

            var _self = this;

            if (this.win.width() < 991) {
                this.handleTabletDevice();
            }

            if (this.win.width() < 768) {
                this.handleMobileDevice();
            }

            var winEl = this.win;
            this.win.on('resize', function() {
                clearTimeout(_self.resizeEnd);
                _self.resizeEnd = setTimeout(function() {
                    winEl.trigger('resize-end');
                }, 100);
            });

            this.win.on('resize-end', function(e) {
                _self.resizeEvent();
            });

            // set the default values
            $('#amount').html("$" + $('#price-range').slider("values", 0) +
                " - $" + $('#price-range').slider("values", 1));
        },

        // searchbar toggle
        toggleSearch: function() {
            var bar = this.searchBar;
            this.searchInput.on('click', function(e) {
                e.preventDefault();
                bar.toggleClass('open');
            });

            this.searchClose.on('click', function(e) {
                e.preventDefault();
                bar.removeClass('open');
            });
        },

        // scroll window to top
        scrollWin: function() {
            var el = this.mainEl;
            this.backBtn.on('click', function(e) {
                e.preventDefault();
                el.animate({
                    scrollTop: 0
                }, 750);
            });
        },

        // initialize the slider
        sliderInit: function() {
            var el = this.mainEl;

            // main slider
            if (el.has('.slider')) {
                this.mainSlideEl.fractionSlider({
                    'fullWidth': true,
                    'responsive': true,
                    'dimensions': "1920,700",
                    'increase': false,
                    'pauseOnHover': true,
                    'autoChange': true,
                    'slideEndAnimation': false,
                    'pager' : true,
                    'controls' : true,
                    'timeout' : 2000,
                });
            }

            // electonics banner slider
            if (el.has('.electronic-banner')) {
                this.secSlideEl.fractionSlider({
                    'fullWidth': true,
                    'responsive': true,
                    'dimensions': "1600,488",
                    'increase': false,
                    'pauseOnHover': false,
                    'autoChange': true,
                    'slideEndAnimation': false
                });
            }
        },

        // display newsletter modal
        displayModal: function() {
            if (this.bodyEl.has('#newsletter')) {
                $('#newsletter').modal('show');
            }
        },

        // offcanvas cart
        toggleCart: function() {
            var _self = this;
            $('.off-cart-btn').on('click', function(e) {
                e.preventDefault();
                $('.cart-canvas').toggleClass('shw');
                $('.off-btn').toggleClass('pull');
                $(".top-bar").toggleClass('shade');
                _self.aniCirc.toggleClass('animi');
            });

            $('.canvas-close').on('click', function(e) {
                e.preventDefault();
                $('.cart-canvas').removeClass('shw');
                $('.off-btn').removeClass('pull')
                $(".top-bar").removeClass('shade');
            });
        },

        // toggle filter
        toggleFilter: function() {
            var _self = this;
            $('.filter-btn').on('click', function(e) {
                e.preventDefault();
                if ($('.filter-toggle').is(':visible')) {
                    $('.filter-toggle').slideUp(600);
                } else {
                    $('.filter-toggle').slideDown(600);
                }
                $(this).toggleClass('rev')
            });
        },

        // toggle slidebar
        toggleSlidebar: function() {
            var _self = this;
            $('.slide-bar-toggle').on('click', function(e) {
                e.preventDefault();
                if ($('.slideing-bar').is(':visible')) {
                    $('.slideing-bar').slideUp(500);
                } else {
                    $('.slideing-bar').slideDown(500);
                }

                $(this).toggleClass('rev')
            });
        },

        // full screen menu
        displayFullScreenMenu: function() {
            var _self = this;
            $('button.nav-tgl').on('click', function() {
                _self.bodyEl.toggleClass('open');
            });
        },

        // youtube video popup
        playVideo: function() {
            $('.play-btn').YouTubePopUp();
        },

        //jquery ui range slider
        rangeSlider: function() {
            $('#price-range').slider({
                range: true,
                min: 0,
                max: 300,
                values: [35, 219],
                slide: function(event, ui) {
                    $('#amount').html("$" + ui.values[0] + " - $" + ui.values[1]);
                    $('#amount1').val(ui.values[0]);
                    $('#amount2').val(ui.values[1]);
                }
            });
        },

        // initialize counter up plugin
        initCountUp: function() {
            $('.count').counterUp({
                delay: 50,
                time: 2000
            });
        },

        // initialize tooltip.
        tooltip: function() {
            $('[data-toggle=tooltip]').bstooltip();
        },

        // initialize accordion
        initAccordion: function() {
            $(".accordion").accordion({
                heightStyle: "content"
            });
        },

        // masonry layout
        initMasonryLayout: function() {
            $('.grid').masonry({
                // options
                itemSelector: '.grid-item'
            });
        },

        // count down timer
        countDownTimer: function() {
            var $countDown = $('.count-down');

            if ($countDown.length) {
                var endDate = new Date($countDown.data("end-date"));
                $countDown.countdown({
                    date: endDate,
                    render: function(data) {
                        $(this.el).html(
                            '<div><span class="time">' + this.leadingZeros(data.days, 2) + '</span> DAYS</div>' +
                            '<span class="coln">:</span>' +
                            '<div><span class="time">' + this.leadingZeros(data.hours, 2) + '</span> HOURS</div>' +
                            '<span class="coln">:</span>' +
                            '<div><span class="time">' + this.leadingZeros(data.min, 2) + '</span> MIN</div>' +
                            '<span class="coln">:</span>' +
                            '<div><span class="time">' + this.leadingZeros(data.sec, 2) + '</span> SEC</div>'
                        );
                    }
                });
            }
        },

        // window scroll event
        scrollEvent: function() {
            var _self = this;
            this.win.on('scroll', function() {
                if ($(this).scrollTop() > 200) {
                    _self.backBtn.fadeIn();
                    _self.header.addClass("sticky");

                } else {
                    _self.backBtn.fadeOut();
                    _self.header.removeClass("sticky");
                }
            });

            var $sticky = $('.stick');
            var $stickyrStopper = $('.stop-point');
            if (!!$sticky.offset()) {
                var generalSidebarHeight = $sticky.innerHeight();
                var stickyTop = $sticky.offset().top;
                var stickOffset = 0;
                var stickyStopperPosition = $stickyrStopper.offset().top;
                var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
                var diff = stopPoint - stickOffset;

                $sticky.css({ position: 'absolute', top: 'initial' });

                _self.win.on('scroll', function() {
                    var windowTop = _self.win.scrollTop();
                    if (stopPoint < windowTop) {
                        $sticky.css({ position: 'absolute', top: diff });
                    } else if (stickyTop < windowTop + stickOffset) {
                        $sticky.css({ position: 'fixed', top: stickOffset });
                    } else {
                        $sticky.css({ position: 'absolute', top: 'initial' });
                    }
                });
            }
        },

        // handle all the function with windows timeout
        timeOuts: function() {
            var _self = this;

            setTimeout(function() {
                _self.aniCirc.addClass('faa-burst animated');
            }, 3000);

            setTimeout(function() {
                $('.progress .bar').each(function() {
                    var me = $(this);
                    var perc = me.attr("data-percentage");

                    var current_perc = 0;

                    var progress = setInterval(function() {
                        if (current_perc >= perc) {
                            clearInterval(progress);
                        } else {
                            current_perc += 1;
                            me.css('width', (current_perc) + '%');
                        }

                        me.text((current_perc) + '%');

                    }, 50);
                });

            }, 1000);
        },

        // carousels initialization
        initCarousel: function() {
            // product slider
            $('.product-slider').slick({
                variableWidth: true,
                infinite: true,
                autoplay: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            variableWidth: false
                        }
                    }, 
                    {
                        breakpoint: 482,
                        settings: {
                            variableWidth: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: false,
                            autoplay: true
                        }
                    }
                ]
            });

            // product slider
            $('.look-slider').slick({
                variableWidth: true,
                autoplay: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            autoplay: true,
                            variableWidth: false
                        }
                    },
                    {
                        breakpoint: 482,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            variableWidth: false
                        }
                    }
                ]
            });

            // product slider
            $('.product-slider2').slick({
                variableWidth: true,
                infinite: true,
                autoplay: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 569,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false,
                            arrows: false
                        }
                    }
                ]
            });

            // brand slider
            $('.brand-slider').slick({
                infinite: true,
                autoplay: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                speed: 200,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 569,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 482,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });

            // product slider
            $('.pdt-single').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                fade: true,
                asNavFor: '.pdt-thumb',
                infinite: true,
                autoplay: true
            });

            $('.pdt-thumb').slick({
                slidesToShow: 5,
                asNavFor: '.pdt-single',
                dots: false,
                arrows: false,
                variableWidth: true,
                focusOnSelect: true,
                infinite: true,
                autoplay: true
            });

            // product slider alternate layout
            $('.pdt-single-alt').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                fade: true,
                asNavFor: '.pdt-thumb-alt',
                infinite: true,
                autoplay: true
            });

            // product slider alternate layout
            $('.pdt-thumb-alt').slick({
                slidesToShow: 3,
                asNavFor: '.pdt-single-alt',
                dots: false,
                arrows: true,
                variableWidth: true,
                focusOnSelect: true,
                infinite: true,
                centerMode: true,
                autoplay: true
            });

            // offer slider
            $('.offer-slide').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                fade: true,
                infinite: true,
                autoplay: true
            });

            //sidebar promo slider
            $('.sidebanner-slide').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                infinite: true,
                autoplay: true
            });

            //dock slider 
            $('.docking-pdt').slick({ 
                infinite: true,
                autoplay: true,
                slidesToShow: 7,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            variableWidth: true
                        }
                    },{
                        breakpoint: 568,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            variableWidth: false
                        }
                    },
                    {
                        breakpoint: 482,
                        settings: {
                            slidesToShow: 3
                        }
                    }
                ]
            });
        },

        // for tablet devices
        handleTabletDevice: function() {
            $('.tendy-pdt').slick({
                infinite: true,
                autoplay: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                responsive: [{
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        variableWidth: false
                    }
                }]
            });

            // category
            $('.catg-btn').on('click', function(e) {
                $('.detail-cat').slideToggle('.show');
            });
        },

        // for mobile devices
        handleMobileDevice: function() {
            // main nav toggle sub menu
            $('li.menu-item-has-children > a').on('click', function(e) {
                e.preventDefault();
                $(this).next().slideToggle();
            });

            // main nav toggle mega menu
            $('div.menu-item-has-children > h6').on('click', function(e) {
                e.preventDefault();
                $(this).next().slideToggle();
            });
            
            

            // mega menu menu-item
            $('.column > h5').on('click', function(e) {
                e.preventDefault();
                $(this).next().slideToggle();
            });

            // top header toggle actions
            $('.dropdown > .drop-down-toggle').on('click', function(e) {
                e.preventDefault();
                $(this).next().slideToggle();
            });

            // mini cart
            $('.drop-cart').on('click', function(e) {
                $('.widget_shopping_cart').slideToggle('.show');
            });

            // category
            $('.navbar-toggle').on('click', function(e) {
                $('#wrap').toggleClass('shw');
            });

            //product single scroll slider 
            $('.scroll-slider').slick({
                infinite: true,
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false
            });

            // product scroll slider
            var $sticky = $('.stick');
            var $stickyrStopper = $('.stop-point');
            if (!!$sticky.offset()) {
                var generalSidebarHeight = $sticky.innerHeight();
                var stickyTop = $sticky.offset().top;
                var stickOffset = 0;
                var stickyStopperPosition = $stickyrStopper.offset().top;
                var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
                var diff = stopPoint - stickOffset;

                $sticky.css({ position: 'absolute', top: 'initial' });
                var _self = this;
                this.win.on('scroll', function() {
                    var windowTop = _self.win.scrollTop();
                    if (stopPoint < windowTop) {
                        $sticky.css({ position: 'absolute', top: diff });
                    } else if (stickyTop < windowTop + stickOffset) {
                        $sticky.css({ position: 'fixed', top: stickOffset });
                    } else {
                        $sticky.css({ position: 'absolute', top: 'initial' });
                    }
                });
            }
        },

        // init lightcase
        initLightCase: function() {
            //quick view popup
            $('a[data-rel^=quickview-popup]').lightcase({

                maxWidth: '1000px',
                maxHeight: '800px',
                inline: {
                    width: '1000px',
                    height: '800px'
                },
                onFinish: {
                    initSlider: function() {
                        // product slider alternate layout
                        $('.qv-single-image').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            dots: false,
                            fade: true,
                            asNavFor: '.qv-single-thumb',
                            infinite: true,
                            autoplay: true,
                            responsive: [{
                                breakpoint: 991,
                                settings: {
                                    dots: true
                                }
                            }]
                        });

                        // product slider alternate layout
                        $('.qv-single-thumb').slick({
                            slidesToShow: 3,
                            asNavFor: '.qv-single-image',
                            dots: false,
                            arrows: true,
                            variableWidth: true,
                            focusOnSelect: true,
                            infinite: true,
                            centerMode: true,
                            autoplay: true
                        });

                    }
                },
                onClose: {
                    sliderDestroy: function() {
                        $('.qv-single-image').slick('unslick');
                        $('.qv-single-thumb').slick('unslick');
                    }
                }

            });


            $('.lightcase--trigger').lightcase({
                maxWidth: '1000px',
                maxHeight: '600px',
                inline: {
                    width: '1000px',
                    height: '600px'
                }
            });

            // size guide
            $('.sz--trigger').lightcase({
                maxWidth: '1000px',
                maxHeight: '640px',
                inline: {
                    width: '1000px',
                    height: '540px'
                },
                onFinish: {

                    init360: function() {
                        var images = [
                            'assets/images/view-360/samsung-1.png',
                            'assets/images/view-360/samsung-2.png',
                            'assets/images/view-360/samsung-3.png',
                            'assets/images/view-360/samsung-4.png',
                            'assets/images/view-360/samsung-5.png',
                            'assets/images/view-360/samsung-6.png',
                            'assets/images/view-360/samsung-7.png',
                            'assets/images/view-360/samsung-8.png',
                            'assets/images/view-360/samsung-9.png',
                            'assets/images/view-360/samsung-10.png',
                            'assets/images/view-360/samsung-11.png',
                            'assets/images/view-360/samsung-12.png',
                            'assets/images/view-360/samsung-13.png',
                            'assets/images/view-360/samsung-14.png',
                            'assets/images/view-360/samsung-15.png',
                            'assets/images/view-360/samsung-16.png',
                            'assets/images/view-360/samsung-17.png',
                            'assets/images/view-360/samsung-18.png',
                            'assets/images/view-360/samsung-19.png',
                            'assets/images/view-360/samsung-20.png',
                            'assets/images/view-360/samsung-21.png',
                            'assets/images/view-360/samsung-22.png',
                            'assets/images/view-360/samsung-23.png',
                            'assets/images/view-360/samsung-24.png',
                            'assets/images/view-360/samsung-25.png',
                            'assets/images/view-360/samsung-26.png',
                            'assets/images/view-360/samsung-27.png',
                            'assets/images/view-360/samsung-28.png',
                            'assets/images/view-360/samsung-29.png',
                            'assets/images/view-360/samsung-30.png',
                            'assets/images/view-360/samsung-31.png',
                            'assets/images/view-360/samsung-32.png',
                            'assets/images/view-360/samsung-33.png',
                            'assets/images/view-360/samsung-34.png',
                            'assets/images/view-360/samsung-35.png',
                            'assets/images/view-360/samsung-36.png',
                            'assets/images/view-360/samsung-37.png',
                            'assets/images/view-360/samsung-38.png',
                            'assets/images/view-360/samsung-39.png',
                            'assets/images/view-360/samsung-40.png',
                            'assets/images/view-360/samsung-41.png',
                            'assets/images/view-360/samsung-42.png',
                            'assets/images/view-360/samsung-43.png',
                            'assets/images/view-360/samsung-44.png',
                            'assets/images/view-360/samsung-45.png',
                            'assets/images/view-360/samsung-46.png',
                            'assets/images/view-360/samsung-47.png',
                            'assets/images/view-360/samsung-48.png',
                            'assets/images/view-360/samsung-49.png',
                            'assets/images/view-360/samsung-50.png'
                        ];

                        var view360 = $('.threesixty-gallery-view').ThreeSixty({
                            totalFrames: images.length,
                            currentFrame: 1,
                            endFrame: images.length,
                            imgList: '.threesixty_images',
                            progress: '.spinner',
                            height: '480',
                            width: '800',
                            imgArray: images,
                            responsive: true,
                            drag: true,
                            disableSpin: false,
                            // plugins: ['ThreeSixtyFullscreen'],
                        });
                        $(document).trigger('galleryInit', [view360]);
                    }

                }
            });
        },

        //flying cart
        flyCart: function() {
            $('.add-on-cart').on('click', function() {
                var cart = $('.crt-btn');
                var imgtodrag = $(this).parents('.product').find("img").eq(0);

                if (imgtodrag.length) {
                    var imgclone = imgtodrag.clone()
                        .offset({
                            top: imgtodrag.offset().top,
                            left: imgtodrag.offset().left
                        })
                        .css({
                            'opacity': '0.8',
                            'position': 'absolute',
                            'height': '150px',
                            'width': '150px',
                            'z-index': '100'
                        })
                        .appendTo($('body'))
                        .animate({
                            'top': cart.offset().top + 10,
                            'left': cart.offset().left + 10,
                            'width': 75,
                            'height': 75
                        }, 1000, 'easeInOutExpo');


                    imgclone.animate({
                        'width': 0,
                        'height': 0
                    }, function() {
                        $(this).detach()
                    });
                }
            });
        },

        // slide in quickview
        quickViewSlide: function() {
            var $qvEl = $('<div class="qv--slide">'),
                $qvSel = $('.quick-view-alternate'),
                $tplSel = $('#quick-view-1'),
                $tpl = $tplSel.html();

            $qvEl.hide();

            // toggles the quick view wrap
            $qvSel.on('click', function(e) {
                var $el = $(this),
                    $parent = $(this).parents('.product');

                $('.product').removeClass('qv-current');

                if ($parent.hasClass('qv-current')) {
                    // var $qvWrap = $('.qv--append');
                    $qvEl.slideUp();
                    $parent.removeClass('qv-current');
                } else {
                    $parent.addClass('qv-current');
                    $qvEl.addClass('qv--append').html($tpl);
                    $parent.after($qvEl);
                    $qvEl.slideDown({
                        complete: function() {
                            var $qvWrap = $('.qv--append'),
                                qvTop = $qvWrap.offset().top,
                                offset = Math.abs(50);
                            $('html,body').animate({
                                    scrollTop: qvTop - offset
                                },
                                600,
                                'linear'
                            );
                        }
                    });
                }
                // prevent default behavior
                e.preventDefault();
            });

            // closes the quick view
            $(document).on('click', '.qv-close', function(e) {
                var $self = $(this),
                    $parent = $(this).parents('.qv-wrap'),
                    $mainEl = $(this).parents('.product-wrap').find('li.qv-current');

                $parent.slideUp(600, function() {
                    $mainEl.removeClass('qv-current');
                    $parent.parent('div').remove();
                });

                // prevent default behavior
                e.preventDefault();
            });
        },

        // notifications
        initNotifications: function() {
            // notifications
            $('.add-to-favorite').on('click', function(e) {
                e.preventDefault();

                $(this).bstooltip('hide');

                $.amaran({
                    content: {
                        title: 'Success!',
                        message: 'Added to Favorite',
                        info: '',
                        icon: 'icofont icofont-heart-alt'
                    },
                    position: 'top right',
                    delay: 4000,
                    theme: 'awesome ok'
                });

            });

            $('.add-to-cart').on('click', function(e) {
                e.preventDefault();

                $(this).bstooltip('hide');
                $.amaran({
                    content: {
                        title: 'Success!',
                        message: 'Added to Cart',
                        info: '',
                        icon: 'icofont icofont-cart-alt'
                    },
                    position: 'top right',
                    delay: 4000,
                    theme: 'awesome ok'
                });

            });

            $('.add-to-compare').on('click', function(e) {
                e.preventDefault();

                $.amaran({
                    content: {
                        title: 'Success!',
                        message: 'Added to Comparision List',
                        info: '',
                        icon: 'icofont icofont-random'
                    },
                    position: 'bottom left',
                    delay: 4000,
                    theme: 'awesome ok'
                });
            });
        },

        // handle window resizes
        resizeEvent: function() {
            if (this.win.width() < 768) {
                // this.handleMobileDevice();
            }
        },
    };

    $(function() {
        Neostore.registerVars();
        Neostore.init();


        // added
        $('.jarallax').jarallax({
            speed: 0.2
        });

        var isMobile = /Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/g.test(navigator.userAgent || navigator.vendor || window.opera);
        if (!isMobile) {
            $('.jarallax').jarallax();
        }

    });

})(jQuery);