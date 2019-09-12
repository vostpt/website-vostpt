<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class WhoAreWeController extends Controller
{
    public function index()
    {
        $members = Member::all();
        $arrayMembers = $members->map(function ($item) {
            return [
                'image' => $item->avatar,
                'title' => $item->name,
                'subtitle' => $item->role,
                'body' => $item->bio
            ];
        });
        return view('who_are_we', ['title' =>  __('strings.somos_titulo1'), 'subtitle' => __('strings.somos_subtitulo1'), 'image' => getRandomHero(), 'arrayMembers' => $arrayMembers]);
    }
}
