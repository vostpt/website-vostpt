<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialPost;
use Carbon\Carbon;

class FeedController extends Controller
{
    public function index() {
        $socialPosts = SocialPost::orderBy('pubDate','desc')->get();
        $socialPosts = $socialPosts->map(function ($item) {
            return [
                'title' => $item->platform." - ".Carbon::parse($item->pubDate)->diffForHumans(),
                'description' => $item->text
            ];
        });
        return view('vost_feed', ['title' =>  __('strings.home_titulo1'), 'subtitle' => __('strings.home_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg'), 'socialPosts' => $socialPosts]);
    }
}
