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
      <section class="section section-single bg-gray-700">
        <div class="section-single-inner">
          <div class="section-single-header">
            <div class="container">
              <!-- Brand--><a class="brand" href="index.blade.php"><img class="brand-logo-dark" src="/images/logo-default-119x44.png" alt="" width="119" height="44" srcset="/images/logo-default-119x44.png 2x"/><img class="brand-logo-light" src="/images/logo-default-119x44.png" alt="" width="119" height="44" srcset="/images/logo-default-119x44.png 2x"/></a>
            </div>
          </div>
          <div class="section-single-main">
            <div class="container">
              <h3>We're getting ready to launch in</h3>
              <div class="divider-small"></div>
              <div class="countdown-wrap">
                <div class="DateCountdown" data-type="until" data-date="2018-12-31 00:00:00" data-format="wdhms" data-color="#6f43d6" data-bg="rgba(255, 255, 255, 1)" data-width="0.02"></div>
              </div>
              <p><span style="max-width: 450px;">Our website is under construction, we are working very hard to give you the best experience on our new web site.</span></p>
              <div class="rd-mailform-wrap">
                <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="../../../public/bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="subscribe-form-email">E-mail</label>
                  </div>
                  <div class="form-button offset-top-20-sm-0">
                    <button class="button button-primary" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="section-single-footer">
            <div class="container">
              <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Sky Events</span><span>.&nbsp;</span><span>All rights reserved</span><span>.&nbsp;</span><a href="#">Terms and Conditions</a><span>.&nbsp;</span><a href="privacy-policy.blade.php">Privacy Policy</a><span>.</span><span> Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a></span></p>
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
