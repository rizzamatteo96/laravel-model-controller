<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;


class ComicsController extends Controller
{
    
    public function comics() {

        $test = Comic::all();
        dd($test);

        $data = [
            'cardsData' => config('comics'),
            'shopItems' => config('shop')
        ];
    
        return view('comics', $data);
    }
}
