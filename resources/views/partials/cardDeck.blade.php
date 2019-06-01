@for ($i = 0; $i < ceil(count($cards)/$columnMax); $i++)
    <div class="card-deck cardDeck">
        @for ($j = $i; $j < ($i + $columnMax); $j++)
            @isset($cards[$j])
                <div class="card">
                    @isset($cards[$j]->cover)
                        <div class="card-img-top rounded">
                            <a href="{{$cards[$j]->url}}">
                                <img src="{{$cards[$j]->cover}}" class="" alt="...">
                            </a>
                        </div>
                    @endisset

                    <div class="card-body">
                            <a href="{{$cards[$j]->url}}"><h5 class="card-title">{{$cards[$j]->title}}</h5></a>
                        <p class="card-text">{{Str::limit($cards[$j]->body,200)}}</p>
                    </div>
                </div>
            @endisset
        @endfor
    </div>
@endfor
