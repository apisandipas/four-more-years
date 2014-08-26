(function($){


    $(function(){

            // Sticky header
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                var waypoint = 285; // height of fullsized header + nav

                if ( scroll >= waypoint ) {
                   $('.sticky-header').addClass('sticky');
                } else {
                    $('.sticky-header').removeClass('sticky');
                }
            });

            $('.post-previews, .social-share').hover(function(){
               $(this).addClass('hovered');
            },function(){
                $(this).removeClass('hovered');
            });

            $(".twitter-share, .facebook-share").click(function(e) {
                var $this = $(this),
                    source = $this.attr("href"),
                    msg = $this.data('window-title') || "Share This Post",
                    win = window.open(source, msg, "height=400,width=530");

                if (window.focus) win.focus();
                if (win) e.preventDefault();
            });

            $(".toggleNav").click(function () {
                $(".toggleNavButton").toggleClass("active");
            });

            // Calls set equal height on load and on each recurring window resize
            $(window).on('resize', setEventHeights).trigger('resize');
    });

   

    
    // Calls set equal height on load and on each recurring window resize
    // TODO: call in underscore an utilize debounce function to limit the calling of onResize event.
    function setEventHeights(){
        console.log('setEventHeights');
        $('.post-type-archive-event .event').equalHeights();
    }

    

})(jQuery);
