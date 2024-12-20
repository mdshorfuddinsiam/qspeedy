@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - Contact Page
@endsection

@section('content')
	<section class="py-5">
	  <div class="content">
	    <h2 style="color: #a18c7d" class="section-header">Let's Talk</h2>
	    <div class="section-header-underline"></div>
	    <div class="container">
	      <div class="row">
	        <div class="col-md-6"> {!! $generalsetting->contact_description !!} <h3 class="pt-5">
	            <strong>{{ $generalsetting->website_name }}</strong>
	          </h3>
	          <p> Tel: {{ $generalsetting->phone }} <br> Email: {{ $generalsetting->email }}{{ ', '.$generalsetting->email_two ?? '' }} </p>
	        </div>
	        <!-- Col -->
	        <div class="col-md-6">
	          	<form action="{{ route('contacts.store') }}" method="POST">
	          	  @csrf

	          	  <div class="row">
	          		<div class="mb-3 col-md-6">
	          		  <label for="name" class="form-label">Name</label>
	          		  <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-describedby="helpId" />
	          		</div>
	          		<div class="mb-3 col-md-6">
	          		  <label for="email" class="form-label">Email</label>
	          		  <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId" />
	          		</div>
	          		<div class="mb-3 col-md-12">
	          		  <label for="phone" class="form-label">Phone</label>
	          		  <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" aria-describedby="helpId" />
	          		</div>
	          		<div class="mb-3">
	          		  <label for="message" class="form-label">Message</label>
	          		  <textarea class="form-control" name="message" id="message" rows="3"></textarea>
	          		</div>
	          		<div class="mb-3 col-md-12">
	          		  <input type="submit" class="btn btn-secondary" value="Send" />
	          		</div>
	          		<!-- COl -->
	          	  </div>
	          	</form>
	        </div>
	      </div>
	    </div>
	</section>
@endsection
