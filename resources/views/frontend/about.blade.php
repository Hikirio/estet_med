@include('layouts.header_front')
      <section class="section-xl context-dark bg-image-2" style="background-image: url({{asset('images/bg-about-01-1700x376.jpg')}})">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-12">
              <h2 class="text-uppercase text-center">About</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- about our agency-->
      <section class="section-lg bg-default">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-10">
              <h2 class="text-uppercase text-center wow fadeInUp" data-wow-delay=".2s">about our&nbsp;<span class="text-secondary">agency</span></h2>
              <p class="text-gray-600 offset-top-10">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ultricies, nulla eget fringilla eleifend, sapien est vulputate turpis, eget ultrices sapien libero in urna. Nullam vel libero non ligula fringilla imperdiet ac at neque. Sed finibus ex vitae dolor luctus egestas. Ut id pellentesque enim.</p>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInLeft offset-top-0-md-20" data-wow-delay=".2s">
              <article class="box-icon-modern box-icon-2">
                <div class="box-icon-modern-icon mercury-icon-users"></div>
                <h4 class="box-icon-modern-title"><a href="single-service.blade.php">Top class Specialists</a></h4>
                <p class="box-icon-modern-text text-gray-600">Lorem ipsum proin gravida nibh vel ve auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInLeft offset-top-0-md-20">
              <article class="box-icon-modern box-icon-2">
                <div class="box-icon-modern-icon mercury-icon-time-back"></div>
                <h4 class="box-icon-modern-title"><a href="single-service.blade.php">Reliable Solutions</a></h4>
                <p class="box-icon-modern-text text-gray-600">Feugiat in ante metus dictum at tempor commodo. Vel fringilla est ullamcorper eget nulla. Quam nulla porttitor massa id neque aliquam.</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInLeft offset-top-0-md-20">
              <article class="box-icon-modern box-icon-2">
                <div class="box-icon-modern-icon mercury-icon-chat"></div>
                <h4 class="box-icon-modern-title"><a href="single-service.blade.php">Qualified Support</a></h4>
                <p class="box-icon-modern-text text-gray-600">Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Quis enim lobortis scelerisque fermentum dui faucibus in ornare.</p>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- a new way to-->
      <section class="section-xxl bg-primary section-button-style">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
              <h2 class="text-uppercase text-white text-lg-right offset-lg-right-30">our goal<br>is&nbsp;<span class="text-third">organizing</span> <span class="text-white">efficient events</span>
              </h2>
            </div>
            <div class="col-sm-12 col-lg-5 offset-lg-left-50 offset-top-20-lg-0 wow fadeInRight text-border" data-wow-delay=".2s">
              <p class="font-weight-ubold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan lacus nulla quis imperdiet turpis.</p>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ultricies, nulla eget fringilla eleifend, sapien est vulputate turpis, eget ultrices sapien libero in urna. Nullam vel libero non ligula fringilla imperdiet ac at neque. Sed finibus ex vitae dolor luctus egestas. Ut id pellentesque enim.</p>
            </div>
            <div class="button-style"><a class="wow fadeInLeft button button-lg button-icon button-icon-left button-secondary button-ujarak" data-wow-delay=".2s" href="#"><span class="icon mdi mdi-plus"></span>Learn more</a></div>
          </div>
        </div>
      </section>
      <!-- our team-->
      <section class="section section-secondary section-bottom-50-lg-110">
        <div class="container">
          <h2 class="text-uppercase text-center wow fadeInRight" data-wow-delay=".2s">our&nbsp;<span class="text-third">team</span></h2>
          <div class="row row-30" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 isotope-item wow fadeInLeft" data-filter="Type 3">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic-2 thumbnail-md">
                <div class="thumbnail-classic-figure-2"><img src="{{asset('/images/our-team-1-370x400.jpg')}}" alt="" width="370" height="400"/>
                </div>
                <div class="thumbnail-classic-caption-2">
                  <div class="thumbnail-classic-title-wrap-2"><a class="icon fl-bigmug-line-zoom60" href="{{asset('/images/our-team-1-1200x800-original.jpg')}}" data-lightgallery="item"><img src="{{asset('/images/our-team-1-370x400.jpg')}}" alt="" width="370" height="400"/></a>
                    <h3 class="thumbnail-classic-title-2 text-uppercase"><a href="#">Peter Miller</a></h3>
                  </div>
                  <p class="thumbnail-classic-text-2 text-center text-white">Managing Director</p>
                  <div class="thumbnail-classic-social-2">
                    <ul>
                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item wow fadeInLeft" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic-2 thumbnail-md">
                <div class="thumbnail-classic-figure-2"><img src="{{asset('/images/our-team-2-370x400.jpg')}}" alt="" width="370" height="400"/>
                </div>
                <div class="thumbnail-classic-caption-2">
                  <div class="thumbnail-classic-title-wrap-2"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/our-team-2-1200x800-original.jpg')}}" data-lightgallery="item"><img src="{{asset('/images/our-team-2-370x400.jpg')}}" alt="" width="370" height="400"/></a>
                    <h3 class="thumbnail-classic-title-2 text-uppercase"><a href="#">Catherine Jenkins</a></h3>
                  </div>
                  <p class="thumbnail-classic-text-2 text-center text-white">Production Director</p>
                  <div class="thumbnail-classic-social-2">
                    <ul>
                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item wow fadeInLeft" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic-2 thumbnail-md">
                <div class="thumbnail-classic-figure-2"><img src="{{asset('/images/our-team-3-370x400.jpg')}}" alt="" width="370" height="400"/>
                </div>
                <div class="thumbnail-classic-caption-2">
                  <div class="thumbnail-classic-title-wrap-2"><a class="icon fl-bigmug-line-zoom60" href="{{asset('/images/grid-gallery-1-1200x800-original.jpg')}}" data-lightgallery="item"><img src="{{asset('/images/our-team-3-370x400.jpg')}}" alt="" width="370" height="400"/></a>
                    <h3 class="thumbnail-classic-title-2 text-uppercase"><a href="#">Harold Thompson</a></h3>
                  </div>
                  <p class="thumbnail-classic-text-2 text-center text-white">Client Services Director</p>
                  <div class="thumbnail-classic-social-2">
                    <ul>
                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item wow fadeInLeft" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic-2 thumbnail-md">
                <div class="thumbnail-classic-figure-2"><img src="{{asset('/images/our-team-4-370x400.jpg')}}" alt="" width="370" height="400"/>
                </div>
                <div class="thumbnail-classic-caption-2">
                  <div class="thumbnail-classic-title-wrap-2"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/our-team-4-1200x800-original.jpg')}}" data-lightgallery="item"><img src="{{asset('/images/our-team-4-370x400.jpg')}}" alt="" width="370" height="400"/></a>
                    <h3 class="thumbnail-classic-title-2 text-uppercase"><a href="#">Kathy Scott</a></h3>
                  </div>
                  <p class="thumbnail-classic-text-2 text-center text-white">Event Coordinator</p>
                  <div class="thumbnail-classic-social-2">
                    <ul>
                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item wow fadeInRight">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic-2 thumbnail-md">
                <div class="thumbnail-classic-figure-2"><img src="{{asset('/images/our-team-5-370x400.jpg')}}" alt="" width="370" height="400"/>
                </div>
                <div class="thumbnail-classic-caption-2">
                  <div class="thumbnail-classic-title-wrap-2"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/our-team-5-1200x800-original.jpg')}}" data-lightgallery="item"><img src="{{asset('/images/our-team-5-370x400.jpg')}}" alt="" width="370" height="400"/></a>
                    <h3 class="thumbnail-classic-title-2 text-uppercase"><a href="#">Ralph Barnes</a></h3>
                  </div>
                  <p class="thumbnail-classic-text-2 text-center text-white">Event Manager</p>
                  <div class="thumbnail-classic-social-2">
                    <ul>
                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item wow fadeInRight" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic-2 thumbnail-md">
                <div class="thumbnail-classic-figure-2"><img src="{{asset('/images/our-team-6-370x400.jpg')}}" alt="" width="370" height="400"/>
                </div>
                <div class="thumbnail-classic-caption-2">
                  <div class="thumbnail-classic-title-wrap-2"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/our-team-6-1200x800-original.jpg')}}" data-lightgallery="item"><img src="{{asset('/images/our-team-6-370x400.jpg')}}" alt="" width="370" height="400"/></a>
                    <h3 class="thumbnail-classic-title-2 text-uppercase"><a href="#">Julia Hill</a></h3>
                  </div>
                  <p class="thumbnail-classic-text-2 text-center text-white">Office Manager</p>
                  <div class="thumbnail-classic-social-2">
                    <ul>
                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- the partners-->
      <section class="section-lg bg-default bg-image-2" style="background-image: {{url('/images/bg-about-01-1700x638.jpg')}}">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-10">
              <h2 class="text-uppercase text-center wow fadeInDown" data-wow-delay=".2s">our partners</h2>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown clients-classic-item" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-1.png')}}" alt=""/></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown clients-classic-item" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-2.png')}}" alt=""/></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown clients-classic-item" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-3.png')}}" alt=""/></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown clients-classic-item-3"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-4.png')}}" alt=""/></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp clients-classic-item-2"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-5.png')}}" alt=""/></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp clients-classic-item-2" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-6.png')}}" alt=""/></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp clients-classic-item-2" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-7.png')}}" alt=""/></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="{{asset('/images/clients-8.png')}}" alt=""/></a></div>
          </div>
        </div>
      </section>
@include('layouts.footer_front')
