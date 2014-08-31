(function($){


    $(function(){
            // Prevents 300ms delay on touch events
            FastClick.attach(document.body);

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
        $('.post-type-archive-event .event').equalHeights();
    }

    

})(jQuery);










/**
 * Age Gate
 */
;(function($){


    /**
     * [verifyAge description]
     * @return {[type]} [description]
     */
    function verifyAge(){
        // fire modal for age verification
        $('.age-gate').modal({
            backdrop: 'static',
            keyboard: false
        });

        // 
        // Set up event listen for "Yes" button.
        $('.of-age').click(function(){
            
            // set cookie here.Expires in 1 year.
            $.cookie("aquanaut-age-verified", 1, {expires: 999, path: '/'});
            
            // Close modal
            $('.age-gate').modal('hide');
        });
            
        $('.not-of-age').click(function(){
            window.location = "http://disneychannel.com"
        }); // "No" button links to something SFW
    }


    $(function(){

        var ageVerified = $.cookie('aquanaut-age-verified');

        if (typeof ageVerified == "undefined") {

            console.log('cookie is not present: %s', ageVerified);

            // fire verifyAge
            verifyAge();
            
        } else {// a cookie is present
            // No need to read the cookie as it wouldnt have been set previously 
            // for an answer of under 21, so if cookie is value, good enough.
            console.log('cookie is present: %s', ageVerified);
        }
     
    });
})(jQuery)
