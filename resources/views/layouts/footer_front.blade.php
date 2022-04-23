<!-- Page Footer-->
<footer class="section footer-classic bg-gray-850">
    <div class="container">
        <h2 class="text-uppercase text-white text-center wow fadeInUp" data-wow-delay=".2s">contact us</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form class="rd-form rd-mailform rd-mailform-custom" data-form-output="form-output-global"
                      data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-lg-30">
                        <div class="col-lg-12">
                            <div class="form-wrap">
                                <input class="form-input form-input-2" id="contact-name-3" type="text" name="name"
                                       data-constraints="@Required">
                                <label class="form-label form-label-2" for="contact-name-3">Name&nbsp;<span
                                        class="text-fourth">*</span></label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-wrap">
                                <input class="form-input form-input-2" id="contact-email-3" type="email" name="email"
                                       data-constraints="@Email @Required">
                                <label class="form-label form-label-2" for="contact-email-3">E-mail&nbsp;<span
                                        class="text-fourth">*</span></label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-wrap">
                                <label class="form-label form-label-2" for="contact-message-3">Message</label>
                                <textarea class="form-input form-input-2" id="contact-message-3" name="message"
                                          data-constraints="@Required"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center offset-top-30">
                            <button
                                class="button-2 wow fadeInLeft button button-lg button-icon button-icon-left button-secondary button-ujarak"
                                data-wow-delay=".2s" type="submit"><span class="icon mdi mdi-plus"></span>Send Message
                            </button>
                        </div>
                    </div>
                </form>
                <ul class="list-inline list-inline-sm footer-social-list">
                    <li><a class="icon fa fa-youtube" href="#"></a></li>
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
                <p class="rights"><span>&copy;&nbsp; </span><span
                        class="copyright-year"></span><span>&nbsp;</span><span>Estetmed</span><span>.&nbsp;</span><span>All rights reserved</span>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{asset('js/core.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
