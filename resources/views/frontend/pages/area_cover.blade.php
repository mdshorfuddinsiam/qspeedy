@extends('frontend.layouts.master')
@section('title')
  Area We Cover
@endsection

@section('content')
  <!-- bbreadcum -->
  <section id="quicktech-bread">
    <div class="quicktech-breadcum text-center">
      <h3>{{ $area->name }}</h3>
      <h4>Home <span class="bread-icon">
          <i class="fa-solid fa-arrow-right-arrow-left"></i>
        </span> {{ $area->name }} </h4>
    </div>
  </section>
  <!-- breadcum -->
  <!-- areas part start -->
  <section id="quicktech-areas">
    <div class="container">
      <div class="row gapp">
        <div class="col-lg-6">
          <div class="quicktech-areas-img animated-section">
            <img src="{{ asset($area->image) }}" class="w-100" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="quicktech-areas-details animated-section">
            <h4>{{ $area->title }}</h4>
            <p>{!! $area->address !!}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- areas part end -->
  <!-- map -->
  <section id="quicktech-map">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="quicktech-see-map animated-section text-center">
            <a href="{{ $area->map_link }}" target="_blank">See Map</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- map -->
@endsection
