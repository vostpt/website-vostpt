<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    @include('partials.navbar')
    @include('partials.hero', ['title' =>  $title, 'subtitle' => $subtitle, 'image' => $image, 'halfHeight' => (isset($halfHeight) && $halfHeight?$halfHeight:null)])
    <div id="app">
        <main class="main">
            <div class="main__body main__body--raised position-ref">
                @yield('content')
                @include('partials.footer')
            </div>
        </main>
    </div>
    @stack('script-body')
</body>
</html>
