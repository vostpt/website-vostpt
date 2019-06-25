@extends('layouts.app')

@section('content')

@sectionRow
    @include('partials.cardDeck',[
                'columnMax' => 3,
                'cards' => $posts
            ])
    <div class="flex-center w-100">
        {{$links}}
    </div>

@endsectionRow

@endsection
