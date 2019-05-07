@extends('layouts.app')

@section('content')

@include('components.text', [
        'texts' => [
            [
                'unescape' => true,
                'description' => $body
            ]
        ]
])

@endsection
