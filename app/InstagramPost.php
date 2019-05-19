<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstagramPost extends SocialPost
{
    protected $table = 'social_posts';

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('platform', 'instagram');
        });
    }

    public function recent($limit=3) {
        $posts = $this->orderBy('pubDate','desc')->limit($limit)->get();

        $posts = $posts->map(function ($item) {
            return [
                'srcLarge' => $item->media,
                'srcSmall' => $item->media,
                'socialUrl' => $item->socialUrl,
            ];
        });

        return $posts;
    }
}
