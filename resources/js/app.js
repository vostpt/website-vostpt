
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
require('./components/navbar')

//default validation config
jQuery.validator.setDefaults({
    ignore: [],
    highlight: function(element) {
        jQuery(element).closest('.form-control').addClass('is-invalid');
    },
    unhighlight: function(element) {
        jQuery(element).closest('.form-control').removeClass('is-invalid');
    },
    errorElement: 'div',
    errorClass: 'invalid-feedback',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            element.closest('.form-group').append(error);
        }
    }
});

//send data back to server
window.ajaxComplete = function (form, endpoint) {
    let formData = new FormData(form[0]);

    axios
    .post(endpoint, formData, { headers: { 'Content-Type': 'multipart/form-data' } })
    .then(function(response) {
        form.hide();
        form.closest('.contactForm').find('.sent-message').show();
    })
    .catch(function (error) {
        // handle error
        form.validate().showErrors(error.response.data.errors)
    })
    .finally(function () {
        // always executed
    });
}

