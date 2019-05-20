@extends('layouts.app')

@section('content')
@include('components.section', [
    'partials' => [
        [
            'name' => 'partials.text',
            'variables' => [
                'texts' => [
                    [
                        'unescape' => true,
                        'description' => $body
                    ]
                ]
            ]
        ]
    ]
])
@endsection
