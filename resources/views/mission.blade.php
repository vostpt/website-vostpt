@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title marigin-bottom-md">
                {{ config('app.name', 'Laravel') }}
            </div>

            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>
                <div>@lang('strings.missao_text1')</div>
                <div>@lang('strings.missao_text2')</div>
                <div>@lang('strings.missao_text3')</div>
                <div>@lang('strings.missao_text4')</div>
                <div>@lang('strings.missao_text5')</div>
            </div>
        </div>
    </div>
@endsection
