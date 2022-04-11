@include('layouts.header_front')

      <section class="section-xl context-dark bg-image-2" style="background-image: url({{asset('/images/bg-about-01-1700x376.jpg')}})">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-12">
              <h2 class="text-uppercase text-center">Progress Bars</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- Skill Bars-->
      <section class="section section-md bg-gray-200">
        <div class="container">
          <div class="text-center">
            <h2>Progress Bars, Skill Bars, Counters</h2>
            <p>These elements are vital to design of every website, and with them you can improve the overall look of your resource and attract more clients.</p>
          </div>
          <div class="row justify-content-md-center row-md-reverse row-lg-justify row-50 align-items-end">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="text-uppercase">our skills</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. risus ultricies tristique. Aliquet nibh praesent tristique magna. Vitae et leo duis ut diam quam nulla. Facilisis sed odio morbi quis commodo odio aenean sed. Etiam non quam lacus suspendisse.</p>
            </div>
            <div class="col-md-10 col-lg-6">
              <!-- Linear progress bar-->
              <article class="progress-linear color-primary">
                <div class="progress-header">
                  <p>Dedication</p><span class="progress-value">85</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear color-primary">
                <div class="progress-header">
                  <p>Knowledge</p><span class="progress-value">60</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear color-primary">
                <div class="progress-header">
                  <p>Experience</p><span class="progress-value">52</span>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Counters-->
      <section class="section section-md bg-accent text-center">
        <div class="container">
          <div class="row row-30">
            <div class="col-6 col-md-3">
              <!-- Box counter-->
              <article class="box-counter">
                <div class="box-counter-main"><span>87</span></div>
                <div class="box-counter-divider"></div>
                <p class="box-counter-title">AWARDS</p>
              </article>
            </div>
            <div class="col-6 col-md-3">
              <!-- Box counter-->
              <article class="box-counter">
                <div class="box-counter-main">
                  <div class="counter">197</div>
                </div>
                <div class="box-counter-divider"></div>
                <p class="box-counter-title">EVENTS</p>
              </article>
            </div>
            <div class="col-6 col-md-3">
              <!-- Box counter-->
              <article class="box-counter">
                <div class="box-counter-main">
                  <div class="counter">246</div><span class="small">K</span>
                </div>
                <div class="box-counter-divider"></div>
                <p class="box-counter-title">HAPPY CLIENTS</p>
              </article>
            </div>
            <div class="col-6 col-md-3">
              <!-- Box counter-->
              <article class="box-counter">
                <div class="box-counter-main">
                  <div class="counter">101</div>
                </div>
                <div class="box-counter-divider"></div>
                <p class="box-counter-title">PARTNERS</p>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Circle Progress Bars-->
      <section class="section section-md text-center bg-gray-200">
        <div class="container">
          <h3>Circle Progress Bars</h3>
          <div class="row justify-content-center">
            <div class="col-sm-5 col-lg-3">
              <!-- Circle Progress Bar-->
              <div class="progress-bar-circle" data-value="0.4" data-gradient="#6f43d6" data-empty-fill="rgb(245,245,245)" data-size="150" data-thickness="10"><span></span></div>
              <p class="progress-bar-circle-title">Leadership</p>
            </div>
            <div class="col-sm-5 col-lg-3">
              <!-- Circle Progress Bar-->
              <div class="progress-bar-circle" data-value="0.5" data-gradient="#6f43d6" data-empty-fill="rgb(245,245,245)" data-size="150" data-thickness="10"><span></span></div>
              <p class="progress-bar-circle-title">Management</p>
            </div>
            <div class="col-sm-5 col-lg-3">
              <!-- Circle Progress Bar-->
              <div class="progress-bar-circle" data-value="0.6" data-gradient="#6f43d6" data-empty-fill="rgb(245,245,245)" data-size="150" data-thickness="10"><span></span></div>
              <p class="progress-bar-circle-title">Innovation and creativity</p>
            </div>
            <div class="col-sm-5 col-lg-3">
              <!-- Circle Progress Bar-->
              <div class="progress-bar-circle" data-value="0.7" data-gradient="#6f43d6" data-empty-fill="rgb(245,245,245)" data-size="150" data-thickness="10"><span></span></div>
              <p class="progress-bar-circle-title">Resilience</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Countdown-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-xl-9">
              <h3>Countdown</h3>
              <!-- TimeCircles-->
              <div class="DateCountdown" data-type="until" data-date="2018-12-31 00:00:00" data-format="wdhms" data-color="#6f43d6" data-bg="rgba(245, 245, 245, 1)" data-width="0.02"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
@include('layouts.footer_front')
