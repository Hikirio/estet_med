@include('layouts.header_front')
      <section class="section-xl context-dark bg-image-2" style="background-image: url({{('/images/bg-about-01-1700x376.jpg')}})">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-12">
              <h2 class="text-uppercase text-center">Buttons</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- Button Sizes-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Button Sizes</h4>
          <p>4 different sizes: super, large, default and small.</p>
          <div class="group-xl group-middle-2 justify-content-center">
            <div class="button button-xl button-primary">Super Size</div>
            <div class="button button-lg button-primary">Large size</div>
            <div class="button button-primary">Default size</div>
            <div class="button button-sm button-primary">Small size</div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Button Shapes-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Button Shapes</h4>
          <p>4 different shapes: default, round, round 2, and circle.</p>
          <div class="group-xl group-middle-2 justify-content-center">
            <div class="button button-primary">Default</div>
            <div class="button button-primary button-round-1">Round 1</div>
            <div class="button button-primary button-round-2">Round 2</div>
            <div class="button button-primary button-circle">Circle</div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Buttons with Icons-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Buttons with Icons</h4>
          <p>Buttons are fully integrated with 900+ icons.</p>
          <div class="group-xl group-middle-2 justify-content-center">
            <div class="button button-icon button-icon-right button-primary"><span class="icon mdi mdi-account"></span>Icon right</div>
            <div class="button button-icon button-icon-left button-primary"><span class="icon mdi mdi-account"></span>Icon left</div>
            <div class="button button-icon button-icon-right button-default-outline"><span class="icon mdi mdi-account"></span>Icon right</div>
            <div class="button button-icon button-icon-left button-default-outline"><span class="icon mdi mdi-account"></span>Icon left</div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Buttons with Shadow-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Buttons with Shadow</h4>
          <p>Enhance your buttons with a shadow effect.</p>
          <div class="group-xl group-middle-2 justify-content-center">
            <div class="button button-primary button-circle button-shadow">Shadow</div>
            <div class="button button-ghost button-circle button-shadow">Shadow</div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
@include('layouts.footer_front')
