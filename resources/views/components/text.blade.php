@extends('components.section')

@section('sectionContent')
    @foreach ($texts as $text)
        @isset($text['title'])
        <h3>{{$text['title']}}</h3>
        @endisset

        @isset($text['description'])
        <p>
            {!! $text['description'] !!}
        </p>
        @endisset
    @endforeach
@overwrite
