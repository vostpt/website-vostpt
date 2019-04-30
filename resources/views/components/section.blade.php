<div class="section {{!isset($paralaxImage)?:'parallax'}}"
style="{{!isset($paralaxImage)?:"background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('".$paralaxImage."');"}}"
>
    <div class="container">
        @isset ($sectionTitle)
            <h2>{{Str::upper($sectionTitle)}}</h2>
        @endisset

        @isset ($sectionSubtitle)
            <p>{!! $sectionSubtitle !!}</p>
        @endisset
        <div class="row">
            @yield('sectionContent')
        </div>
    </div>
</div>
