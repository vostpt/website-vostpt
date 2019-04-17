<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('blog', ['title' =>  __('strings.home_titulo1'), 'subtitle' => __('strings.home_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg')]);
    }
}
