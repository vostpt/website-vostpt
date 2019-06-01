<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialPost;
use Carbon\Carbon;

class FeedController extends Controller
{
    public function index() {
        $socialPosts = SocialPost::orderBy('pubDate','desc')->limit(6)->get();
        $socialPosts = $socialPosts->map(function ($item) {
            $item->title = $item->platform." - ".Carbon::parse($item->pubDate)->diffForHumans();
            $item->body = $item->text;
            if(!empty($item->media)){
                $item->cover = $item->media;
            }
            $item->url = $item->socialUrl;
            return $item;
        });
        return view('vost_feed', ['title' =>  __('strings.feed_titulo1'), 'subtitle' => __('strings.feed_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg'), 'socialPosts' => $socialPosts]);
    }
}
