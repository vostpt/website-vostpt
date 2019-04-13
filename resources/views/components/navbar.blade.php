<nav class="navbar navbar-expand-md navbar-light navbar-laravel sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('who_are_we') }}">@lang('buttons.who_are_we')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mission') }}">@lang('buttons.mission')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('objectives') }}">@lang('buttons.objectives')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">@lang('buttons.blog')</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @lang('buttons.more')<span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('vost_feed') }}">@lang('buttons.vost_feed')</a>
                        <a class="dropdown-item" href="{{ route('contact') }}">@lang('buttons.contact')</a>
                        <a class="dropdown-item" href="{{ route('media') }}">@lang('buttons.media')</a>
                        <a class="dropdown-item" href="{{ route('privacy_policy') }}">@lang('buttons.privacy_policy')</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
