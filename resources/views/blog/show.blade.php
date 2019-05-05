@extends('layouts.app')

@section('content')

@include('components.text', [
        'texts' => [
            [
                'description' => $body
            ]
        ]
])

@endsection
