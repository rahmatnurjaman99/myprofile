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
                        <img src="{{ asset('assets/img/portfolio/shareyourstories.png')}}" alt="">
                      </div>
      
                      <div class="swiper-slide">
                        <img src="{{ asset('assets/img/portfolio/shareyourstories.png')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{ asset('assets/img/portfolio/shareyourstories.png')}}" alt="">
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
                      <li><strong>Client</strong>: FIMELA</li>
                      <li><strong>Project URL</strong>: <a href="https://www.newshub.id/commercial-gallery/website/shareyourestories/home.html" target="blank">Click Here</a></li>
                    </ul>
                  </div>
                  <div class="portfolio-description">
                    <h2>This is an example of portfolio shareyourestories site</h2>
                    <p>
                      Selection article and users can submit their article by theme to get some reward from sponsor.
                      You can visit the real site URL <a href="https://shareyourstories.fimela.com" target="blank" style="text-decoration: none;"><b>here</b></a>
                    </p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
      
@endsection