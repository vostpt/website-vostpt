@extends('layouts.app')

@section('content')

@sectionRow
    @include('partials.cardDeck',[
                'columnMax' => 3,
                'cards' => $posts
            ])
@endsectionRow

@endsection
