@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - Blog Page
@endsection

@section('content')
	<div class="container">
	  <div class="">
	  	@if($data == 'blog')
	    <div class="px-3 d-inline-block text-start">All Posts</div>
	    @elseif($data == 'search-blog')
	    <div class="px-3 d-inline-block text-start">Search Posts</div>
	    @endif

	    {{-- <div class="px-3 d-inline-block text-start">Manhal Crafts</div> --}}
	    {{-- <form action="{{ route('search.blogs') }}" class="px-3 d-inline-block d-flex justify-content-end">
	      <div class="mb-3">
	        <input type="text" name="query" id="query" class="form-control" style="border: none; border-radius: 0; border-bottom: 1px solid rgb(0,0,0,0.1);" placeholder="Search" aria-describedby="helpId" />
	      </div>
	        <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
	    </form> --}}
	    <div class="row">
	    	<div class="col-md-9"></div>
	    	<div class="col-md-3">
	    		<form class="d-flex" action="{{ route('search.blogs') }}" method="GET">
	    		    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search" style="border: none; border-radius: 0; border-bottom: 1px solid rgb(0,0,0,0.1);">
	    		    <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
	    		</form>
	    	</div>
	    </div>
	  </div>
	  <div class="container section-to-remove-styles">

	  	@if($data == 'blog')
	  		@forelse($blogs as $row)
		    <a href="{{ route('blog.details', ['blog' => $row->id]) }}">
		      <div class="py-3">
		        <div class="card">
		          <div class="row">
		            <div class="col-md-6">
		              <img class="blog-image zoom" src="{{ asset($row->image) }}" width="100%" />
		            </div>
		            <div class="col-md-6">
		              <div class="profile px-3 py-3 align-items-center">
		                <div class="image d-inline-block">
		                  <img src="{{ asset($generalsetting->site_logo) }}" style="border-radius: 50%; height: 50px; width: 50px;" </div>
		                  <div class="text d-inline-block align-middle ps-2">
		                    <h6>
		                      <strong>{{ $generalsetting->website_name }}</strong>
		                      <br>
		                      <span style="font-size: 12px">{{ $row->updated_at->format(' F j, Y g:i A') }}</span>
		                    </h6>
		                  </div>
		                </div>
		                <!--Profile-->
		                <h4 class=" pt-3">
		                  <strong>{{ $row->title }}</strong>
		                </h4>
		                <p class="text-justify"> {{ $row->short_description }} </p>
		                <hr>
		                <div class="d-inline-block">{{ $row->view_count }} Views</div>
		                {{-- <div class="d-inline-block px-5">0 Comments</div> --}}
		              </div>
		            </div>
		          </div>
		        </div>
		    </a>
		    @empty
		    <h2>Not found!</h2>
		    @endforelse
	  	@elseif($data == 'search-blog')
	  		@forelse($searchBlogs as $row)
		    <a href="{{ route('blog.details', ['blog' => $row->id]) }}">
		      <div class="py-3">
		        <div class="card">
		          <div class="row">
		            <div class="col-md-6">
		              <img class="blog-image zoom" src="{{ asset($row->image) }}" width="100%" />
		            </div>
		            <div class="col-md-6">
		              <div class="profile px-3 py-3 align-items-center">
		                <div class="image d-inline-block">
		                  <img src="{{ asset($generalsetting->site_logo) }}" style="border-radius: 50%; height: 50px; width: 50px;" </div>
		                  <div class="text d-inline-block align-middle ps-2">
		                    <h6>
		                      <strong>{{ $generalsetting->website_name }}</strong>
		                      <br>
		                      <span style="font-size: 12px">{{ $row->updated_at->format(' F j, Y g:i A') }}</span>
		                    </h6>
		                  </div>
		                </div>
		                <!--Profile-->
		                <h4 class=" pt-3">
		                  <strong>{{ $row->title }}</strong>
		                </h4>
		                <p class="text-justify"> {{ $row->short_description }} </p>
		                <hr>
		                <div class="d-inline-block">189 Views</div>
		                {{-- <div class="d-inline-block px-5">0 Comments</div> --}}
		              </div>
		            </div>
		          </div>
		        </div>
		    </a>
		    @empty
		    <h2>Not result found!</h2>
		    @endforelse
        @else
  		  <h2>Not found!</h2>
        @endif

	  </div>
	</div>
@endsection