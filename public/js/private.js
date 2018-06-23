jQuery(function ($) {
    // $("header").load("header.html");
    $("footer").load("footer.html");

        $('.banner-slider').owlCarousel({
            loop:true,
            autoplay: true,
            items:1,
            dots: true,
            nav: false,
            responsive:{
                0:  { items:1, center:true },
                480:{ items:1 },
                678:{ items:1 },
                960:{ items:1 }
            }
        });


    $('.news-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:1,
        margin: 0,
        dots: false,
        nav: true,
        navText: ['<img src="' + baseUrl() + '/public/images/icon/left.png' + '">','<img src="' + baseUrl() + '/public/images/icon/right.png' + '">'],
        responsive:{
            0:  { items:1, center:true },
            480:{ items:1 },
            678:{ items:1 },
            960:{ items:1 }
        }
    });

    $('.room-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:1,
        margin: 0,
        dots: false,
        nav: true,
        navText: ['<img src="' + baseUrl() + '/public/images/icon/left-2.png' + '">','<img src="' + baseUrl() + '/public/images/icon/right-2.png' + '">'],
        responsive:{
            0:  { items:1, center:true },
            480:{ items:1 },
            678:{ items:1 },
            960:{ items:1 }
        }
    });

    $('.bar-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:1,
        margin: 0,
        dots: true,
        nav: true,
        navText: ['<img src="' + baseUrl() + '/public/images/icon/left.png' + '">','<img src="' + baseUrl() + '/public/images/icon/right.png' + '">'],
        responsive:{
            0:  { items:1, center:true },
            480:{ items:1 },
            678:{ items:1 },
            960:{ items:1 }
        }
    });

    $('.parten-slider').owlCarousel({
        loop:true,
        autoplay: true,
        items:5,
        margin: 20,
        dots: false,
        nav: false,
        responsive:{
            0:  { items:2 },
            480:{ items:3 },
            678:{ items:4 },
            960:{ items:5 }
        }
    });

    if (screen && screen.width > 767) {
        $(document).ready(function () {
            $(".left-half").hover(function () {
                $(this).addClass('active-acomotion');
                $(".right-half").addClass('small-acomotion');
            }, function () {
                $(this).removeClass('active-acomotion');
                $(".right-half").removeClass('small-acomotion');
            });
            $(".right-half").hover(function () {
                $(this).addClass('active-acomotion');
                $(".left-half").addClass('small-acomotion');
            }, function () {
                $(this).removeClass('active-acomotion');
                $(".left-half").removeClass('small-acomotion');
            });
        });

        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 160) {
                $(".header").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".header").removeClass("active");
            }
        });
    }


    // menu mobile
    jQuery(document).ready(function ($) {
        var $lateral_menu_trigger = $('#cd-menu-trigger'),
            $content_wrapper = $('.cd-main-content'),
            $navigation = $('header');

        //open-close lateral menu clicking on the menu icon
        $lateral_menu_trigger.on('click', function(event){
            event.preventDefault();

            $lateral_menu_trigger.toggleClass('is-clicked');
            $navigation.toggleClass('lateral-menu-is-open');
            $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
                $('body').toggleClass('overflow-hidden');
            });
            $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');

            //check if transitions are not supported - i.e. in IE9
            if($('html').hasClass('no-csstransitions')) {
                $('body').toggleClass('overflow-hidden');
            }
        });

        //close lateral menu clicking outside the menu itself
        $content_wrapper.on('click', function(event){
            if( !$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span') ) {
                $lateral_menu_trigger.removeClass('is-clicked');
                $navigation.removeClass('lateral-menu-is-open');
                $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                    $('body').removeClass('overflow-hidden');
                });
                $('#cd-lateral-nav').removeClass('lateral-menu-is-open');
                //check if transitions are not supported
                if($('html').hasClass('no-csstransitions')) {
                    $('body').removeClass('overflow-hidden');
                }

            }
        });

        //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
        $('.item-has-children').children('.arrow').on('click', function (event) {
            event.preventDefault();
            $(this).parent('.item-has-children').toggleClass('li-active');
            $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
        });
    });
    
    new WOW().init();


});
