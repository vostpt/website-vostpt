<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialPost extends Model
{
    protected $fillable = ['socialId'];

    public function recent($limit=3) {
        $posts = SocialPost::whereIn('socialId', ['facebook', 'twitter'])->orderBy('pubDate','desc')->limit($limit)->get();

        $posts = $posts->map(function ($item) {
            return [
                'source' => $item->platform,
                'data' => $item->text,
                'url' => $item->socialUrl,
                'time' => $item->pubDate,
            ];
        });

        return $posts;
    }
}
