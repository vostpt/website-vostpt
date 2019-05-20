<div class="section {{!isset($paralaxImage)?:'parallax'}} {{empty($hideOnSmallerThan)?:'d-none d-'.$hideOnSmallerThan.'-block'}}"
style="{{!isset($paralaxImage)?:"background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('".$paralaxImage."');"}}"
>
    <div class="container">
        @isset ($sectionTitle)
            <h2 class="section__title">{{Str::upper($sectionTitle)}}</h2>
        @endisset

        @isset ($sectionSubtitle)
            <p class="section__subtitle">{!! $sectionSubtitle !!}</p>
        @endisset

        @isset ($partials)
            @foreach ($partials as $partial)
            <div class="row">
                @include($partial['name'], $partial['variables'])
            </div>
            @endforeach
        @endisset
    </div>
</div>
