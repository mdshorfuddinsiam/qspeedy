@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - Products Page
@endsection

@section('content')
	<div class="container">
	  <section class="py-5">
	    <div class="content">
	      <h2 class="section-header">@if($data == 'category') Category @elseif($data == 'material') Material @elseif($data == 'search') Search @endif Products</h2>
	      <div class="section-header-underline"></div>
	    </div>
	    @if($data == 'category')
	    <p class="text-center">{{ $category->description }}</p>
	    @elseif($data == 'material')
	    <p class="text-center">{{ $material->description }}</p>
	    @elseif($data == 'search')
	    @endif

	    <div class="row">

	      {{-- @if($data == 'category')
	      @forelse($category->products as $row)
	      @elseif($data == 'material')
	      @forelse($material->products as $row)
	      @endif --}}
	      @if($data == 'category')
	      	@forelse($category->products as $row)
	      	<div class="col-md-4 me mt-4 hover-shadow" style="position: relative;">
	      	  <img data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $row->id }}" src="{{ asset($row->image) }}" class="zoom" width="100%" height="350px" />
	      	  <h6 class="text-center">
	      	    <strong>{{ $row->title }}</strong>
	      	  </h6>
	      	  <!-- Modal -->
	      	  <div class="modal fade" id="staticBackdrop-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	      	    <div class="modal-dialog modal-lg">
	      	      <div class="modal-content">
	      	        <!-- <div class="modal-header"> -->
	      	        <!-- <h5 class="modal-title" id="staticBackdropLabel">Manhal Carfts </h5> -->
	      	        <!--  -->
	      	        <!-- </div> -->
	      	        <div class="modal-body">
	      	          <div class="row no-gutters justify-content-center align-items-center">
	      	            <div class="col-md-6">
	      	              <img src="{{ asset($row->image) }}" width="100%" height="350px" />
	      	            </div>
	      	            <div class="col-md-6">
	      	              <button type="button" class="btn float-end" data-bs-dismiss="modal" aria-label="Close">
	      	                <i class="fas fa-times-circle"></i>
	      	              </button>
	      	              <h5 class="text-uppercase">
	      	                <strong>{{ $row->title }}</strong>
	      	              </h5>
	      	              <p style="text-align: justify;" class="py-3"> {{ $row->description }} </p>
	      	              <p>Price : {{ round($row->selling_price) }} BDT</p>
	      	              <a href="{{ route('contact.page') }}">
	      	                <button class="btn btn-dark w-100">Contact Now</button>
	      	              </a>
	      	            </div>
	      	          </div>
	      	        </div>
	      	        <!-- <div class="modal-footer"> -->
	      	        <!--  -->
	      	        <!-- </div> -->
	      	      </div>
	      	    </div>
	      	  </div>
	      	  <!-- Modal Ended -->
	      	</div>
	      	<!-- Col -->
	      	@empty
	      	@endforelse
	      @elseif($data == 'material')
	     	@forelse($material->products as $row)
	     	<div class="col-md-4 me mt-4 hover-shadow" style="position: relative;">
	     	  <img data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $row->id }}" src="{{ asset($row->image) }}" class="zoom" width="100%" height="350px" />
	     	  <h6 class="text-center">
	     	    <strong>{{ $row->title }}</strong>
	     	  </h6>
	     	  <!-- Modal -->
	     	  <div class="modal fade" id="staticBackdrop-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	     	    <div class="modal-dialog modal-lg">
	     	      <div class="modal-content">
	     	        <!-- <div class="modal-header"> -->
	     	        <!-- <h5 class="modal-title" id="staticBackdropLabel">Manhal Carfts </h5> -->
	     	        <!--  -->
	     	        <!-- </div> -->
	     	        <div class="modal-body">
	     	          <div class="row no-gutters justify-content-center align-items-center">
	     	            <div class="col-md-6">
	     	              <img src="{{ asset($row->image) }}" width="100%" height="350px" />
	     	            </div>
	     	            <div class="col-md-6">
	     	              <button type="button" class="btn float-end" data-bs-dismiss="modal" aria-label="Close">
	     	                <i class="fas fa-times-circle"></i>
	     	              </button>
	     	              <h5 class="text-uppercase">
	     	                <strong>{{ $row->title }}</strong>
	     	              </h5>
	     	              <p style="text-align: justify;" class="py-3"> {{ $row->description }} </p>
	     	              <p>Price : {{ round($row->selling_price) }} BDT</p>
	     	              <a href="{{ route('contact.page') }}">
	     	                <button class="btn btn-dark w-100">Contact Now</button>
	     	              </a>
	     	            </div>
	     	          </div>
	     	        </div>
	     	        <!-- <div class="modal-footer"> -->
	     	        <!--  -->
	     	        <!-- </div> -->
	     	      </div>
	     	    </div>
	     	  </div>
	     	  <!-- Modal Ended -->
	     	</div>
	     	<!-- Col -->
	     	@empty
	     	<h2 class="text-center">Not found!</h2>	
	     	@endforelse
	      @elseif($data == 'search')
	     	@forelse($products as $row)
	     	<div class="col-md-4 me mt-4 hover-shadow" style="position: relative;">
	     	  <img data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $row->id }}" src="{{ asset($row->image) }}" class="zoom" width="100%" height="250px" />
	     	  <h6 class="text-center">
	     	    <strong>{{ $row->title }}</strong>
	     	  </h6>
	     	  <!-- Modal -->
	     	  <div class="modal fade" id="staticBackdrop-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	     	    <div class="modal-dialog modal-lg">
	     	      <div class="modal-content">
	     	        <!-- <div class="modal-header"> -->
	     	        <!-- <h5 class="modal-title" id="staticBackdropLabel">Manhal Carfts </h5> -->
	     	        <!--  -->
	     	        <!-- </div> -->
	     	        <div class="modal-body">
	     	          <div class="row no-gutters justify-content-center align-items-center">
	     	            <div class="col-md-6">
	     	              <img src="{{ asset($row->image) }}" width="100%" height="250px" />
	     	            </div>
	     	            <div class="col-md-6">
	     	              <button type="button" class="btn float-end" data-bs-dismiss="modal" aria-label="Close">
	     	                <i class="fas fa-times-circle"></i>
	     	              </button>
	     	              <h5 class="text-uppercase">
	     	                <strong>{{ $row->title }}</strong>
	     	              </h5>
	     	              <p style="text-align: justify;" class="py-3"> {{ $row->description }} </p>
	     	              <p>Price : {{ round($row->selling_price) }} BDT</p>
	     	              <a href="{{ route('contact.page') }}">
	     	                <button class="btn btn-dark w-100">Contact Now</button>
	     	              </a>
	     	            </div>
	     	          </div>
	     	        </div>
	     	        <!-- <div class="modal-footer"> -->
	     	        <!--  -->
	     	        <!-- </div> -->
	     	      </div>
	     	    </div>
	     	  </div>
	     	  <!-- Modal Ended -->
	     	</div>
	     	<!-- Col -->
	     	@empty
	     	<h2 class="text-center">Not found!</h2>	
	     	@endforelse
	      @else
      		<h2>Not found!</h2>
	      @endif

	    </div>
	    <!--Row-->
	  </section>
	</div>
@endsection