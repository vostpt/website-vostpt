<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index() {
        return view('privacy_policy', ['title' =>  __('strings.politica_titulo1'), 'subtitle' => __('strings.politica_subtitulo1'), 'image' => asset('storage/images/VOSTSITE_0052.jpg')]);
    }
}
