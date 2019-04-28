<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //
        //footer variables
        //tweets
        $twitterArray = [
            [
                'source' => 'twitter',
                'data' => 'ℹ️🏃🏻‍♂️🏃🏻‍♀️❌🚘 Amanhã decorre a #MaratonaDaEuropa na cidade de #Aveiro. Podes ver neste mapa os condicionamentos de trânsito que vão acontecer devido a este evento desportivo, um trabalho dos nossos amigos da @WazePortugal 🚘❌🏃🏻‍♀️🏃🏻‍♂️ℹ️',
                'url' => 'https://twitter.com/VOSTPT/status/1122154865680158720',
                'time' => '4 days'
            ],
            [
                'source' => 'facebook',
                'data' => 'ℹ️🏊🏻‍♀️🏊🏻‍♂️ Bom dia!
                🌞 Está calor? Está!
                🏖️ Apetece ir à praia dar um mergulho? Apetece!
                ❌ Está aberta a época balnear? Não, e por isso as praias ainda não estão vigiadas, pelo que todo o cuidado é pouco. Juízo! 🏊🏻‍♂️🏊🏻‍♀️ℹ️',
                'url' => 'https://twitter.com/VOSTPT/status/1122064589569626112',
                'time' => '6 days'
            ],
            [
                'source' => 'twitter',
                'data' => 'ℹ️⚠️🌀 Grande probabilidade de ocorrência de cheias ♒️♒️nos próximos dias, nas principais bacias hidrográficas da província de Cabo Delgado em #Moçambique após a passagem do ciclone #Kenneth  ℹ️⚠️🌀',
                'url' => 'https://twitter.com/VOSTPT/status/1121813665915834369',
                'time' => '7 days'
            ],
        ];

        //instagrams
        $instagramArray = [
            [
                'portrait' => true,
                'srcLarge' => asset('storage/VOSTMOB_0023.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0023.jpg'),
            ],
            [
                'srcLarge' => asset('storage/VOSTMOB_0012.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0012.jpg'),
            ],
            [
                'srcLarge' => asset('storage/VOSTMOB_0021.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0021.jpg'),
            ],
            [
                'srcLarge' => asset('storage/VOSTMOB_0016.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0016.jpg'),
            ],
            [
                'srcLarge' => asset('storage/VOSTMOB_0018.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0018.jpg'),
            ],
            [
                'srcLarge' => asset('storage/VOSTMOB_0020.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0020.jpg'),
            ],
            [
                'srcLarge' => asset('storage/VOSTMOB_0028.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0028.jpg'),
            ],
            [
                'srcLarge' => asset('storage/VOSTMOB_0024.jpg'),
                'srcSmall' => asset('storage/VOSTMOB_0024.jpg'),
            ],
        ];
        View::share(['instagramArray' => $instagramArray, 'twitterArray' => $twitterArray]);
    }
}
