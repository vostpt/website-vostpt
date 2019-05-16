@extends('layouts.app')

@section('content')
    @include('components.imageCards', [
        'columnMax' => 3,
        'cards' => $arrayCoverages
    ])
@endsection
