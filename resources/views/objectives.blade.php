@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title marigin-bottom-md">
                    @lang('strings.objectivos_titulo1')
                    @lang('strings.objectivos_subtitulo1')
            </div>

            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>
                @lang('strings.objectivos_subtitulo2')

                <h2>@lang('strings.objectivos_titulo2')</h2>
                @lang('strings.objectivos_text1')

                <h2>@lang('strings.objectivos_titulo3')</h2>
                @lang('strings.objectivos_text2')

                <h2>@lang('strings.objectivos_titulo4')</h2>
                @lang('strings.objectivos_text3')

                <h2>@lang('strings.objectivos_titulo5')</h2>
                @lang('strings.objectivos_text4')

                <h2>@lang('strings.objectivos_titulo6')</h2>
                @lang('strings.objectivos_text5')
            </div>
        </div>
    </div>
@endsection
