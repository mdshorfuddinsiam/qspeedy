@extends('frontend.layouts.master')
@section('title')
  Home
@endsection

@section('content')
    <!-- banner -->
    <section id="quicktech-banner">
      <div class="video-container">
        {{-- <div class="back-vid" data-vbg="https://www.youtube.com/watch?v=FTZ7z2jagnU"></div> --}}
        <video style="height: 700px; width: 100vw; object-fit: cover;" autoplay muted loop>
            <source src="{{ asset(@$banner->video) }}" type="video/mp4">
            <source src="{{ asset(@$banner->video) }}" type="video/ogg">
            <source src="{{ asset(@$banner->video) }}" type="video/quicktime"> <!-- for mov, qt -->
            Your browser does not support the video tag.
        </video>

      </div>
    </section>
    <!-- banner -->

    <!-- about -->
    <section id="quikctech-about">
      <div class="container">
        <div class="row gapp">
          <div class="col-lg-6 col-md-6 mt-5 order-lg-1 order-2">
            <div class="quicktech-about-img">
              <img src="{{ asset($about->image) }}" class="w-100" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 order-lg-2 order-1">
            <div class="quicktech-about-text text-end">
              <h4>{{ $about->title }}</h4>
              {{-- <h3>{{ Route::currentRouteName() == 'index' ? $about->subtitle_home : $about->subtitle_about }}</h3> --}}
              <h3>{{ $about->subtitle_home }}</h3>
              {{-- <div class="description">
                  <div class="short-text" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                      {!! $row->description !!}
                  </div>
                  <div class="full-text" style="display: none;">
                      {!! $row->description !!}
                  </div>
                  @if (\Str::length(strip_tags($row->description)) > 250)
                      <a href="javascript:void(0);" class="see-more">See More</a>
                  @endif
              </div> --}}
              <div class="short-text" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 10; -webkit-box-orient: vertical;">
                  {!! $about->description !!}
              </div>
              {{-- {!! $about->description !!} --}}
              <a href="{{ route('about.page') }}">About us <i class="fa-solid fa-caret-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about -->

    <!-- service part start -->
    <section id="quicktech-service">
      <div class="container">
        <div class="row mt-4">
          <div class="col-lg-12">
            <div class="quicktech-service-head text-center">
              <h4>OUR SERVICES</h4>
              <hr>
            </div>
          </div>
        </div>
        <div class="row gapp mt-3">
          @forelse($services as $row)
          <div class="col-lg-3 col-sm-6">
            <div class="quicktech-service-img text-center animated-section">
              <img src="{{ asset($row->image) }}" class="w-100" alt="">
              <h3>{{ $row->name }}</h3>
              <a class="quicktech-view-more-btn" href="{{ route('service.details.page',['slug' => $row->slug]) }}">View More</a>
            </div>
          </div>
          @empty
          @endforelse
        </div>
        <div class="row mt-5">
          <div class="col-mg-12">
            <div class="quicktech-view-all text-center">
              <a href="{{ route('service.page') }}">View More Services</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- service part end -->

    <!-- faq part start -->
    <!--<section id="quicktech-faq">-->
    <!--  <div class="container">-->
    <!--    <div class="row mt-4">-->
    <!--      <div class="col-lg-12">-->
    <!--        <div class="quicktech-service-head text-center">-->
    <!--          <h4>Frequently Asked Questions</h4>-->
    <!--          <hr>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-6">-->
    <!--        <div class="quicktech-faq-img animated-section">-->
    <!--          <img src="{{ asset('frontend/assets') }}/images/fr.png" class="w-100" alt="">-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-lg-6">-->

    <!--      @forelse($faqs as $row)-->
    <!--      <div class="accordion animated-section" id="faqAccordion">-->
    <!--        <div class="accordion-item">-->
    <!--          <h2 class="accordion-header" id="heading">-->
    <!--            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $row->id }}" aria-expanded="false" aria-controls="collapseOne"> {{ $row->title }} </button>-->
    <!--          </h2>-->
    <!--          <div id="collapse-{{ $row->id }}" class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#faqAccordion">-->
    <!--            <div class="accordion-body">-->
    <!--              <p>{!! $row->description !!}</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      @empty-->
    <!--      @endforelse-->

    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- faq part end -->

    <!-- testmonial part start -->
    <!-- <section id="quicktech-testimonial"><div class="container"><div class="row mt-4"><div class="col-lg-12"><div class="quicktech-service-head text-center"><h4>OUR TESTIMONIAL</h4><h5 style="color: Green;">WHAT PEOPLE SAY ABOUT US</h5><hr></div></div></div><div class="row"><div class="col-lg-6 m-auto"><div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"><div class="carousel-indicators"><button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button><button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button></div><div class="carousel-inner"><div class="carousel-item active"><div class="quicktech-testi"><img src="{{ asset('frontend/assets') }}/images/profile.png" class="rounded-fluid" alt=""><h5>Dana AL ali</h5><h6>client</h6><p>The most amazing garage in dubai...</p></div></div><div class="carousel-item"><div class="quicktech-testi"><img src="{{ asset('frontend/assets') }}/images/profile.png" class="rounded-fluid" alt=""><h5>Dana AL ali</h5><h6>client</h6><p>The most amazing garage in dubai...</p></div></div><div class="carousel-item"><div class="quicktech-testi"><img src="{{ asset('frontend/assets') }}/images/profile.png" class="rounded-fluid" alt=""><h5>Dana AL ali</h5><h6>client</h6><p>The most amazing garage in dubai...</p></div></div></div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button></div></div></div></div></section> -->
    <!-- testmonial part end -->

    <!-- our concern -->
    <section id="quicktech-concerns">
      <i class="fa-solid fa-chevron-left prev"></i>
      <i class="fa-solid fa-chevron-right next"></i>
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="quicktech-service-head text-center">
              <h4>OUR CONCERNS</h4>
              <hr>
            </div>
          </div>
        </div>
        <div class="row concern-slide mt-2">
          @forelse($concerns as $row)
          <div class="col-lg-3">
            <div class="quicktech-concern-img text-center">
              <img src="{{ asset($row->image) }}" class="w-100" alt="">
              <p>{{ $row->title }}</p>
            </div>
          </div>
          @empty
          @endforelse
        </div>
      </div>
    </section>
    <!-- our concern -->

    <!-- Newsletter Section
    <section class="newsletter"><div class="container"><div class="row"><div class="col-lg-6"><h3>SIGN UP FOR NEWSLETTER</h3><p>Wants To Get Latest Updates! Sign Up For Free.</p></div><div class="col-lg-6"><form class="d-inline-block"><input type="email" placeholder="Enter Your Email"><button type="submit">Sign Up</button></form></div><div class="col-12"></div></div></div></section> -->
@endsection

@section('front_js')
    <script>
        $(document).ready(function(){
            $('.see-more').click(function(e){
                e.preventDefault();
                var $this = $(this);
                var $shortText = $this.siblings('.short-text');
                var $fullText = $this.siblings('.full-text');

                if($this.text() === 'See More') {
                    $shortText.hide();
                    $fullText.show();
                    $this.text('See Less');
                } else {
                    $shortText.show();
                    $fullText.hide();
                    $this.text('See More');
                }
            });
        });
    </script>
@endsection
