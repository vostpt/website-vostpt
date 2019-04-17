@extends('layouts.app')

@section('content')
    @include('components.hero', ['title' =>  __('strings.politica_titulo1'), 'subtitle' => __('strings.politica_subtitulo1'), 'image' => asset('storage/VOSTSITE_0052.jpg')])
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>
                @lang('strings.politica_subtitulo2')

                <h2>@lang('strings.politica_titulo2')</h2>
                @lang('strings.politica_text1')

                <h3>@lang('strings.politica_titulo3')</h3>
                @lang('strings.politica_text2')

                <h3>@lang('strings.politica_titulo4')</h3>
                @lang('strings.politica_text3')

                <h3>@lang('strings.politica_titulo5')</h3>
                @lang('strings.politica_text4')

                <h3>@lang('strings.politica_titulo6')</h3>
                @lang('strings.politica_text5')

                <h3>@lang('strings.politica_titulo7')</h3>
                @lang('strings.politica_text6')

                <h3>@lang('strings.politica_titulo8')</h3>
                @lang('strings.politica_text7')

                <h3>@lang('strings.politica_titulo9')</h3>
                @lang('strings.politica_text8')

            </div>
        </div>
    </div>
@endsection
