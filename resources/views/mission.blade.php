@extends('layouts.app')

@section('content')
    @include('components.section', [
        'sectionTitle' => __('strings.missao_titulo2'),
        'partials' => [
            [
                'name' => 'partials.column',
                'variables' => [
                    'columnDescriptions' => [
                        __('strings.missao_text1'),
                        __('strings.missao_text2'),
                        __('strings.missao_text3')
                    ]
                ]
            ]
        ]
    ])

    @include('components.section', [
        'sectionTitle' => __('strings.missao_titulo3'),
        'partials' => [
            [
                'name' => 'partials.column',
                'variables' => [
                    'columnDescriptions' => [
                        __('strings.missao_text4'),
                        __('strings.missao_text5')
                    ]
                ]
            ]
        ]
    ])
@endsection
