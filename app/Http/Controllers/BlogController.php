<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Jenssegers\Date\Date;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::paginate(12);
        $links = $posts->links();
        $posts = $posts->map(function ($item) {
            $item->url = route('blog.show', ['blog' => $item]);
            return $item;
        });
        return view('blog.index', ['title' =>  __('strings.blog_titulo1'), 'subtitle' => __('strings.blog_subtitulo1'), 'image' => asset('storage/images/VOSTSITE_0053.jpg'), 'posts' => $posts, 'links' => $links, 'halfHeight' => true]);
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

        $date = ucwords(Date::parse($post->created_at)->format('F j, Y'));
        return view('blog.show', ['title' =>  $post->title, 'subtitle' => $post->author.' @ '.$date, 'image' => $post->cover, 'body' => $post->body, 'halfHeight' => true]);
    }
}
