@extends('layouts.app')

@section('content')
     @sectionRow(['paralaxImage' => asset('storage/images/VOSTSITE_0060.jpg')])
        @include('partials.subscribeForm')
    @endsectionRow


    @sectionRow(['paralaxImage' => asset('storage/images/VOSTSITE_0060.jpg')])
        <div class="col-lg-7">
            <div>
                <h2>@lang('strings.contacto_titulo2')</h2>
                <h3>@lang('strings.contacto_titulo3')</h3>
                @lang('strings.contacto_text1')
            </div>
        </div>

        <div class="col-lg-5">
            @include('partials.contactForm')
        </div>
    @endsectionRow

@endsection
