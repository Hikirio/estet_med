@include('layouts.header_front')

<section class="section-xl context-dark bg-image-2" style="background-image: url({{asset('/images/bg-about-01-1700x376.jpg')}})">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-12">
              <h2 class="text-uppercase text-center">Tables</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="text-center">Hover Rows</h3>
          <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
              <div class="table-custom-responsive">
                <table class="table-custom table-custom-secondary table-custom-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Megan</td>
                      <td>Perry</td>
                      <td>@maganperry</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Amanda</td>
                      <td>Wagner</td>
                      <td>@amandawagner</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Nicole</td>
                      <td>Reynolds</td>
                      <td>@nicolereynolds</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Daniel</td>
                      <td>Howard</td>
                      <td>@danielhoward</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="text-center">Color Header</h3>
          <div class="row row-offset-1 justify-content-center">
            <div class="col-lg-10 col-xl-9">
              <div class="table-custom-responsive">
                <table class="table-custom table-custom-striped table-custom-primary">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Megan</td>
                      <td>Perry</td>
                      <td>@maganperry</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Amanda</td>
                      <td>Wagner</td>
                      <td>@amandawagner</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Nicole</td>
                      <td>Reynolds</td>
                      <td>@nicolereynolds</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Daniel</td>
                      <td>Howard</td>
                      <td>@danielhoward</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="text-center">Bordered Table</h3>
          <div class="row row-offset-1 justify-content-center">
            <div class="col-lg-10 col-xl-9">
              <div class="table-custom-responsive">
                <table class="table-custom table-custom-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Megan</td>
                      <td>Perry</td>
                      <td>@maganperry</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Amanda</td>
                      <td>Wagner</td>
                      <td>@amandawagner</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Nicole</td>
                      <td>Reynolds</td>
                      <td>@nicolereynolds</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Daniel</td>
                      <td>Howard</td>
                      <td>@danielhoward</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
@include('layouts.footer_front')

