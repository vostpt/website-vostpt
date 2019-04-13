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
                <div>@lang('strings.politica_text1')</div>
                <div>@lang('strings.politica_text2')</div>
                <div>@lang('strings.politica_text3')</div>
                <div>@lang('strings.politica_text4')</div>
                <div>@lang('strings.politica_text5')</div>
                <div>@lang('strings.politica_text6')</div>
                <div>@lang('strings.politica_text7')</div>
                <div>@lang('strings.politica_text8')</div>
            </div>
        </div>
    </div>
@endsection
