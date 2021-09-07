<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    
    public function comics() {

        $data = [
            'cardsData' => config('comics'),
            'shopItems' => config('shop')
        ];
    
        return view('comics', $data);
    }
}
