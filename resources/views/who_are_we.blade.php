@extends('layouts.app')

@section('content')
    @include('components.section', [
        'sectionTitle' =>  __('strings.somos_titulo2'),
        'partials' => [
            [
                'name' => 'partials.column',
                'variables' => [
                    'columnDescriptions' => [
                        __('strings.somos_text1'),
                        __('strings.somos_text2'),
                        __('strings.somos_text3')
                    ]
                ]
            ]
        ]
    ])

    @include('components.section', [
        'sectionTitle' => __('strings.somos_titulo3'),
        'hideOnSmallerThan' => 'xl',
        'partials' => [
            [
                'name' => 'partials.carouselImageCard',
                'variables' => [
                    'columnMax' => 3,
                    'autoplay' => true,
                    'fixedHeight' => '470px',
                    'cards' => $arrayMembers
                ]
            ]
        ]
    ])

    @include('components.section',[
        'sectionTitle' => __('strings.somos_titulo4'),
        'sectionSubtitle' => __('strings.somos_subtitulo2')
    ])
@endsection
