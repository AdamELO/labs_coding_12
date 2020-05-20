@extends('templates.dashboard')
@section('content')
    <!-- Section: Button icon -->
    <section>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
          <div class="col-6 mb-4">

              <!-- Card -->
              <div class="card">

                  <!-- Card Data -->
                  <div class="row mt-3 mb-3">

                      <div class="col-12 text-center">
                          <a href="/menu" class="btn-floating btn-lg blue accent-2"><i
                                  class="fas fa-bars" aria-hidden="true"></i></a>
                          <h5>Menu</h5>
                      </div>
                  </div>
                  <!-- Card Data -->
              </div>
              <!-- Card -->
          </div>
            <!-- Grid column -->

            <!-- Grid column -->
          <div class="col-6 mb-4">

              <!-- Card -->
              <div class="card">

                  <!-- Card Data -->
                  <div class="row mt-3 mb-3">

                      <div class="col-12 text-center">
                          <a href="/banner" class="btn-floating btn-lg green accent-2"><i
                                  class="fas fa-window-maximize" aria-hidden="true"></i></a>
                          <h5>Banner</h5>
                      </div>
                  </div>
                  <!-- Card Data -->
              </div>
              <!-- Card -->
          </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 mb-4">

              <!-- Card -->
              <div class="card">

                  <!-- Card Data -->
                  <div class="row mt-3 mb-3">

                      <div class="col-12 text-center">
                          <a href="/gallery" class="btn-floating btn-lg blue accent-2"><i
                                  class="fas fa-images" aria-hidden="true"></i></a>
                          <h5>Gallery Images</h5>
                      </div>
                  </div>
                  <!-- Card Data -->
              </div>
              <!-- Card -->
           </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 mb-4">

                <!-- Card -->
                <div class="card">

                    <!-- Card Data -->
                    <div class="row mt-3 mb-3">
                        <div class="col-12 text-center">
                            <a href="/mail" class="btn-floating btn-lg green accent-2"><i
                                    class="fas fa-envelope" aria-hidden="true"></i></a>
                          <h5>Mails</h5>
                        </div>
                    </div>
                    <!-- Card Data -->
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->

            <div class="col-12 mb-4">

              <!-- Card -->
              <div class="card">

                  <!-- Card Data -->
                  <div class="row mt-3 mb-3">
                      <div class="col-12 text-center">
                          <a href="/adminpro" class="btn-floating btn-lg blue accent-2"><i
                                  class="fas fa-key" aria-hidden="true"></i></a>
                        <h5>Admin Profil</h5>
                      </div>
                  </div>
                  <!-- Card Data -->
              </div>
              <!-- Card -->
          </div>

        </div>
        <!-- Grid row -->
    </section>
    <!-- Section: Button icon -->
@endsection