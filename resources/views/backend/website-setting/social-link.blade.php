@extends('backend.layouts.admin_master')
@section('title')
	Social Link Update
@endsection

@section('toolbar')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
  <!--begin::Toolbar container-->
  <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
      <!--begin::Title-->
      <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Social Links</h1>
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
        <li class="breadcrumb-item text-muted">Social Links</li>
        <!--end::Item-->
      </ul>
      <!--end::Breadcrumb-->
    </div>
  </div>
  <!--end::Toolbar container-->
</div>
@endsection

@section('content')
	<div class="card shadow-sm">
	    <div class="card-body">

	    	{{-- @if ($errors->any())
	    	    <div class="alert alert-danger">
	    	        <ul>
	    	            @foreach ($errors->all() as $error)
	    	                <li>{{ $error }}</li>
	    	            @endforeach
	    	        </ul>
	    	    </div>
	    	@endif --}}

	    	<form action="{{ route('admin.sociallink.update', ['sociallink' => $sociallink->id]) }}" method="POST" >
	    		@csrf
	    		@method('PUT')



	    		<!--begin::Input group-->
	    		<div class="fv-row mb-7">
	    		  <!--begin::Label-->
	    		  <label class=" fw-semibold fs-6 mb-2">Facebook Link</label>
	    		  <!--end::Label-->
	    		  <!--begin::Input-->
	    		  <input type="url" name="link_one" class="form-control form-control-solid mb-3 mb-lg-0 @error('link_one') is-invalid @enderror" placeholder="Facebook Link" value="{{ old('link_one') ?? $sociallink->link_one }}" />
	    		  <!--end::Input-->
	    		  @error('link_one')
	    		      <span class="invalid-feedback" role="alert">
	    		          <strong>{{ $message }}</strong>
	    		      </span>
	    		  @enderror
	    		</div>
	    		<!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">Instagram Link</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="url" name="link_two" class="form-control form-control-solid mb-3 mb-lg-0 @error('link_two') is-invalid @enderror" placeholder="Instagram Link" value="{{ old('link_two') ?? $sociallink->link_two }}" />
                  <!--end::Input-->
                  @error('link_two')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <!--end::Input group-->

	    		<!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">Tiktok</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="url" name="link_three" class="form-control form-control-solid mb-3 mb-lg-0 @error('link_three') is-invalid @enderror" placeholder="Tiktok" value="{{ old('link_three') ?? $sociallink->link_three }}" />
                  <!--end::Input-->
                  @error('link_three')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">Whatsapp Link</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="url" name="link_four" class="form-control form-control-solid mb-3 mb-lg-0 @error('link_four') is-invalid @enderror" placeholder="Whatsapp Link" value="{{ old('link_four') ?? $sociallink->link_four }}" />
                  <!--end::Input-->
                  @error('link_four')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">Youtube Link</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="url" name="link_five" class="form-control form-control-solid mb-3 mb-lg-0 @error('link_five') is-invalid @enderror" placeholder="Youtube Link" value="{{ old('link_five') ?? $sociallink->link_five }}" />
                  <!--end::Input-->
                  @error('link_five')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">LinkedIn Link</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="url" name="link_six" class="form-control form-control-solid mb-3 mb-lg-0 @error('link_six') is-invalid @enderror" placeholder="LinkedIn Link" value="{{ old('link_six') ?? $sociallink->link_six }}" />
                  <!--end::Input-->
                  @error('link_six')
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
@endsection
