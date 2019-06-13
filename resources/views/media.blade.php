@extends('layouts.app')

@section('content')
    @sectionRow
        @include('partials.imageCards', [
            'columnMax' => 3,
            'cards' => $arrayCoverages
        ])
    @endsectionRow
@endsection
