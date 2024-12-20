@extends('frontend.layouts.master')
@section('title')
  Service Details
@endsection

@section('content')
  <!-- bbreadcum -->
  <section id="quicktech-bread">
    <div class="quicktech-breadcum text-center">
      <h3>Services</h3>
      <h4>Home <span class="bread-icon">
          <i class="fa-solid fa-arrow-right-arrow-left"></i>
        </span> Services </h4>
    </div>
  </section>
  <!-- breadcum -->
  <!-- service part start -->
  <section id="quicktech-service">
    <div class="container">
      <div class="row gapp mt-3">
        @forelse($services as $row)
        <div class="col-lg-3 col-sm-6">
          <div class="quicktech-service-img text-center animated-section">
            <img src="{{ asset($row->image) }}" class="w-100" alt="">
            <h3>{{ $row->name }}</h3>
            <a class="quicktech-view-more-btn" href="servicedetails.html">View More</a>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </section>
  <!-- service part end -->
@endsection
