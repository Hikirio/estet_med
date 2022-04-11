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
    public function portfolio()
    {
        return view('frontend.portfolio');
    }
    public function singleportfolio()
    {
        return view('frontend.single-portfolio');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function singleservice()
    {
        return view('frontend.single-service');
    }
    public function classicblog()
    {
        return view('frontend.classic-blog');
    }
    public function modernblog()
    {
        return view('frontend.modern-blog');
    }
    public function blogpost()
    {
        return view('frontend.blog-post');
    }
    public function typography()
    {
        return view('frontend.typography');
    }
    public function buttons()
    {
        return view('frontend.buttons');
    }
    public function forms()
    {
        return view('frontend.forms');
    }
    public function tabsandaccordions()
    {
        return view('frontend.tabs-and-accordions');
    }
    public function progressbars()
    {
        return view('frontend.progress-bars');
    }
    public function tables()
    {
        return view('frontend.tables');
    }
    public function grid()
    {
        return view('frontend.grid-system');
    }
    public function error404()
    {
        return view('frontend.404-page');
    }
    public function error503()
    {
        return view('frontend.503-page');
    }
    public function underconstruction()
    {
        return view('frontend.under-construction');
    }
    public function comingsoon()
    {
        return view('frontend.coming-soon');
    }
    public function privacy()
    {
        return view('frontend.privacy-policy');
    }
    public function searchres()
    {
        return view('frontend.search-results');
    }
}
