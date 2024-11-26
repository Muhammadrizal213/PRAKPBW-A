<?php

namespace App\Http\Controllers;

class HomeControllers extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
