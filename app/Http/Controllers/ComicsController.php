<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;


class ComicsController extends Controller
{
    
    public function comics() {

        $cards = Comic::all();
        // dd($test);

        $data = [
            'cardsData' => $cards,
            'shopItems' => config('shop')
        ];
    
        return view('comics', $data);
    }

    public function comicsDetails($id) {

        $card = Comic::where('id', $id)->first();
        // dd($card);

        $data = [
            'cardsData' => $card,
            'shopItems' => config('shop')
        ];
    
        return view('comicsDetails', $data);
    }
}