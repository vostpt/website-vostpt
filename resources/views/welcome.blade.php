@extends('layouts.app')

@section('content')
    <div class="main__body main__body--raised flex-center position-ref">
        <div class="container">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
                <h2>@lang('strings.home_text1')</h2>
            </div>

            @include('components.iconCard', [
                'iconCards' => [
                    ['fontClass' =>  'fa fa-users', 'title' => __('strings.home_titulo2'), 'body' => __('strings.home_text2')],
                    ['fontClass' =>  'fa fa-check', 'title' => __('strings.home_titulo3'), 'body' => __('strings.home_text3')],
                    ['fontClass' =>  'fa fa-wrench', 'title' => __('strings.home_titulo4'), 'body' => __('strings.home_text4')]
                ]
            ])

            <div>
                <h2>@lang('strings.home_titulo5')</h2>
                <h2>@lang('strings.home_titulo6')</h2>
                <h2>@lang('strings.home_titulo7')</h2>
                <h2>@lang('strings.home_titulo8')</h2>
                <h2>@lang('strings.home_titulo9')</h2>
                <h2>@lang('strings.home_titulo10')</h2>
                <h2>@lang('strings.home_titulo11')</h2>
                <h2>@lang('strings.home_titulo12')</h2>
            </div>
        </div>
    </div>
@endsection
