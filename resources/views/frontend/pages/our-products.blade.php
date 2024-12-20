@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - Our Products Page
@endsection

@section('content')
	<section class="py-5">
	  <div class="content">
	    <h2 class="section-header">Product By Category</h2>
	    <div class="section-header-underline"></div>
	  </div>
	  <div class="container">
	    <div class="row">

	      @forelse($categories as $row)
	      <div class="col-md-4 me" >
	        <div style="position: relative;">
	          <img class="zoom" src="{{ asset($row->image) }}" height="350px" width="100%" />
	          {{-- <div class="bottom-left">
	            <div style="background-color: #a18c7d; height: 50px; width: 150px; text-align: center; padding: 10px;">
	              <h6>
	                <strong>{{ $row->name }}</strong>
	              </h6>
	            </div>
	          </div> --}}
	        </div>
	        <h6 class="text-center pt-4"><strong>{{ $row->name }}</strong></h6>
	        <p class="text-center pb-2">{{ \Str::limit($row->description, 100) }}</p>
	        <a href="{{ route('category-wise.products', ['slug' => $row->slug, 'data' => 'category']) }}">
	            <center>
	              <button class="btn btn-dark hide-btn">View Now</button>
	            </center>
	        </a>
	      </div>
	      @empty
	      @endforelse

	    </div>
	  </div>
	</section>
	<section class="py-5">
	  <div class="content">
	    <h2 class="section-header">Product By Materials</h2>
	    <div class="section-header-underline"></div>
	  </div>
	  <div class="container">
	    <div class="row">

	      @forelse($materials as $row)
	      <div class="col-md-4 me">
	        <div style="position: relative;">
	          <img class="zoom" src="{{ asset($row->image) }}" height="350px" width="100%" />
	          {{-- <div class="bottom-left">
	            <div style="background-color: #a18c7d; height: 50px; width: 150px; text-align: center; padding: 10px;">
	              <h6>
	                <strong>{{ $row->name }}</strong>
	              </h6>
	            </div>
	          </div> --}}
	        </div>
	        <h6 class="text-center pt-4 pb-2"><strong>{{ $row->name }}</strong></h6>
	        <a href="{{ route('material-wise.products', ['slug' => $row->slug, 'data' => 'material']) }}">
	            <center>
	              <button class="btn btn-dark hide-btn ">View Now</button>
	            </center>
	        </a>
	      </div>
	      @empty
	      @endforelse

	    </div>
	  </div>
	</section>
@endsection