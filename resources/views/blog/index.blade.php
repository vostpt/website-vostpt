@extends('layouts.app')

@section('content')
@include('components.cardDeck', [
    'columnMax' => 3,
    'cards' => $posts
])
@endsection
