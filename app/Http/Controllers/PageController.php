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
}
