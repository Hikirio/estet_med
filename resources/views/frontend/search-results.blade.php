@include('layouts.header_front')
<section class="section-xl context-dark bg-image-2"
         style="background-image: url({{asset('/images/bg-about-01-1700x376.jpg')}})">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h2 class="text-uppercase text-center">Search Results</h2>
            </div>
        </div>
    </div>
</section>
<!-- Search results-->
<section class="section-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- RD Search-->
                <form class="rd-search form-search" action="search-results.blade.php" method="GET">
                    <div class="form-wrap input">
                        <label class="form-label" for="rd-search-form-input">Search</label>
                        <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                    </div>
                    <div class="form-wrap form-button">
                        <button class="button button-primary" type="submit">Search</button>
                    </div>
                </form>
                <div class="rd-search-results"></div>
            </div>
        </div>
    </div>
</section>
<!-- Page Footer-->
@include('layouts.footer_front')
