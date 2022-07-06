@extends('layout')

@section('content')
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
      
              <div class="row gy-4">
      
                <div class="col-lg-8">
                  <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
      
                      <div class="swiper-slide">
                        <img src="{{ asset('assets/img/portfolio/lida.jpeg')}}" alt="">
                      </div>
      
                      <div class="swiper-slide">
                        <img src="{{ asset('assets/img/portfolio/lida.jpeg')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{ asset('assets/img/portfolio/lida.jpeg')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                  <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                      <li><strong>Category</strong>: Submission</li>
                      <li><strong>Client</strong>: Indosiar</li>
                      <li><strong>Project URL</strong>: <a href="https://www.newshub.id/commercial-gallery/website/ligadangdut3/index.html" target="blank">Click Here</a></li>
                    </ul>
                  </div>
                  <div class="portfolio-description">
                    <h2>This is an example of portfolio Liga Dangdut site</h2>
                    <p>
                      Submisson form to be an audition contestant, with uploading image and video files.<br/>
                      Integrated with vidio.com API.
                    </p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
      
@endsection