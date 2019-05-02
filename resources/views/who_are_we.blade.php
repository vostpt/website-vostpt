@extends('layouts.app')

@section('content')
    @include('components.column', [
        'sectionTitle' =>  __('strings.somos_titulo2'),
        'columnDescriptions' => [
            __('strings.somos_text1'),
            __('strings.somos_text2'),
            __('strings.somos_text3')
        ]
    ])

    @include('components.imageCard', [
        'sectionTitle' => __('strings.somos_titulo3'),
        'columnMax' => 4,
        'cards' => $arrayMembers
    ])

    @include('components.empty',[
        'sectionTitle' => __('strings.somos_titulo4'),
        'sectionSubtitle' => __('strings.somos_subtitulo2')
    ])
@endsection
