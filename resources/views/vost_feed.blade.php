@extends('layouts.app')

@section('content')
@include('components.section', [
    'partials' => [
        [
            'name' => 'partials.cardDeck',
            'variables' => [
                'columnMax' => 1,
                'cards' => $socialPosts
            ]
        ]
    ]
])
@endsection
