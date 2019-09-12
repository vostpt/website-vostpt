<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectivesController extends Controller
{
    public function index() {
        return view('objectives', ['title' =>  __('strings.objectivos_titulo1'), 'subtitle' => __('strings.objectivos_subtitulo1'), 'image' => getRandomHero()]);
    }
}
