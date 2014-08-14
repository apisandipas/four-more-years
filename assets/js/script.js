(function($){


    $(function(){

            $('.site-nav').waypoint(function(direction) {
                if (direction === 'up') {
                    $('.sticky-header').removeClass('sticky');
                } else {
                    $('.sticky-header').addClass('sticky');
                }
            });
            // var  ww = document.body.clientWidth;

            // $(document).ready(function() {
            //     $(".site-nav li a").each(function() {
            //         if ($(this).next().length > 0) {
            //             $(this).addClass("parent");
            //         };
            //     })
                
            //     $(".mobile-menu-toggle").click(function(e) {
            //         e.preventDefault();
            //         $(this).toggleClass("active");
            //         $(".site-nav").toggleClass("active").toggle();
            //     });
            //     adjustMenu();
            // })

            // $(window).bind('resize orientationchange', function() {
            //     ww = document.body.clientWidth;
            //     adjustMenu();
            // });

            // var adjustMenu = function() {
            //     if (ww < 990) {
            //         $(".mobile-menu-toggle").css("display", "inline-block");
            //         if (!$(".mobile-menu-toggle").hasClass("active")) {
            //             $(".site-nav").hide()
            //         } else {
            //             $(".site-nav").show();
            //         }
            //         $(".site-nav li").unbind('mouseenter mouseleave');
            //         $(".site-nav li a.parent").unbind('click').bind('click', function(e) {
            //             // must be attached to anchor element to prevent bubbling
            //             e.preventDefault();
            //             $(this).parent("li").toggleClass("hover");
            //         });
            //     } 
            //     else if (ww >= 990) {
            //         $(".mobile-menu-toggle").css("display", "none");
            //         $(".site-nav").show();
            //         $(".site-nav li").removeClass("hover");
            //         $(".site-nav li a").unbind('click');
            //         $(".site-nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
            //             // must be attached to li so that mouseleave is not triggered when hover over submenu
            //             $(this).toggleClass('hover');
            //         });
            //     }
            // }



    })




})(jQuery)
