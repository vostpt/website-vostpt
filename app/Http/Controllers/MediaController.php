<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coverage;

class MediaController extends Controller
{
    public function index() {
        $coverages = Coverage::all();
        $arrayCoverages = $coverages->map(function ($item) {
            return [
                'image' => $item->avatar,
                'title' => $item->title,
                'subtitle' => $item->socialHandle,
                'body' => $item->socialUrl
            ];
        });
        return view('media', ['title' =>  __('strings.media_titulo1'), 'subtitle' => __('strings.media_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg'), 'arrayCoverages' => $arrayCoverages]);
    }
}
