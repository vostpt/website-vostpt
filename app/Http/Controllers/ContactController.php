<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact', ['title' =>  __('strings.contacto_titulo1'), 'subtitle' => __('strings.contacto_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg')]);
    }
}
