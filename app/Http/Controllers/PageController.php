<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about.index');
    }

    public function customGold()
    {
        return view('custom-gold.index');
    }

    public function blog()
    {
        return view('blog.index');
    }
}