<div class="contactForm">
    <div class="contactForm__title__wrapper">
        <div class="contactForm__title__content">
            @lang('strings.contacto_form_titulo')
        </div>
    </div>

    <div class="sent-message">
        <h3>Sent</h3>
    </div>

    <form id="contact_us" class='is-sent' action="">
        @csrf

        <div class="form-group">
            <input type="text" name="name" class="form-control"  placeholder="@lang('strings.contacto_form_nome')"/>
        </div>

        <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="@lang('strings.contacto_form_email')"/>
        </div>

        <div class="form-group">
            <input type="text" name="subject" class="form-control"  placeholder="@lang('strings.contacto_form_assunto')"/>
        </div>

        <div class="form-group">
            <textarea type="text" name="message" class="form-control" rows="8" placeholder="@lang('strings.contacto_form_mensagem')"></textarea>
        </div>
        <div class="text-center">
            <div class="form-group captcha-block">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </div>
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-danger">@lang('strings.contacto_form_button')</button>
        </div>

    </form>
</div>

@push('script-body')
    <script>
        window.addEventListener('load', function() {
            let formElement = $('#contact_us');

            //Validation for form
            let validator = formElement.validate({
                rules: {
                    'name': "required",
                    'email': {
                        'required': true,
                        'email': true
                    },
                    'message': {
                        'required': true,
                        'minlength': 5
                    },
                    'g-recaptcha-response': "required"
                },

                messages: {
                    'name': "Please enter your name",
                    'message': {
                        'required': "Please provide a message",
                        'minlength': "Your message must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    'g-recaptcha-response': "required"
                },

                success: "valid",
                submitHandler: function() { window.ajaxComplete(formElement, '{{ route("saveForm") }}') }
            });

        })
    </script>
@endpush
