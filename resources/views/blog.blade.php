@extends('layouts.app')

@section('content')
    <div class="main__body main__body--raised flex-center position-ref full-height">
        <div class="content">
            <div class="title marigin-bottom-md">
                {{ config('app.name', 'Laravel') }}
            </div>

            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>

            </div>
        </div>
    </div>
@endsection
