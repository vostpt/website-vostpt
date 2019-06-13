@extends('layouts.app')

@section('content')

    @sectionRow([ 'sectionTitle' => __('strings.somos_titulo2') ])
            @include('partials.column',[
                'columnDescriptions' => [
                    __('strings.somos_text1'),
                    __('strings.somos_text2'),
                    __('strings.somos_text3')
                ]
            ])
    @endsectionRow

    @sectionRow([
        'sectionTitle' => __('strings.somos_titulo3'),
        'hideOnSmallerThan' => 'xl',
    ])
        @include('partials.carouselImageCard',[
            'columnMax' => 3,
            'autoplay' => true,
            'fixedHeight' => '470px',
            'cards' => $arrayMembers
        ])
    @endsectionRow

    @sectionRow([
        'sectionTitle' => __('strings.somos_titulo4'),
        'sectionSubtitle' => __('strings.somos_subtitulo2')
    ])
    @endsectionRow

@endsection
