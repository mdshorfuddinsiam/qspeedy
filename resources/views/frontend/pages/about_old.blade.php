@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - About Page
@endsection

@section('content')
	<section class="py-5">
	  <div class="content">
	    <h2 style="color: #a18c7d" class="section-header">About Us</h2>
	    <div class="section-header-underline"></div>
	  </div>
	  <div class="row gx-0 justify-content-center align-items-center" style="background-color: #edd9cb;">
	    <div class="col-md-6">
	      <h4 class="text-end px-5 py-3">
	        <strong>{{ $about->title_one }} </strong>
	      </h4>
	      {{-- {!! $about->description_one !!} --}}
	      <div class="text-end px-5" style="font-size: 18px;">
	      	{!! $about->description_one !!}
	      </div>
	    </div>
	    <div class="col-md-6">
	      <img src="{{ $about->image }}" class="responsive-image" style="width: 100%;" />
	    </div>
	  </div>
	</section>

	<section class="py-5 mb-5" style="background: url('{{ asset($about->bg_image) }}'); height: 400px;width: 100%;">
	  <div class="container">
	    <div class="row justify-content-end align-items-center">
	      <div class="col-md-6">
	        <h4>
	          <strong class="text-white">{{ $about->title_two }}</strong>
	        </h4>

	        <div class="text-white"> {!! $about->description_two !!} <br>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>

	<section class="py-5" style="background: url('{{ asset($about->bg_image_two) }}'); height: 400px;width: 100%;">
	  <div class="container">
	    <div class="row justify-content-end align-items-center">
	      <div class="col-md-6">
	        <h4 class="text-end">
	          <strong class="text-white">{{ $about->title_three }}</strong>
	        </h4>

	        <div class="text-white text-end"> {!! $about->description_three !!} <br>
	        </div>
	      </div>
	      <div class="col-md-6"></div>
	    </div>
	  </div>
	</section>

	<section class="py-5">
	  <div class="container">
	    <div class="content text-center">
	      <h2 class="section-header">A Sustainable Belief:</h2>
	      <div class="section-header-underline"></div>
	    </div>
	    <div class="row justify-content-center align-items-center py-5">
	      @forelse($believes as $row)
	      <div class="col-md-4 text-center mb-4" style="position: relative;">
	        <img src="{{ asset($row->image) }}" class="belief-image" alt="{{ $row->title }}" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#believeModal-{{ $row->id }}" />
	        <div class="overlay" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#believeModal-{{ $row->id }}">
	          <div class="overlay-content">
	            <p class="text-white text-center" data-bs-toggle="modal" data-bs-target="#believeModal-{{ $row->id }}">{{ $row->title }}</p>
	          </div>
	        </div>
	      </div>
	      <!-- Modal -->
	      <div class="modal fade" id="believeModal-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="believeLebel" aria-hidden="true">
	          <div class="modal-dialog modal-lg">
	              <div class="modal-content">
	                  <div class="modal-header">
	                      <h5 class="modal-title" id="believeLebel"> {{ $row->title }} </h5>
	                      <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>
	                  </div>
	                  <div class="modal-body">
	                      <div class="row">
	                          <div class="col-md-5">
	                              <img src="{{ asset($row->image) }}" width="100%" height="250px" />
	                          </div>
	                          <div class="col-md-7">
	                              <p style="text-align: justify;">
	                                  {{ $row->description }}
	                              </p>
	                              {{-- <span class="px-3 fs-5"><i class="fab fa-facebook"></i> </span>
	                              <span class="px-3 fs-5"><i class="fab fa-twitter"></i> </span>
	                              <span class="px-3 fs-5"><i class="fab fa-instagram-square"></i> </span> --}}
	                          </div>
	                      </div>
	                  </div>
	              </div>
	          </div>
	      </div> <!-- Modal Ended -->
	      @empty
	      <div class="col-12 text-center">
	        <p>No beliefs found.</p>
	      </div>
	      @endforelse
	    </div>
	  </div>
	</section>

	{{-- <section class="py-5 bg-light"> --}}
	{{-- <section class="py-5 bg-light" style="background: url('{{ asset($about->bg_image_two) }}'); height: 400px;width: 100%;"> --}}
	<section class="py-5 bg-light" style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('{{ asset($about->bg_image_three) }}'); width: 100%; ">
	  <div class="container">
	    <div class="content">
	      <h2 class="section-header text-white">Our Values</h2>
	      <div class="section-header-underline" style="background-color: white;"></div>
	    </div>
	    <div class="row justify-content-center align-items-center">
	      <div class="col-md-8">
	        <div class="py-5 px-5 text-white"> {!! $about->description_four !!}
	        </div>
	      </div>
	    </div>
	  </div>
	  </div>
	</section>
@endsection
