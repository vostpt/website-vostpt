<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index() {
        return view('mission', ['title' =>  __('strings.missao_titulo1'), 'subtitle' => __('strings.missao_subtitulo1'), 'image' => asset('storage/images/VOSTSITE_0052.jpg')]);
    }
}
