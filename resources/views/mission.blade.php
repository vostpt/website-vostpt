@extends('layouts.app')

@section('content')
    @include('components.hero', ['title' =>  __('strings.missao_titulo1'), 'subtitle' => __('strings.missao_subtitulo1'), 'image' => asset('storage/VOSTSITE_0052.jpg')])
    <div class="flex-center position-ref full-height">
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
