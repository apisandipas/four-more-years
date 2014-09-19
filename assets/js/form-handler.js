;(function($){
    // Form Handler
    $(function(){   
        $('#register-team').parsley();
        $('#register-individual').parsley();
    })// DOM Ready


    $('form').submit(function(e){
        e.preventDefault();

        var $this = $(this),
            form_name = $this.attr('id'),
            form_data;

        log("formname:" + form_name);

        if ( $(this).parsley().isValid() ) {
            log("%s validates!", form_name);

            $this.find('[type="submit"]').attr('value', 'Sending..').attr('disabled', true);

            form_data = form_fields[form_name]($this);
      
            $.ajax({
                type: 'POST',
                url: window.ajaxUrl,
                data: {
                    "action" : "submit_form",
                    "data": form_data,
                    "form": form_name
                },
                success: submitSuccess,
                error: submitError
            });
        }

        // return false;
    });

    function submitSuccess(response){
        var resp = response.trim();
        log('Success');
        log(resp);
        $('.form-wrap').hide();
        $('.form-response.form-success').show();
    }

    function submitError(xhr, ajaxOptions, thrownError){
        log('Error! status: ' +  xhr.status);
        log('Error thrown: ' + thrownError);
        $('.form-wrap').hide();
        $('.form-response.form-error').show();
    }




    var form_fields = {

        'register-individual': function($form){
            return {
                member_1_name:   $form.find('#member1-name').val(),
                member_1_github: $form.find('#member1-github').val(),
                member_1_email:  $form.find('#member1-email').val()
            };
        },
        'register-team': function($form){
            return {
                team_name:       $form.find('#team_name').val(),

                member_1_name:   $form.find('#member1-name').val(),
                member_1_github: $form.find('#member1-github').val(),
                member_1_email:  $form.find('#member1-email').val(),

                member_2_name:   $form.find('#member2-name').val(),
                member_2_github: $form.find('#member2-github').val(),
                member_2_email:  $form.find('#member2-email').val(),

                member_3_name:   $form.find('#member3-name').val(),
                member_3_github: $form.find('#member3-github').val(),
                member_3_email:  $form.find('#member3-email').val(),

                member_4_name:   $form.find('#member4-name').val(),
                member_4_github: $form.find('#member4-github').val(),
                member_4_email:  $form.find('#member4-email').val()
            };
        },
    };


}(jQuery));
