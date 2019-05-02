@extends('components.section')

@section('sectionContent')
    @foreach ($cards as $card)
        <div class="col-md-{{floor(12/(!empty($columnMax)?$columnMax:count($cards)))}} mb-7">
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
@overwrite
