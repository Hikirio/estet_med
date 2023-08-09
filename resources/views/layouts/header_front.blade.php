<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>{{Route::currentRouteName()}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700%7CMerriweather:300i,400,400i,700,700i,900%7CMontserrat:300,400,700,800,900">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="/"><img class="brand-logo-dark" src="{{asset('images/em_logo_rus.svg')}}" alt="" width="119" height="44" srcset="{{asset('images/em_logo_rus.svg')}} 2x"/><img class="brand-logo-light" src="{{asset('images/em_logo_rus.svg')}}" alt="" width="119" height="44" srcset="{{asset('images/em_logo_rus.svg')}} 2x"/></a>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="{{url('/')}}">Головна</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/about')}}">Дієтологія</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/portfolio')}}">Массаж</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/single-portfolio')}}">Single Portfolio</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/services')}}">Косметологія</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/single-service')}}">Single Service</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/classic-blog')}}">Реабілітація</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/classic-blog')}}">Classic Blog</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/modern-blog')}}">Modern Blog</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/blog-post')}}">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Медсестриство</a>
                                        <ul class="rd-menu rd-navbar-megamenu">
                                            <li class="rd-megamenu-item">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/typography')}}">Typography</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/buttons')}}">Buttons</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/forms')}}">Forms</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/tabs-and-accordions')}}">Tabs and Accordions</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/progress-bars')}}">Progress Bars</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/tables')}}">Tables</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/grid-system')}}">Grid System</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/404-page')}}">405 Page</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/503-page')}}">503 Page</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/under-construction')}}">Under Construction</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">Coming Soon</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/search-results')}}">Search Results</a></li>
                                                </ul>
                                            </li>
                                        </ul>
{{--                                    </li>--}}
{{--                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/contacts')}}">Викладачі</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

