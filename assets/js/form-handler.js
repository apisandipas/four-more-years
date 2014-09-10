;(function($){
    // Form Handler
    
    $('form').submit(function(e){
        e.preventDefault();

        var $this = $(this),
            form_name = $this.attr('id'),
            form_data;

        log(form_name);
    });


}(jQuery));
