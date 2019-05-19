<?php

namespace App\Http\ViewComposers;

use App\SocialPost;
use App\InstagramPost;
use Illuminate\Contracts\View\View;

class SocialPostsComposer
{
    protected $socialPosts;
    protected $instagramPosts;

    public function __construct(SocialPost $socialPosts, InstagramPost $instagramPosts)
    {
        $this->socialPosts = $socialPosts;
        $this->instagramPosts = $instagramPosts;
    }

    public function compose(View $view)
    {
        $view->with('twitterPosts', $this->socialPosts->recent())->with('instagramPosts', $this->instagramPosts->recent());
    }
}