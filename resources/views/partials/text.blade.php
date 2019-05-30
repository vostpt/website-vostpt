@foreach ($texts as $text)
<div>
    @isset($text['title'])
    <h3>{{$text['title']}}</h3>
    @endisset

    @isset($text['description'])
    <p>
        @if (isset($text['unescape']) && $text['unescape'])
            {!! $text['description'] !!}
        @else
            {{ $text['description'] }}
        @endif
    </p>
    @endisset
</div>
@endforeach
