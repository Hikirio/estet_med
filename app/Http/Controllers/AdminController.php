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
    public  function finance_performance()
    {
        return view('backend.dashboards.finance-performance');
    }
    public  function store_analytics()
    {
        return view('backend.dashboards.store-analytics');
    }
    public  function social()
    {
        return view('backend.dashboards.social');
    }
    public  function crypto()
    {
        return view('backend.dashboards.crypto');
    }
    public  function school()
    {
        return view('backend.dashboards.school');
    }
    public  function podcast()
    {
        return view('backend.dashboards.podcast');
    }
    public  function landing()
    {
        return view('backend.landing');
    }
    public  function overview_user_profile()
    {
        return view('backend.pages.user-profile.overview');
    }
    public  function projects_user_profile()
    {
        return view('backend.pages.user-profile.projects');
    }
    public  function campaigns_user_profile()
    {
        return view('backend.pages.user-profile.campaigns');
    }
    public  function documents_user_profile()
    {
        return view('backend.pages.user-profile.documents');
    }
    public  function followers_user_profile()
    {
        return view('backend.pages.user-profile.followers');
    }
    public  function activity_user_profile()
    {
        return view('backend.pages.user-profile.activity');
    }
    public  function home_blog()
    {
        return view('backend.pages.blog.home');
    }
    public  function post_blog()
    {
        return view('backend.pages.blog.post');
    }
    public  function pricing_1()
    {
        return view('backend.pages.pricing.pricing-1');
    }
    public  function pricing_2()
    {
        return view('backend.pages.pricing.pricing-2');
    }
    public  function careers_list()
    {
        return view('backend.pages.careers.list');
    }
    public  function careers_apply()
    {
        return view('backend.pages.careers.apply');
    }
    public  function faq_classic()
    {
        return view('backend.pages.faq.classic');
    }
    public  function faq_extended()
    {
        return view('backend.pages.faq.extended');
    }
    public  function about_us()
    {
        return view('backend.pages.about');
    }
    public  function contact_us()
    {
        return view('backend.pages.contact');
    }
    public  function our_team()
    {
        return view('backend.pages.team');
    }
    public  function licenses()
    {
        return view('backend.pages.licenses');
    }
    public  function sitemap()
    {
        return view('backend.pages.sitemap');
    }
    public  function overview_account()
    {
        return view('backend.account.overview');
    }
    public  function settings_account()
    {
        return view('backend.account.settings');
    }
    public  function security_account()
    {
        return view('backend.account.security');
    }
    public  function billing_account()
    {
        return view('backend.account.billing');
    }
    public  function statements_account()
    {
        return view('backend.account.statements');
    }
    public  function referrals_account()
    {
        return view('backend.account.referrals');
    }
    public  function api_keys_account()
    {
        return view('backend.account.api-keys');
    }
    public  function logs_account()
    {
        return view('backend.account.logs');
    }
    public  function sing_in()
    {
        return view('backend.authentication.layouts.basic.sign-in');
    }
    public  function sing_up()
    {
        return view('backend.authentication.layouts.basic.sing-up');
    }
    public  function two_steps()
    {
        return view('backend.authentication.layouts.basic.two-steps');
    }
    public  function password_reset()
    {
        return view('backend.authentication.layouts.basic.password-reset');
    }
    public  function new_password()
    {
        return view('backend.authentication.layouts.basic.new-password');
    }

}
