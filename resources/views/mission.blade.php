@extends('layouts.app')
@section('content')
<div class="container">
    <div>
    @include('components.column', [
        'sectionTitle' => __('strings.missao_titulo2'),
        'columnDescriptions' => [
            __('strings.missao_text1'),
            __('strings.missao_text2'),
            __('strings.missao_text3') ]
        ])
    @include('components.column', [
        'sectionTitle' => __('strings.missao_titulo3'),
        'columnDescriptions' => [
            __('strings.missao_text4'),
            __('strings.missao_text5') ]
        ])
    </div>
</div>
@endsection
