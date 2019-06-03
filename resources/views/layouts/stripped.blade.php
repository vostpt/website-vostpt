<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <div id="app">
        <main class="main">
            <div class="main__body main__body--raised position-ref">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
