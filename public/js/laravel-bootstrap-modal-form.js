/*!
 * Laravel-Bootstrap-Modal-Form (https://github.com/JerseyMilker/Laravel-Bootstrap-Modal-Form)
 * Copyright 2015 Jesse Leite - MIT License
 *
 * Bromance:
 * Adam Wathan has nice boots. Thank you for BootForms magic.
 * Matt Higgins has nice beard. Thank you for JS wizardry.
 */

$('document').ready(function() {

    // Prepare reset.
    function resetModalFormErrors() {
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').remove();
		$('.form-group').find('.text-muted').remove();
		$('.form-group').find('.text-danger').remove();
    }

    // Intercept submit.
    $('form.bootstrap-modal-form').on('submit', function(submission) {
        submission.preventDefault();

        // Set vars.
        var form   = $(this),
            url    = form.attr('action'),
            submit = form.find('[type=submit]');

        // Check for file inputs.
        if (form.find('[type=file]').length) {

            // If found, prepare submission via FormData object.
            var input       = form.serializeArray(),
                data        = new FormData(),
                contentType = false;

            // Append input to FormData object.
            $.each(input, function(index, input) {
                data.append(input.name, input.value);
            });

            // Append files to FormData object.
            $.each(form.find('[type=file]'), function(index, input) {
                if (input.files.length == 1) {
                    data.append(input.name, input.files[0]);
                } else if (input.files.length > 1) {
                    data.append(input.name, input.files);
                }
            });
        }

        // If no file input found, do not use FormData object (better browser compatibility).
        else {
            var data        = form.serialize(),
                contentType = 'application/x-www-form-urlencoded; charset=UTF-8';
        }

        // Please wait.
        if (submit.is('button')) {
            var submitOriginal = submit.html();
            submit.html('Please wait...');
        } else if (submit.is('input')) {
            var submitOriginal = submit.val();
            submit.val('Please wait...');
        }

        // Request.
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            dataType: 'json',
            cache: false,
            contentType: contentType,
            processData: false

        // Response.
        }).always(function(response, status) {

            // Reset errors.
            resetModalFormErrors();

            // Check for errors.
            if (response.status == 422) {
                //var errors = $.parseJSON(response.responseText);
				var response_body = $.parseJSON(response.responseText);
				var errors = response_body.errors;

                // Iterate through errors object.
                $.each(errors, function(field, message) {
                    console.error(field+': '+message);
                    //handle arrays
                    if(field.indexOf('.') != -1) {
                        field = field.replace('.', '[');
                        //handle multi dimensional array
                        for (i = 1; i <= (field.match(/./g) || []).length; i++) {
                            field = field.replace('.', '][');
                        }
                        field = field + "]";
                    }
                    //var formGroup = $('[name='+field+']', form).closest('.form-group');
                    //formGroup.addClass('has-error').append('<p class="help-block">'+message+'</p>');
					var formControl = $('[name='+field+']', form);
					if(formControl.parent().hasClass('input-group')) {
						//formControl.closest('.input-group').after('<small class="help-block text-muted text-danger">' + message + '</small>');
						formControl.closest('.input-group').after('<small class="text-muted text-danger">' + message + '</small>');
					} else {
						//formControl.after('<small class="help-block text-muted text-danger">' + message + '</small>');
						formControl.after('<small class="text-muted text-danger">' + message + '</small>');
					}
					var formGroup = formControl.closest('.form-group');
					formGroup.addClass('has-error');
                });

                // Reset submit.
                if (submit.is('button')) {
                    submit.html(submitOriginal);
                } else if (submit.is('input')) {
                    submit.val(submitOriginal);
                }

            // If successful, reload.
            } else {
				form[0].reset();  //se comentó porque al cerrar el modal edit se mostraban los valores originales pero si guardaba cambios
                $('.modal').hide();
                /*toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "md-toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": 300,
                    "hideDuration": 1000,
                    "timeOut": 5000,
                    "extendedTimeOut": 1000,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }*/
                //toastr["success"]("The changes has been saved!");
                //setTimeout(function() { location.reload(); }, 1500);
                location.reload();
            }
        });
    });

    // Reset errors when opening modal.
    $('.bootstrap-modal-form-open').click(function() {
        resetModalFormErrors();
    });

});
