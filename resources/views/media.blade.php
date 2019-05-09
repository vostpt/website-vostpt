@extends('layouts.app')

@section('content')
    @include('components.imageCard', [
        'columnMax' => 3,
        'cards' => $arrayCoverages
    ])
@endsection
