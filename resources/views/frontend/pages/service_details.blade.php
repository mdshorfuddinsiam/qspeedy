@extends('frontend.layouts.master')
@section('title')
  Service Details
@endsection

@section('content')
  <!-- bbreadcum -->
  <section id="quicktech-breadd">
    <div class="quicktech-breadcumban">
      <img src="{{ asset('frontend/assets') }}/images/servicedetailsban.webp" class="w-100" alt="">
      <div class="quicktech-breadcumm text-center">
        <h3>Services</h3>
        <h4>Home <span class="bread-iconn">
            <i class="fa-solid fa-arrow-right-arrow-left"></i>
          </span> Services </h4>
      </div>
    </div>
  </section>
  <!-- breadcum -->
  <!-- service details part start -->
  <section id="quikctech-service-det">
    <div class="container">
      <div class="row gapp">
        <div class="col-lg-6 order-lg-1 order-2">
          <div class="quicktech-ser-img animated-section">
            <img src="{{ asset($service->image) }}" class="w-100" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-2 order 1">
          <div class="quicktech-about-text text-center animated-section">
            {{-- <h4>Welcome To Qspeedy Garage</h4> --}}
            {!! $service->description_top !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product desp -->
  <section id="quicktech-product-desp">
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-12 ">
          {!! $service->description_bottom !!}
        </div>
      </div>
    </div>
  </section>
  <!-- product desp -->
  <!-- faq -->
  <section id="quicktech-faq">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="quicktech-service-head text-center">
            <h4>Frequently Asked Questions</h4>
            <hr>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="quicktech-faq-img animated-section">
            <img src="{{ asset('frontend/assets') }}/images/fr.png" class="w-100" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          @forelse($faqs as $row)
          <div class="accordion animated-section" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $row->id }}" aria-expanded="false" aria-controls="collapseOne"> {{ $row->title }} </button>
              </h2>
              <div id="collapse-{{ $row->id }}" class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>{!! $row->description !!}</p>
                </div>
              </div>
            </div>
          </div>
          @empty
          @endforelse
        </div>
      </div>
    </div>
  </section>
  <!-- faq -->
  <!-- product image -->
  <section id="quicktech-p-img">
    <div class="container">
      <div class="row gapp">
        @forelse($service->serviceimages as $row)
        <div class="col-lg-6 col-sm-6">
          <div class="quicktech-p-img-main animated-section">
            <img src="{{ asset($row->multi_image) }}" class="w-100" alt="">
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </section>
  <!-- product-image -->
  <!-- service details part end -->
@endsection
