<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\SocialPost;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //blade components
        Blade::component('components.sectionRow', 'sectionRow');

        // TODO this below need to be moved to somewhere else as it is blocking initialisation on project
        /*
        //footer variables
        //tweets & facebook posts
        $twitterArray = SocialPost::whereIn('platform',['twitter','facebook'])->orderBy('pubDate','desc')->limit(3)->get();
        $twitterArray = $twitterArray->map(function ($item) {
            return [
                'source' => $item->platform,
                'data' => $item->text,
                'url' => $item->socialUrl,
                'time' => $item->pubDate,
            ];
        });

        //instagram
        $instagramArray = SocialPost::where('platform','instagram')->orderBy('pubDate','desc')->limit(8)->get();
        $instagramArray = $instagramArray->map(function ($item) {
            return [
                'srcLarge' => asset('storage/'.$item->media),
                'srcSmall' => asset('storage/'.$item->media),
                'url' => $item->socialUrl,
            ];
        });

        View::share(['instagramArray' => $instagramArray, 'twitterArray' => $twitterArray]);
        */
        View::share(['instagramArray' => [], 'twitterArray' => []]);
    }
}
