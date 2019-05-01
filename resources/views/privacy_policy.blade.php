@extends('layouts.app')

@section('content')
    @include('components.empty', [
        'sectionSubtitle' => __('strings.politica_subtitulo2')
    ])

    @include('components.text', [
        'texts' => [
            [
                'title' => __('strings.politica_titulo2'),
                'description' => __('strings.politica_text1')
            ],
            [
                'title' => __('strings.politica_titulo3'),
                'description' => __('strings.politica_text2')
            ],
            [
                'title' => __('strings.politica_titulo4'),
                'description' => __('strings.politica_text3')
            ],
            [
                'title' => __('strings.politica_titulo5'),
                'description' => __('strings.politica_text4')
            ],
            [
                'title' => __('strings.politica_titulo6'),
                'description' => __('strings.politica_text5')
            ],
            [
                'title' => __('strings.politica_titulo7'),
                'description' => __('strings.politica_text6')
            ],
            [
                'title' => __('strings.politica_titulo8'),
                'description' => __('strings.politica_text7')
            ],
            [
                'title' => __('strings.politica_titulo9'),
                'description' => __('strings.politica_text8')
            ]
        ]
    ])
@endsection
