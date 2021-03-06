<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>{{Route::currentRouteName()}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../../public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700%7CMerriweather:300i,400,400i,700,700i,900%7CMontserrat:300,400,700,800,900">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page content-->
      <section class="section section-single bg-size" style="background-image: url({{asset('/images/bg-image-503-1920x1080.jpg')}});">
        <div class="section-single-inner">
          <div class="section-single-dummy"></div>
          <div class="section-single-main">
            <div class="container">
              <div class="row row-30">
                <div class="col-sm-6 text-center text-sm-left">
                  <p class="text-extra-large text-white">503</p>
                </div>
                <div class="col-sm-6">
                  <div class="section-single-main-content text-left">
                    <h5 class="title-decorated title-decorated-lg text-uppercase text-white">Service is temporary unavailable</h5>
                    <p><span class="text-width-2 text-white">Sorry, we're offline right now to make our site even better. Please, come back later and check what we've been up to.</span></p><a class="button button-lg button-primary button-winona" href="{{url('/')}}">Back to home page</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-minimal section-single-footer">
            <div class="container">
              <div class="footer-minimal-inner"><a class="brand" href="index.blade.php"><img src="../../../public/images/logo-light-119x44.png" alt="" width="119" height="44" srcset="../../../public/images/logo-light-119x44.png 2x"/></a>
                <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Sky Events</span><span>.&nbsp;</span><span>All rights reserved</span><span>.&nbsp;</span><a href="#">Terms and Conditions</a><span>.&nbsp;</span><a href="privacy-policy.blade.php">Privacy Policy</a><span>.</span><span> Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a></span></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>
