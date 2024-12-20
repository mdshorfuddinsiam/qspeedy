@extends('frontend.layouts.master')
@section('title')
  About
@endsection

@section('content')
    <!-- bbreadcum -->
    <section id="quicktech-bread">
        <div class="quicktech-breadcum text-center">
            <h3>About us</h3>
            <h4>Home <span class="bread-icon"><i class="fa-solid fa-arrow-right-arrow-left"></i></span> About</h4>
        </div>
    </section>
    <!-- breadcum -->

    <!-- about -->
    <section id="quikctech-about">
      <div class="container">
        <div class="row gapp">
          <div class="col-lg-6 mt-5 order-lg-1 order-2">
            <div class="quicktech-about-img">
              <img src="{{ asset($about->image) }}" class="w-100" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 order-1">
            <div class="quicktech-about-text text-end">
              <h4>{{ $about->title }}</h4>
              <h3>{{ $about->subtitle_about }}</h3>
              {!! $about->description !!}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about -->
@endsection
