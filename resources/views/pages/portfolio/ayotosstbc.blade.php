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
                        <img src="{{ asset('assets/img/portfolio/ayotosstbc.png')}}" alt="">
                      </div>
      
                      <div class="swiper-slide">
                        <img src="{{ asset('assets/img/portfolio/ayotosstbc.png')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{ asset('assets/img/portfolio/ayotosstbc.png')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                  <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                      <li><strong>Category</strong>: Article</li>
                      <li><strong>Client</strong>: Kementrian Kesehatan RI</li>
                      <li><strong>Project URL</strong>: <a href="https://www.newshub.id/commercial-gallery/website/ayotostbc2021/index.html" target="blank">Click Here</a></li>
                    </ul>
                  </div>
                  <div class="portfolio-description">
                    <h2>This is an example of portfolio ayotosstbc site</h2>
                    <p>
                      Selection article, and give information about clinic location to take care TBC.
                    </p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
      
@endsection