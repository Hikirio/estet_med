@include('layouts.header_front')
      <section class="section-xl context-dark bg-image-2" style="background-image: url({{asset('/images/bg-about-01-1700x376.jpg')}})">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-12">
              <h2 class="text-uppercase text-center">Forms</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- Forms-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
              <h3>Login form</h3>
              <div class="group-sm group-middle group-custom"><a class="button button-facebook button-icon button-icon-left button-round" href="#"><span class="icon fa fa-facebook"></span>Facebook</a><a class="button button-twitter button-icon button-icon-left button-round" href="#"><span class="icon fa fa-twitter"></span>Twitter</a><a class="button button-google button-icon button-icon-left button-round" href="#"><span class="icon fa fa-google-plus"></span>Google+</a></div>
              <div class="text-decoration-lines"><span class="text-decoration-lines-content">or</span></div>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform rd-form-centered row-20">
                <div class="form-wrap">
                  <input class="form-input" id="login-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="login-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                  <label class="form-label" for="login-password">Password</label>
                </div>
                <button class="button button-block button-primary" type="submit">Enter</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact us-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
              <h3>Contact us</h3>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="../../../public/bat/rd-mailform.php">
                <div class="row row-20 row-narrow-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Your Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button class="button button-block button-primary" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Contact Us-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
              <h3>Contact Us (with reCAPTCHA)</h3>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="../../../public/bat/rd-mailform.php">
                <div class="row row-sm-bottom row-20 row-narrow-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-2-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-2-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-2-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-2-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-2-message">Your Message</label>
                      <textarea class="form-input" id="contact-2-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-2-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-2-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-wrap form-wrap-recaptcha">
                      <!-- Google captcha-->
                      <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button class="button button-block button-primary" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Subscribe to Our Newsletter-->
      <section class="parallax-container section" data-parallax-img="http://media1.mennwa.com/2015/12/slide-corporate-hosting.jpg">
        <div class="parallax-content section-lg context-dark text-center">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-9 col-lg-8 col-xl-7">
                <h3>Subscribe to Our Newsletter</h3>
                <p>Sign up to our newsletter and be the first to know about the latest company news, special offers, events, and discounts.</p>
                <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="../../../public/bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                  </div>
                  <div class="form-button offset-top-20-sm-0">
                    <button class="button button-primary" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <h3>MailChimp</h3>
              <p>Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.</p>
              <!-- Mailchimp-->
              <form class="rd-form mailchimp-mailform rd-form-inline" data-form-output="form-output-global" action="https://templatemonster.us15.list-manage.com/subscribe/post?u=ba5bb362073a413f48e4a7b90&amp;id=8dc95d9dec" method="post">
                <div class="form-wrap">
                  <label class="form-label" for="mailchimp-email">Enter your e-mail</label>
                  <input class="form-input" id="mailchimp-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
                <div class="form-button offset-top-20-sm-0">
                  <button class="button button-primary" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <h3>Campaign Monitor</h3>
              <p>Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.</p>
              <!-- Campaign Monitor-->
              <form class="rd-form campaign-mailform rd-form-inline" data-form-output="form-output-global" action="https://templatermonster.createsend.com/t/j/s/zjjikd/" method="post">
                <div class="form-wrap">
                  <label class="form-label" for="campaign-email">Enter your e-mail</label>
                  <input class="form-input" id="campaign-email" type="email" name="cm-zjjikd-zjjikd" data-constraints="@Email @Required">
                </div>
                <div class="form-button offset-top-20-sm-0">
                  <button class="button button-primary" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
@include('layouts.footer_front')
