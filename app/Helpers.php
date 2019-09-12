<?php
if (! function_exists('getRandomHero')) {
    function getRandomHero()
    {
        $arrayOfImages = [
        'VOSTSITE_0053.jpg',
        'VOSTSITE_0004.jpg',
        'VOSTSITE_0033.jpg',
        'VOSTSITE_0038.jpg',
        'VOSTSITE_0050.jpg',
        'VOSTSITE_0052.jpg',
        'VOSTSITE_0055.jpg',
        'VOSTSITE_0057.jpg',
        'VOSTSITE_0060.jpg',
    ];

        return asset('storage/images/' . $arrayOfImages[array_rand($arrayOfImages)]);
    }
}
