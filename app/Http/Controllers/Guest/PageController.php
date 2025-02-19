<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index() {
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }

    public function user() {
        $comics = Comic::all();
        return view('userComics', compact('comics'));
    }
}
