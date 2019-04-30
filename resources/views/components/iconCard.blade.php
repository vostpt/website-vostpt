@extends('components.section')

@section('sectionContent')
    @foreach ($iconCards as $iconCard)
        <div class="col-md-{{floor(12/(!empty($columnMax)?$columnMax:count($iconCards)))}} mb-7">
            <div class="text-center px-lg-3">
                <span class="btn btn-icon btn-lg btn-soft-success rounded-circle mb-5">
                    <span class="{{$iconCard['fontClass']}} fa-2x btn-icon__inner btn-icon__inner-bottom-minus"></span>
                </span>
                <h3 class="h5">{{$iconCard['title']}}</h3>
                <p class="mb-md-0 text-left">{{$iconCard['body']}}</p>
            </div>
        </div>
    @endforeach
@overwrite
