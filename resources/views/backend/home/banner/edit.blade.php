@extends('backend.layouts.admin_master')
@section('title')
	Banner Edit
@endsection

@section('toolbar')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
  <!--begin::Toolbar container-->
  <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
      <!--begin::Title-->
      <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Banner Edit</h1>
      <!--end::Title-->
      <!--begin::Breadcrumb-->
      <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
          <a href="{{ route('admin.home') }}" class="text-muted text-hover-primary">Home</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
          <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">Banner</li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
          <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">Edit</li>
        <!--end::Item-->
      </ul>
      <!--end::Breadcrumb-->
    </div>
  </div>
  <!--end::Toolbar container-->
</div>
@endsection

@section('content')
	@include('backend.common.ckeditor-css')
	<div class="card shadow-sm">
	    <div class="card-header">
	        <h3 class="card-title">Banner Edit</h3>
	        <div class="card-toolbar">
	            <a href="{{ route('admin.banners.index') }}" class="btn btn-sm btn-light">
	                <i class="fas fa-list"></i> Banner Lists
	            </a>
	        </div>
	    </div>
	    <div class="card-body">

	    	@if ($errors->any())
	    	    <div class="alert alert-danger">
	    	        <ul>
	    	            @foreach ($errors->all() as $error)
	    	                <li>{{ $error }}</li>
	    	            @endforeach
	    	        </ul>
	    	    </div>
	    	@endif

	    	{{-- <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data"> --}}
	    	<form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
	    		@csrf
	    		@method('PUT')


                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fw-semibold fs-6 mb-2">Upload Video (max: 40MB)</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="file" name="video" id="video" class="form-control form-control-solid mb-3 mb-lg-0 @error('video') is-invalid @enderror" accept="video/*" onchange="previewVideo(event)">
                    <!--end::Input-->
                    @error('video')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Video Preview-->
                <div class="fv-row mb-7">
                    <video id="video_preview" controls style="max-width: 100%; {{ isset($banner->video) ? 'display: block;' : 'display: none;' }}">
                        @if(isset($banner->video))
                            <source src="{{ asset($banner->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        @endif
                    </video>
                </div>
                <!--end::Video Preview-->

	    		<!--begin::Input group-->
	    		<div class="fv-row mb-7">
	    		  <!--begin::Label-->
	    		  <label class="fw-semibold fs-6 mb-2">Status</label>
	    		  <!--end::Label-->
	    		  <select name="status" class="form-select form-select-solid @error('status') is-invalid @enderror" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
	    		      <option></option>
	    		      <option {{ old('status', $banner->status) == "1" ? 'selected' : '' }} value="1">Active</option>
	    		      <option {{ old('status', $banner->status) == "0" ? 'selected' : '' }} value="0">Inactive</option>
	    		  </select>
	    		  @error('status')
	    		      <span class="invalid-feedback" role="alert">
	    		          <strong>{{ $message }}</strong>
	    		      </span>
	    		  @enderror
	    		</div>
	    		<!--end::Input group-->


	    		<div class="fv-row mb-7">
	    			<input type="submit" class="btn btn-light-primary mt-5" value="Update">
	    		</div>

	    	</form>
	    </div>
	</div>
@endsection

@section('admin_js')
	<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
	@include('backend.common.ckeditor-script', ['name' => 'description'])

    <script>
        function previewVideo(event) {
            var preview = document.getElementById('video_preview');
            var file = document.getElementById('video').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
                preview.style.display = 'block';  // Ensure the preview is visible
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
                preview.style.display = 'none';  // Hide the preview if no file is selected
            }
        }
    </script>
@endsection
