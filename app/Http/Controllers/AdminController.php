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
    public  function marketing()
    {
        return view('backend.dashboards.marketing');
    }
    public  function bidding()
    {
        return view('backend.dashboards.bidding');
    }
    public  function logistics()
    {
        return view('backend.dashboards.logistics');
    }
    public  function delivery()
    {
        return view('backend.dashboards.delivery');
    }
    public  function website_analytics()
    {
        return view('backend.dashboards.website-analytics');
    }
}
