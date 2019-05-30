<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Testimonial;

class WelcomeController extends Controller
{
    public function index() {
        $posts = Post::take(3)->get();
        $posts = $posts->map(function ($item) {
            $item->url = route('blog.show', ['blog' => $item]);
            return $item;
        });

        $testimonials = Testimonial::all();
        $testimonials = $testimonials->map(function ($item) {
            return [
                'image' => $item->avatar,
                'title' => $item->socialHandle,
                'subtitle' => $item->socialUrl,
                'body' => $item->body
            ];
        });


        return view('welcome', [
            'title' =>  __('strings.home_titulo1'),
            'subtitle' => __('strings.home_subtitulo1'),
            'image' => asset('storage/VOSTSITE_0053.jpg'),
            'posts'=> $posts,
            'testimonials' => $testimonials
            ]);
    }
}
