<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticControllerPages extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }
}
