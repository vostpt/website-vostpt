<div class="section">
    @isset ($sectionTitle)
        <h2>{{Str::upper($sectionTitle)}}</h2>
    @endisset

    @isset ($sectionSubtitle)
        <p>{{$sectionSubtitle}}</p>
    @endisset
    <div class="row">
        @yield('sectionContent')
    </div>
</div>
