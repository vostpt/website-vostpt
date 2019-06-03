@extends('layouts.stripped')

@section('content')
    @include('partials.hero', ['title' =>  __('strings.voltamos_titulo'), 'subtitle' => '', 'image' => asset('storage/VOSTSITE_0008.jpg'), 'halfHeight' => null])
@endsection
