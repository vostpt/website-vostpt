@extends('layouts.app')

@section('content')

    @sectionRow([ 'sectionSubtitle' => __('strings.home_text1') ])
    @endsectionRow

    @sectionRow([ 'paralaxImage' => asset('storage/images/VOSTSITE_0060.jpg')])
        @include('partials.iconCard',[
                    'cards' => [
                        ['fontClass' =>  'fa fa-comment', 'title' => __('strings.home_titulo2'), 'body' => __('strings.home_text2')],
                        ['fontClass' =>  'fa fa-sync-alt', 'title' => __('strings.home_titulo3'), 'body' => __('strings.home_text3')],
                        ['fontClass' =>  'fa fa-dot-circle', 'title' => __('strings.home_titulo4'), 'body' => __('strings.home_text4')],
                        ['fontClass' =>  'fa fa-user-edit', 'title' => __('strings.home_titulo13'), 'body' => __('strings.home_text13')],
                    ]
                ])
    @endsectionRow

    @sectionRow([
        'sectionTitle' => __('strings.home_titulo5'),
        'hideOnSmallerThan' => 'xl',
    ])
        @include('partials.carouselImageCard',[
                    'columnMax' => 3,
                    'autoplay' => true,
                    'fixedHeight' => '470px',
                    'cards' => $members
                ])
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

    @sectionRow([])
        @include('partials.iconCard',[
                    'cards' => [
                        ['fontClass' =>  'fab fa-twitter', 'title' => 'Twitter', 'body' => ''],
                        ['fontClass' =>  'fab fa-facebook', 'title' =>'Facebook', 'body' => ''],
                        ['fontClass' =>  'fab fa-instagram', 'title' => 'Instagram', 'body' => ''],
                    ]
                ])
    @endsectionRow
@endsection
