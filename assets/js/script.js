window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console){
    console.log( Array.prototype.slice.call(arguments) );
  }
};

(function($){


    $(function(){
            // Prevents 300ms delay on touch events
            FastClick.attach(document.body);

            initFloatingLabels();
            initFormToggler();

            // Make splash buttons trigger the hashchange / form switch
            $('.splash-btn-team, .splash-btn-individual').click(function(e){
                var $target = $(this).data('target');
                activateForm($target);
            });
            
    });


    // Allow hashchange event to trigger form switch
    $(window).hashchange( function(){
        switch (location.hash) {
            case '#register-individual':
                activateForm('individual');
                break;
            case '#register-team':
                activateForm('team');
            default:
                break;
        }
    });

    // helper for switching the forms
    function activateForm(name){
        $('.signup-individual.active, .signup-team.active').removeClass('active');
        $('.signup-' + name).addClass('active');
        $('.register-as:checked').attr('checked', false);
        $('.register-as:not(:checked)').attr('checked', true);
    }


    // Toggle between two forms
    function initFormToggler(){
        // initalize event listener for form switching
        $('.register-as').on('change', function(){
             $('.signup-individual, .signup-team').toggleClass('active');
        });
    }

    // Floating label implementation
    function initFloatingLabels() {
        
            var onClass = "on";
            var showClass = "show";
          
            $("input").bind("checkval",function(){
                var label = $(this).prev(".floating");
                if(this.value !== ""){
                  label.addClass(showClass);
                } else {
                  label.removeClass(showClass);
                }
            }).on("keyup",function(){
                $(this).trigger("checkval");
            }).on("focus",function(){
                $(this).prev(".floating").addClass(onClass);
            }).on("blur",function(){
                  $(this).prev(".floating").removeClass(onClass);
            }).trigger("checkval");
    }


   
})(jQuery);











