@extends('layouts.app')

@section('content')
@include('components.section', [
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
@endsection
