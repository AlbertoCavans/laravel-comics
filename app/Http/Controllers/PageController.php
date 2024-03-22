<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('mains.home');
    }
    public function comics() {
        $comics = config('comics');
        return view('mains.comics', compact('comics'));
    }
    public function singleComics($index) {
        $comics = config('comics');
        $comic = $comics[$index];
        return view('mains.singleComics', compact('comic'));
    }
}
