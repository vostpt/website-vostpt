<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::all();
        $posts = $posts->map(function ($item) {
            $item->url = route('blog.show', ['blog' => $item]);
            return $item;
        });
        return view('blog.index', ['title' =>  __('strings.home_titulo1'), 'subtitle' => __('strings.home_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg'), 'posts' => $posts]);
    }
}
