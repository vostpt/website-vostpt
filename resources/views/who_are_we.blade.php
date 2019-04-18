@extends('layouts.app')

@section('content')
    <div class="main__body main__body--raised flex-center position-ref">
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
