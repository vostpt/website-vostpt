@extends('components.section')

@section('sectionContent')
    @foreach ($columnDescriptions as $description)
        <div class="col-md text-left">{{$description}}</div>
    @endforeach
@overwrite
