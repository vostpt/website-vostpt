@extends('layouts.app')

@section('content')
    @include('components.section', [
        'partials' => [
            [
                'name' => 'partials.imageCards',
                'variables' => [
                    'columnMax' => 3,
                    'cards' => $arrayCoverages
                ]
            ]
        ]
    ])
@endsection
