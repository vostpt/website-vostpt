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
        return view('blog.index', ['title' =>  __('strings.blog_titulo1'), 'subtitle' => __('strings.blog_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg'), 'posts' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show', ['title' =>  $post->title, 'subtitle' => $post->author, 'image' => $post->cover, 'body' => $post->body, 'halfHeight' => true]);
    }
}
