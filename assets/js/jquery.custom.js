
(function($){ //create closure so we can safely use $ as alias for jQuery

    $(document).ready(function(){

        "use strict";

        /*-----------------------------------------------------------------------------------*/
        /*  Superfish Menu
        /*-----------------------------------------------------------------------------------*/
        // initialise plugin
        var example = $('.sf-menu').superfish({
            //add options here if required
            delay:       100,
            speed:       'fast',
            autoArrows:  false  
        }); 
        

        /*-----------------------------------------------------------------------------------*/
        /*  bxSlider
        /*-----------------------------------------------------------------------------------*/
        $('.bxslider').show().bxSlider({
            mode: 'fade',
            auto: true,
            autoHover: true,
            pause: '5000',           
            preloadImages: 'all',
            easing: 'ease',
            pagerCustom: '.my-pager',
            onSliderLoad: function(){ 
                $(".bxslider").css("display", "block");
                $(".bxslider").css("visibility", "visible");    
                $('.featured-content .featured-slide .entry-header').fadeIn("100");
                $('.featured-content .featured-slide .gradient').fadeIn("100");                         
            }
        });

        $('.home-carousel').fadeIn("slow");
        $('.carousel-content .ajax-loader').fadeOut("slow"); 
        $('.carousel-content .ajax-loader').css('display','none');
        $('.home-carousel').bxSlider({
          minSlides: 2,
          maxSlides: 4,
          slideWidth: 270,
          slideMargin: 20,
          adaptiveHeight: true
        });

        if ($(window).width() < 960) {
            $('.bxslider').css('display','block');
        }

        /*-----------------------------------------------------------------------------------*/
        /*  Back to Top
        /*-----------------------------------------------------------------------------------*/
        // hide #back-top first
        $("#back-top").hide();

        $(function () {
            // fade in #back-top
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn('200');
                } else {
                    $('#back-top').fadeOut('200');
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });                                     

        /*-----------------------------------------------------------------------------------*/
        /*  Mobile Menu & Search
        /*-----------------------------------------------------------------------------------*/

        /* Mobile Menu */
        $('.menu-icon-open').click(function(){

            $('.mobile-menu').slideDown('fast', function() {});
            $('.menu-icon-open').toggleClass('active');
            $('.menu-icon-close').toggleClass('active');  

            $('.header-search').slideUp('fast', function() {});
            $('.search-button > .genericon-search').removeClass('active');
            $('.search-button > .genericon-close').removeClass('active');

        });

        $('.menu-icon-close').click(function(){

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').toggleClass('active');
            $('.menu-icon-close').toggleClass('active');

            $('.header-search').slideUp('fast', function() {});
            $('.search-button > .genericon-search').removeClass('active');
            $('.search-button > .genericon-close').removeClass('active');            

        });

        /* Mobile Search */
        $('.search-button > .genericon-search').click(function(){

            $('.header-search').slideDown('fast', function() {});
            $('.search-button > .genericon-search').toggleClass('active');
            $('.search-button > .genericon-close').toggleClass('active');

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').removeClass('active');
            $('.menu-icon-close').removeClass('active');

        });

        $('.search-button > .genericon-close').click(function(){

            $('.header-search').slideUp('fast', function() {});
            $('.search-button > .genericon-search').toggleClass('active');
            $('.search-button > .genericon-close').toggleClass('active');

            $('.mobile-menu').slideUp('fast', function() {});
            $('.menu-icon-open').removeClass('active');
            $('.menu-icon-close').removeClass('active');            

        });          


    });

})(jQuery);