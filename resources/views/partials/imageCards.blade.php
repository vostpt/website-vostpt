@foreach ($cards as $card)
    <div class="col-md-{{floor(12/(!empty($columnMax)?$columnMax:count($cards)))}} mb-7">
        @include('partials.imageCard', [
            "card" => $card
        ])
    </div>
@endforeach
