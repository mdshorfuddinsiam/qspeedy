@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - Contact Page
@endsection

@section('content')
	<div class="container">
	  {{-- <div class="">
	    <div class="px-3 d-inline-block text-start">All Posts</div>
	    <div class="px-3 d-inline-block text-start">Manhal Crafts</div>
	    <form action="" class="px-3 d-inline-block d-flex justify-content-end">
	      <div class="mb-3">
	        <input type="text" name="" id="" class="form-control" style="border: none; border-radius: 0; border-bottom: 1px solid rgb(0,0,0,0.1);" placeholder="Search" aria-describedby="helpId" />
	      </div>
	    </form>
	  </div> --}}
	  <div class="container section-to-remove-styles">
	    <div class="py-3">
	      <div class="row no-gutters justify-content-center align-items-center">
	        <div class="col-md-10">
	          <div class="card px-5 py-5">
	            <div class="profile px-3 py-3 align-items-center">
	              <div class="image d-inline-block">
	                <img src="{{ asset($generalsetting->site_logo) }}" style="border-radius: 50%; height: 50px; width: 50px;" </div>
	                <div class="text d-inline-block align-middle ps-2">
	                  <h6>
	                    <strong>{{ $generalsetting->website_name }}</strong>
	                    <br>
	                    <span style="font-size: 12px">{{ $blog->updated_at->format('F j, Y g:i A') }}</span>
	                  </h6>
	                </div>
	              </div>
	              <!--Profile-->
	              <h2 class=" pt-3">
	                <!-- Post Title -->
	                <strong>{{ $blog->title }}</strong>
	              </h2>
	              <img class="blog-image mb-5" src="{{ asset($blog->image) }}" width="100%" />
	              {{-- <img class="blog-image zoom mb-5" src="{{ asset($blog->image) }}" width="100%" /> --}}
	              {!! $blog->long_description !!}
	              <hr>

	              {{-- <span class="px-3 fs-5">
	                <i class="fab fa-facebook"></i>
	              </span>
	              <span class="px-3 fs-5">
	                <i class="fab fa-twitter"></i>
	              </span>
	              <span class="px-3 fs-5">
	                <i class="fab fa-instagram-square"></i>
	              </span> --}}

	              <div id="social-links">
	              	<ul>
	              		{!! Share::page(url()->current(), $blog->title)
	                      ->facebook()
	                      ->twitter()
	                      ->linkedin()
	                      ->whatsapp()
	                      ->telegram()
	                  !!}
	              	</ul>
	              </div>

	              <hr>
	              <div class="d-inline-block">{{ $blog->view_count }} Views</div>
	              <div class="d-inline-block px-5">0 Comments</div>
	            </div>
	          </div>
	          <!-- Card Ended -->

	          {{-- Start: Recent Post --}}
	          <div class="recent-post py-3">
	            <!--Recent Posts-->
	            <div class="row">
	          	  @forelse($blogs as $row)
	              <div class="col-md-4">
	                <div class="card">
	                  <img src="{{ asset($row->image) }}" height="200px" width="100%" />
	                  <h5 class="text-truncate px-2 py-2">
	                    <strong><a href="{{ route('blog.details', ['blog'=> $row->id]) }}">{{ $row->title }}</a></strong>
	                  </h5>
	                  <hr>
	                  <div class="px-2 pb-2">
	                    <div class="d-inline-block">
	                      <i class="far fa-eye"></i> {{ $row->view_count }}
	                    </div>
	                    <div class="d-inline-block px-5">
	                      {{-- <i class="fas fa-envelope-open-text"></i> 0 --}}
	                    </div>
	                  </div>
	                </div>
	              </div>
		          @empty
		          @endforelse
	            </div>
	          </div>
	          {{-- End: Recent Post --}}

	        </div>
	      </div>
	    </div>
	  </div>
	</div>
@endsection