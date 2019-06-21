@extends('layouts.app')

@section('content')

@sectionRow
    @include('partials.text',[
                'texts' => [
                    [
                        'unescape' => true,
                        'description' => $body
                    ]
                ]
            ])
@endsectionRow

@endsection
