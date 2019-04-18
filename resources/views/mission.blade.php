@extends('layouts.app')

@section('content')
    <div class="main__body main__body--raised flex-center position-ref">
        <div class="content">
            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>
                <h2> @lang('strings.missao_titulo2')</h2>
                @lang('strings.missao_text1')
                @lang('strings.missao_text2')
                @lang('strings.missao_text3')
                <h2> @lang('strings.missao_titulo3')</h2>
                @lang('strings.missao_text4')
                @lang('strings.missao_text5')
            </div>
        </div>
    </div>
@endsection
