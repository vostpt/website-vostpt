<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Post;
use App\Testimonial;

class WelcomeController extends Controller
{
    public function index() {
        $members = Member::all()->shuffle();
        $arrayMembers = $members->map(function ($item) {
            return [
                'image' => $item->avatar,
                'title' => $item->name,
                'subtitle' => $item->role,
                'body' => $item->bio
            ];
        });

        $posts = Post::orderBy('featured', 'desc')->orderBy('created_at', 'desc')->take(3)->get();
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
            'image' => getRandomHero(),
            'posts'=> $posts,
            'testimonials' => $testimonials,
            'members' => $arrayMembers
            ]);
    }
}
