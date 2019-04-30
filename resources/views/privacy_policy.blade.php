@extends('layouts.app')

@section('content')
    @include('components.empty',[
        'sectionSubtitle' => __('strings.politica_subtitulo2')
    ])

    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo2'),
        'sectionSubtitle' => __('strings.politica_text1')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo3'),
        'sectionSubtitle' => __('strings.politica_text2')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo4'),
        'sectionSubtitle' => __('strings.politica_text3')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo5'),
        'sectionSubtitle' => __('strings.politica_text4')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo6'),
        'sectionSubtitle' => __('strings.politica_text5')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo7'),
        'sectionSubtitle' => __('strings.politica_text6')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo8'),
        'sectionSubtitle' => __('strings.politica_text7')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.politica_titulo9'),
        'sectionSubtitle' => __('strings.politica_text8')
    ])
@endsection
