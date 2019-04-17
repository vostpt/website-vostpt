<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhoAreWeController extends Controller
{
    public function index() {
        return view('who_are_we', ['title' =>  __('strings.somos_titulo1'), 'subtitle' => __('strings.somos_subtitulo1'), 'image' => asset('storage/VOSTSITE_0052.jpg')]);
    }
}
