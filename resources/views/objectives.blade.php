@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        @lang('strings.objectivos_subtitulo2')

        @include('components.iconCard', [
            'columnMax' => 2,
            'iconCards' => [
                ['fontClass' =>  'fa fa-battery-quarter', 'title' => __('strings.objectivos_titulo2'), 'body' => __('strings.objectivos_text1')],
                ['fontClass' =>  'fa fa-battery-half', 'title' => __('strings.objectivos_titulo3'), 'body' => __('strings.objectivos_text2')],
                ['fontClass' =>  'fa fa-battery-three-quarters', 'title' => __('strings.objectivos_titulo4'), 'body' => __('strings.objectivos_text3')],
                ['fontClass' =>  'fa fa-battery-full', 'title' => __('strings.objectivos_titulo5'), 'body' => __('strings.objectivos_text4')],
                ['fontClass' =>  'fa fa-battery-full', 'title' => __('strings.objectivos_titulo6'), 'body' => __('strings.objectivos_text5')]
            ]
        ])
    </div>
</div>
@endsection
