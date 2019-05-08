@extends('components.section')
@php
    $division = (!empty($columnMax)?$columnMax:count($cards));
    $rows = floor(12/(!empty($columnMax)?$columnMax:count($cards)));
    $chunks = $cards->chunk($division);
@endphp
@section('sectionContent')
    <div id="carouselExampleIndicators" class="carouselComp carousel slide" data-ride="carousel" {{!empty($autoplay)?:'data-interval="false"'}} style="width: 100%; {{empty($fixedHeight)?:'height:'.$fixedHeight}} ">
        <ol class="carousel-indicators">
            @for ($i = 0; $i < count($chunks); $i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{$i!=0?:'active'}} carouselComp__indicator"></li>
            @endfor
        </ol>
        <div class="carousel-inner">
            @foreach ($chunks as $chunk)
                <div class="carousel-item {{isset($notFirst)?:'active'}}">
                    <div class="carouselComp__item">
                        @foreach ($chunk as $card)
                        <div class="col-md-{{$rows}} mb-7">
                            <div class="imageCard">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>
                                        <h3 class="card-title">{{$card['title']}}</h3>
                                            <img class="imageCard__image img-fluid" alt="" src="{{$card['image']}}"></p>
                                        <h4 class="card-title">{{$card['subtitle']}}</h4>
                                        <p class="card-text">{{$card['body']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @php
                    $notFirst = true;
                @endphp
            @endforeach
        </div>
    </div>
@overwrite





