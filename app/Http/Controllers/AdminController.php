<?php

namespace App\Http\Controllers;

class AdminController
{
    public function index()
    {
        return view('backend.index');
    }
    public function multipurpose()
    {
        return view('backend.index');
    }
    public function ecommerce()
    {
        return view('backend.dashboards.ecommerce');
    }
    public  function projects()
    {
        return view('backend.dashboards.projects');
    }
    public  function online_courses()
    {
        return view('backend.dashboards.online-courses');
    }
}
