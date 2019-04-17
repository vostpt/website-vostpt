@extends('layouts.app')

@section('content')
    @include('components.hero', ['title' =>  __('strings.somos_titulo1'), 'subtitle' => __('strings.somos_subtitulo1'), 'image' => asset('storage/VOSTSITE_0052.jpg')])
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>
                <h2>@lang('strings.somos_titulo2')</h2>
                @lang('strings.somos_text1')
                @lang('strings.somos_text2')
                @lang('strings.somos_text3')

                <h2>@lang('strings.somos_titulo3')</h2>
                <h2>@lang('strings.somos_titulo4')</h2>
                @lang('strings.somos_subtitulo2')
            </div>
        </div>
    </div>
@endsection
