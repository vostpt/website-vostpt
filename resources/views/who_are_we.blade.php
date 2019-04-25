@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        @include('components.column', [
            'sectionTitle' =>  __('strings.somos_titulo2'),
            'columnDescriptions' => [
                __('strings.somos_text1'),
                __('strings.somos_text2'),
                __('strings.somos_text3')
            ]
        ])

        <h2>@lang('strings.somos_titulo3')</h2>
        <h2>@lang('strings.somos_titulo4')</h2>
        @lang('strings.somos_subtitulo2')
    </div>
</div>
@endsection
