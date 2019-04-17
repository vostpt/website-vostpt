@extends('layouts.app')

@section('content')

    @include('components.hero', ['title' =>  __('strings.home_titulo1'), 'subtitle' => __('strings.home_subtitulo1'), 'image' => asset('storage/VOSTSITE_0052.jpg')])

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>
                @lang('strings.home_text1')

                <h2>@lang('strings.home_titulo2')</h2>
                @lang('strings.home_text2')

                <h2>@lang('strings.home_titulo3')</h2>
                @lang('strings.home_text3')

                <h2>@lang('strings.home_titulo5')</h2>
                @lang('strings.home_text4')

                <h2>@lang('strings.home_titulo5')</h2>
                <h2>@lang('strings.home_titulo6')</h2>
                <h2>@lang('strings.home_titulo7')</h2>
                <h2>@lang('strings.home_titulo8')</h2>
                <h2>@lang('strings.home_titulo9')</h2>
                <h2>@lang('strings.home_titulo10')</h2>
                <h2>@lang('strings.home_titulo11')</h2>
                <h2>@lang('strings.home_titulo12')</h2>
            </div>
        </div>
    </div>
@endsection
