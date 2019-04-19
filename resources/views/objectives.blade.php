@extends('layouts.app')

@section('content')
    <div class="main__body main__body--raised flex-center position-ref">
        <div class="content">
            <div class="links">
                <a href="https://github.com/vostpt">github</a>
            </div>

            <div>
                @lang('strings.objectivos_subtitulo2')

                <div class="row">
                    <div class="col-md-6 mb-7">
                        @include('components.iconCard', ['fontClass' =>  'fa fa-battery-quarter', 'title' => __('strings.objectivos_titulo2'), 'body' => __('strings.objectivos_text1')])
                    </div>
                    <div class="col-md-6 mb-7">
                        @include('components.iconCard', ['fontClass' =>  'fa fa-battery-half', 'title' => __('strings.objectivos_titulo3'), 'body' => __('strings.objectivos_text2')])
                    </div>
                    <div class="col-md-6 mb-7">
                        @include('components.iconCard', ['fontClass' =>  'fa fa-battery-three-quarters', 'title' => __('strings.objectivos_titulo4'), 'body' => __('strings.objectivos_text3')])
                    </div>
                    <div class="col-md-6 mb-7">
                        @include('components.iconCard', ['fontClass' =>  'fa fa-battery-full', 'title' => __('strings.objectivos_titulo5'), 'body' => __('strings.objectivos_text4')])
                    </div>
                    <div class="col-md-6 mb-7">
                            @include('components.iconCard', ['fontClass' =>  'fa fa-battery-full', 'title' => __('strings.objectivos_titulo6'), 'body' => __('strings.objectivos_text5')])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
