<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //dd(Movie::all());
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
