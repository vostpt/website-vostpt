@extends('layouts.app')

@section('content')
    @include('components.section',[
        'sectionSubtitle' => __('strings.home_text1')
    ])

    @include('components.section', [
        'paralaxImage' => asset('storage/VOSTSITE_0060.jpg'),
        'partials' => [
            [
                'name' => 'partials.iconCard',
                'variables' => [
                    'cards' => [
                        ['fontClass' =>  'fa fa-users', 'title' => __('strings.home_titulo2'), 'body' => __('strings.home_text2')],
                        ['fontClass' =>  'fa fa-check', 'title' => __('strings.home_titulo3'), 'body' => __('strings.home_text3')],
                        ['fontClass' =>  'fa fa-wrench', 'title' => __('strings.home_titulo4'), 'body' => __('strings.home_text4')]
                    ]
                ]
            ]
        ]
    ])

    @include('components.section',[
        'sectionTitle' => __('strings.home_titulo5')
    ])


    @include('components.section', [
        'sectionTitle' => __('strings.home_titulo6'),
        'hideOnSmallerThan' => 'xl',
        'partials' => [
            [
                'name' => 'partials.carouselImageCard',
                'variables' => [
                    'columnMax' => 3,
                    'autoplay' => true,
                    'fixedHeight' => '470px',
                    'cards' => $testimonials
                ]
            ]
        ]
    ])

    @include('components.section', [
        'sectionTitle' => __('strings.home_titulo7'),
        'partials' => [
            [
                'name' => 'partials.cardDeck',
                'variables' => [
                    'columnMax' => 3,
                    'cards' => $posts
                ]
            ]
        ]
    ])

    @include('components.section',[
        'sectionTitle' => __('strings.home_titulo8')
    ])
    @include('components.section',[
        'sectionTitle' => __('strings.home_titulo9')
    ])
    @include('components.section',[
        'sectionTitle' => __('strings.home_titulo10')
    ])
    @include('components.section',[
        'sectionTitle' => __('strings.home_titulo11')
    ])
    @include('components.section',[
        'sectionTitle' => __('strings.home_titulo12')
    ])
@endsection
