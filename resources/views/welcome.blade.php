@extends('layouts.app')

@section('content')

    @sectionRow([ 'sectionSubtitle' => __('strings.home_text1') ])
    @endsectionRow

    @sectionRow([ 'paralaxImage' => asset('storage/VOSTSITE_0060.jpg')])
        @include('partials.iconCard',[
                    'cards' => [
                        ['fontClass' =>  'fa fa-users', 'title' => __('strings.home_titulo2'), 'body' => __('strings.home_text2')],
                        ['fontClass' =>  'fa fa-check', 'title' => __('strings.home_titulo3'), 'body' => __('strings.home_text3')],
                        ['fontClass' =>  'fa fa-wrench', 'title' => __('strings.home_titulo4'), 'body' => __('strings.home_text4')]
                    ]
                ])
    @endsectionRow

    @sectionRow(['sectionTitle' => __('strings.home_titulo5')])
    @endsectionRow

    @sectionRow([
        'sectionTitle' => __('strings.home_titulo6'),
        'hideOnSmallerThan' => 'xl',
    ])
        @include('partials.carouselImageCard',[
                    'columnMax' => 3,
                    'autoplay' => true,
                    'fixedHeight' => '470px',
                    'cards' => $testimonials
                ])
    @endsectionRow

    @sectionRow([ 'sectionTitle' => __('strings.home_titulo7'), ])
        @include('partials.cardDeck',[
                    'columnMax' => 3,
                    'cards' => $posts
                ])
    @endsectionRow

    @sectionRow([ 'sectionTitle' => __('strings.home_titulo8') ])
    @endsectionRow

    @sectionRow([ 'sectionTitle' => __('strings.home_titulo9') ])
    @endsectionRow

    @sectionRow([ 'sectionTitle' => __('strings.home_titulo10') ])
    @endsectionRow

    @sectionRow([ 'sectionTitle' => __('strings.home_titulo11') ])
    @endsectionRow

    @sectionRow([ 'sectionTitle' => __('strings.home_titulo12') ])
    @endsectionRow

@endsection
