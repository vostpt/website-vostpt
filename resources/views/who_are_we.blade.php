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
                <div>@lang('strings.somos_text1')</div>
                <div>@lang('strings.somos_text2')</div>
                <div>@lang('strings.somos_text3')</div>
            </div>
        </div>
    </div>
@endsection
