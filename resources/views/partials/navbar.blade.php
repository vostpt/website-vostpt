<nav class="navbar navbar-expand-md navbar-dark navbar-laravel fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdownAbout" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @lang('buttons.about_us')<span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAbout">
                        <a class="dropdown-item" href="{{ route('who_are_we') }}">@lang('buttons.who_are_we')</a>
                        <a class="dropdown-item" href="{{ route('mission') }}">@lang('buttons.mission')</a>
                        <a class="dropdown-item" href="{{ route('objectives') }}">@lang('buttons.objectives')</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">@lang('buttons.blog')</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdownMenu" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @lang('buttons.more')<span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenu">
                        <a class="dropdown-item" href="{{ route('contact') }}">@lang('buttons.contact')</a>
                        <a class="dropdown-item" href="{{ route('vost_feed') }}">@lang('buttons.vost_feed')</a>
                        <a class="dropdown-item" href="{{ route('media') }}">@lang('buttons.media')</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdownLocale" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{asset('storage/flag_icons/gif/'.app()->getLocale().'.gif')}}" />
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownLocale">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if ($localeCode !== app()->getLocale())
                            <a class="dropdown-item" rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img src="{{asset("storage/flag_icons/gif/$localeCode.gif")}}" /> {{{ ucfirst($properties['native']) }}}
                            </a>
                            @endif
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
