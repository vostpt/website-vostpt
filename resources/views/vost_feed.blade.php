@extends('layouts.app')

@section('content')

    @sectionRow
        @include('partials.cardDeck', [
                    'columnMax' => 1,
                    'cards' => $socialPosts
                ])
    @endsectionRow

@endsection
