<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JokeController extends Controller
{

    public function joke(){

        $joke = Http::accept('application/json')->get('https://icanhazdadjoke.com')->json();
        return view('joke', compact('joke'));

    }

    public function getJoke(){

        $joke = Http::accept('application/json')->get('https://icanhazdadjoke.com')->json();
        
        return compact('joke');
    }
}
