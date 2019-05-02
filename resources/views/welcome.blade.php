@extends('layouts.app')

@section('content')
    @include('components.empty',[
        'sectionSubtitle' => __('strings.home_text1')
    ])

    @include('components.iconCard', [
        'paralaxImage' => asset('storage/VOSTSITE_0060.jpg'),
        'cards' => [
            ['fontClass' =>  'fa fa-users', 'title' => __('strings.home_titulo2'), 'body' => __('strings.home_text2')],
            ['fontClass' =>  'fa fa-check', 'title' => __('strings.home_titulo3'), 'body' => __('strings.home_text3')],
            ['fontClass' =>  'fa fa-wrench', 'title' => __('strings.home_titulo4'), 'body' => __('strings.home_text4')]
        ]
    ])

    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo5')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo6')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo7')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo8')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo9')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo10')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo11')
    ])
    @include('components.empty',[
        'sectionTitle' => __('strings.home_titulo12')
    ])
@endsection
