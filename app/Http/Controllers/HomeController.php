<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // controller per richiamare home
    public function home() {
        return view('home');
    }

    // controller per richiamare movies
    public function movies() {
        return view('movies');
    }

    // controller per richiamare tv
    public function tv() {
        return view('tv');
    }

    // controller per richiamare games
    public function games() {
        return view('games');
    }

    // controller per richiamare collectibles
    public function collectibles() {
        return view('collectibles');
    }

    // controller per richiamare videos
    public function videos() {
        return view('videos');
    }

    // controller per richiamare fans
    public function fans() {
        return view('fans');
    }

    // controller per richiamare news
    public function news() {
        return view('news');
    }

    // controller per richiamare shop
    public function shop() {
        return view('shop');
    }
}