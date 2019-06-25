<div class="contactForm">
    <div class="contactForm__title__wrapper">
        <div class="contactForm__title__content">
            @lang('strings.subscribe_form_titulo')
        </div>
    </div>

    <div class="sent-message">
        <h3>Sent</h3>
    </div>

    <form id="subscribe_form" class='is-sent' action="">
        @csrf
        @lang('strings.subscribe_form_label')
        <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="@lang('strings.subscribe_form_email')"/>
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">@lang('strings.subscribe_form_button')</button>
        </div>

    </form>
</div>

@push('script-body')
    <script>
        window.addEventListener('load', function() {
            let formElement = $('#subscribe_form');

            //Validation for form
            let validator = formElement.validate({
                rules: {
                    'email': {
                        'required': true,
                        'email': true
                    }
                },

                messages: {
                    email: "Please enter a valid email address",
                },

                success: "valid",
                submitHandler: function() { window.ajaxComplete(formElement, '{{ route("saveFormSub") }}') }
            });
        })
    </script>
@endpush
