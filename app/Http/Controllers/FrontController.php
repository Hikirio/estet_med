<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function contacts()
    {
        return view('frontend.contacts');
    }
    public function about()
    {
        return view('frontend.about');
    }
}
