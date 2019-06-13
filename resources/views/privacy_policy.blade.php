@extends('layouts.app')

@section('content')

    @sectionRow([
        'sectionSubtitle' => __('strings.politica_subtitulo2')
    ])
    @endsectionRow

    @sectionRow
        @include('partials.text', [
                    'texts' => [
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo2'),
                            'description' => __('strings.politica_text1')
                        ],
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo3'),
                            'description' => __('strings.politica_text2')
                        ],
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo4'),
                            'description' => __('strings.politica_text3')
                        ],
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo5'),
                            'description' => __('strings.politica_text4')
                        ],
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo6'),
                            'description' => __('strings.politica_text5')
                        ],
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo7'),
                            'description' => __('strings.politica_text6')
                        ],
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo8'),
                            'description' => __('strings.politica_text7')
                        ],
                        [
                            'unescape' => true,
                            'title' => __('strings.politica_titulo9'),
                            'description' => __('strings.politica_text8')
                        ]
                    ]
                ])
    @endsectionRow

@endsection
