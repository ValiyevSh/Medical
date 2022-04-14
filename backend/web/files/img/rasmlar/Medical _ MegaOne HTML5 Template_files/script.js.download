$(window).on("load", function () {

    "use strict";

    /* ===================================
            Loading Timeout
     ====================================== */

    setTimeout(function () {
        $(".loader").fadeOut("slow");
    }, 1000);

});

/* ===================================
                 Flip
   =================================== */

jQuery(function ($) {

    "use strict";

    $(".flip").flip({
        trigger: 'hover',
        axis: 'y'
    });

    /*----- counter js ----*/
    $(".demo-banner").appear(function () {
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });

    /*  end of counter js * /


    /*====================================
                da-thumb
    *====================================*/

    $('.da-thumbs > li ').each( function() { $(this).hoverdir(); } );


    /* ===================================
                 Scroll
    =================================== */

    $(".scroll").on("click", function(event){
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top - 40}, 1100);
    });


      /* ====================================
       Nav Fixed On Scroll
       ======================================= */

    if ($("nav.navbar").hasClass("static-nav")) {
        $(window).on("scroll", function () {
            var $scroll = $window.scrollTop();
            if ($scroll >= 80) {
                $('header').addClass('header-appear');
            } else {
                $('header').removeClass('header-appear');
            }
        });
    }

/*bottom menu fix*/
if ($("nav.navbar").hasClass("bottom-nav")) {
    var navHeight = $(".bottom-nav").offset().top;
    $(window).on("scroll", function () {
        if ($window.scrollTop() > navHeight) {
            $('.bottom-nav').addClass('fixed-menu');
        } else {
            $('.bottom-nav').removeClass('fixed-menu');
        }
    });
}
if ($("nav.navbar").hasClass("bottom-nav")) {
    $(window).on("scroll", function () {
        var $scroll = $window.scrollTop();
        var $bottom = $(".bottom-nav");
        if ($scroll >= 400) {
            $bottom.addClass("scroll-menu");
        } else {
            $bottom.removeClass("scroll-menu");
        }
    });
}
$(window).on('scroll', function () {
    if ($(this).scrollTop() >= 80) { // Set position from top to add class
        $('header').addClass('header-appear');
    }
    else {
        $('header').removeClass('header-appear');
    }
});



/* ===================================
            Medical form
   =================================== */


$(".datepicker").datepicker({
    dateFormat: 'yy-mm-dd',
    showAnim: 'slideDown'
});

//Select-2
$('.js-example-basic-single').select2();


/* ===================================
            Testimonial slider
   =================================== */


$("#testimonial_slider").owlCarousel({
    items: 1,
    dots: true,
    nav: false,
    responsive:{
        992:{
            items:3
        },
        768:{
            items:2
        },
        600:{
            items:1
        }
    }
});

/* ===================================
            blog slider
   =================================== */
$("#blog-slider").owlCarousel({
    items: 1,
    dots: false,
    autoplay:true,
    autoplayTimeout:5000,
    smartSpeed:500,
    nav: false,
    loop: true,
});
$("#blog-slider-1").owlCarousel({
    items: 1,
    dots: false,
    autoplay:true,
    autoplayTimeout:6000,
    smartSpeed:500,
    nav: false,
    loop: true,
});


/* ===================================
       About Box Hover Setting
       ====================================== */
$(".blog-image").on("mouseenter", function () {
    $(".date").addClass("date-hvr");
});

$(".blog-image").on("mouseleave", function () {
    $(".date").removeClass("date-hvr");
});

/*======================
        date-2
 =====================*/
$(".blog-image2").on("mouseenter", function () {
    $(".date-2").addClass("date-2-hvr");
})

$(".blog-image2").on("mouseleave", function () {
    $(".date-2").removeClass("date-2-hvr");
})

/* ===================================
      Fancy Box
      ====================================== */
$('[data-fancybox]').fancybox({

});

/* ===================================
       Animated Progress Bar
        ====================================== */

// progress bar
$('.skills-progress').appear(function () {
    $(".skills-progress span").each(function () {
        let myVal = $(this).attr('data-value');
        $(this).css({
            width: myVal
        });
    });
});

/* ===================================
              search popup
   =================================== */

$('.open_search').on('click', function(event){
    event.stopPropagation();
    $('.search_block').toggleClass('visible');
    $('.search_block .search_input').focus();
    $('.search-overlay').addClass('overlayer');
    $('#sidemenu_toggle').fadeOut(2);
});

$('body').on('click', function(){
    $('.search_block').removeClass('visible');
    $('.search-overlay').removeClass('overlayer');
    $('#sidemenu_toggle').fadeIn(2);
});

$('.search_box').on('click', function(event){
    event.stopPropagation();
});

$('.search_input').on('keyup', function(event){
    if($(this).val() !== ''){
        $(this).addClass('typing');
    } else {
        $(this).removeClass('typing');
    }
});

$(document).on('keyup',function(e){
    if(e.keyCode===27){
        $('.search_block').removeClass('visible');
        $('.search-overlay').removeClass('overlayer');
        $('#sidemenu_toggle').fadeIn(2);
    }
});

/* ===================================
   Side Menu
====================================== */
if ($("#sidemenu_toggle").length) {
    $("#sidemenu_toggle").on("click", function () {
        $(".pushwrap").toggleClass("active");
        $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700);
        $("body").addClass("pushmenu-push-toLeft");
    }), $("#close_side_menu , #btn_sideNavClose , .side-nav .navbar-nav .nav-link").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"), $(".pushwrap").removeClass("active"),
        $("body").removeClass("pushmenu-push-toLeft"),
        $("#close_side_menu").fadeOut(200);
    });
}

if ($(".side-right-btn").length) {

    $(".side-right-btn").click(function () {
        $(".navbar.navbar-right").toggleClass('show');
    }),
        $(".navbar.navbar-right .navbar-nav .nav-link").click(function () {
            $(".navbar.navbar-right").toggleClass('show');
        });

}

/* =====================================
   Portfolio Filter
   ======================================= */

/*Portfolio Two*/

var $gallery = $('.gallery').isotope({
    // options
    itemSelector: '.items'
});

// filter items on button click
$('.filtering').on('click', 'span', function () {

    var filterValue = $(this).attr('data-filter');
    $gallery.isotope({filter: filterValue});
    $(this).addClass('active').siblings().removeClass('active');

});


setTimeout(function (){
    $('.filtering .active').click();
}, 1500);

    /* ===================================
        Revolution Slider Initialized
     ====================================== */

   $("#rev_slider_18_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"//revslider.ads:7080/revslider/public/assets/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"off",
                        bullets: {
                            enable:true,
                            hide_onmobile:false,
                            style:"hermes",
                            hide_onleave:false,
                            direction:"vertical",
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0,
                            space:5,
                            tmp: '<div class="tp-bullet-inner"></div><div class="tp-line"></div>'
                        }
                    },
       responsiveLevels: [1240, 1025, 778, 480],
       visibilityLevels: [1240, 1025, 778, 480],
       gridwidth: [1140, 1025, 768, 480],
       gridheight: [660, 650, 600, 490],
                    lazyType:"none",
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });

});
