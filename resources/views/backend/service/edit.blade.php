@extends('backend.layouts.admin_master')
@section('title')
	Service Edit
@endsection

@section('toolbar')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
  <!--begin::Toolbar container-->
  <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
      <!--begin::Title-->
      <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Service Edit</h1>
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
        <li class="breadcrumb-item text-muted">Service</li>
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
	        <h3 class="card-title">Service Edit</h3>
	        <div class="card-toolbar">
	            <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-light">
	                <i class="fas fa-list"></i> Service Lists
	            </a>
	        </div>
	    </div>
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

	    	<form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
	    		@csrf
	    		@method('PUT')

	    		<!--begin::Input group-->
	    		<div class="fv-row mb-7">
	    		  <!--begin::Label-->
	    		  <label class=" d-block fw-semibold fs-6 mb-5">Image (Optional)</label>
	    		  <!--end::Label-->
	    		  <!--begin::Image placeholder-->
	    		  <style>
	    		    .image-input-placeholder {
	    		      background-image: url('{{ asset('backend') }}/assets/media/svg/files/blank-image.svg');
	    		    }

	    		    [data-theme="dark"] .image-input-placeholder {
	    		      background-image: url('{{ asset('backend') }}/assets/media/svg/files/blank-image-dark.svg');
	    		    }
	    		  </style>
	    		  <!--end::Image placeholder-->
	    		  <!--begin::Image input-->
	    		  <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
	    		    <!--begin::Preview existing avatar-->
	    		    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $service->image ? asset($service->image) : asset('/uploads/no_image.jpg') }});"></div>
	    		    <!--end::Preview existing avatar-->
	    		    <!--begin::Label-->
	    		    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow " data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
	    		      <i class="bi bi-pencil-fill fs-7"></i>
	    		      <!--begin::Inputs-->
	    		      <input type="file" name="image" accept=".webp, .png, .jpg, .jpeg" value="{{ old('image') }}" />
	    		      {{-- <input type="hidden" name="avatar_remove" /> --}}
	    		      <!--end::Inputs-->
	    		    </label>
	    		    <!--end::Label-->
	    		    <!--begin::Cancel-->
	    		    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
	    		      <i class="bi bi-x fs-2"></i>
	    		    </span>
	    		    <!--end::Cancel-->
	    		    <!--begin::Remove-->
	    		    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
	    		      <i class="bi bi-x fs-2"></i>
	    		    </span>
	    		    <!--end::Remove-->
	    		  </div>
	    		  <!--end::Image input-->
	    		  <!--begin::Hint-->
	    		  <div class="form-text">Allowed file types: webp, png, jpg, jpeg.</div>
	    		  <!--end::Hint-->
	    		  @if($errors->has('image'))
	    		      <span class="error text-danger" role="alert">
	    		      	<strong>{{ $errors->first('image') }}</strong>
	    		      </span>
	    		  @endif
	    		</div>
	    		<!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="d-block fw-semibold fs-6 mb-5">Multiple Images (Optional)</label>
                    <!--end::Label-->

                    <!--begin::Image input-->
                    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                        <!-- Placeholder for new images -->
                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('/uploads/no_image.jpg') }});"></div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add new images">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <input type="file" name="multi_images[]" accept=".webp, .png, .jpg, .jpeg" multiple />
                        </label>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                    </div>
                    <!--end::Image input-->

                    <!--begin::Hint-->
                    <div class="form-text">Allowed file types: webp, png, jpg, jpeg. (Optional)</div>
                    <!--end::Hint-->

                    <!--begin::Error handling-->
                    @if($errors->has('multi_images'))
                        <span class="error text-danger" role="alert">
                            <strong>{{ $errors->first('multi_images') }}</strong>
                        </span>
                    @endif

                    @if($errors->has('multi_images.*'))
                        @foreach ($errors->get('multi_images.*') as $error)
                            <span class="error text-danger" role="alert">
                                <strong>{{ $error[0] }}</strong>
                            </span>
                        @endforeach
                    @endif
                    <!--end::Error handling-->
                </div>
                <!--end::Input group-->


	    		<!--begin::Input group-->
	    		<div class="fv-row mb-7">
	    		  <!--begin::Label-->
	    		  <label class="required fw-semibold fs-6 mb-2">Name</label>
	    		  <!--end::Label-->
	    		  <!--begin::Input-->
	    		  <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" placeholder="name" value="{{ old('name') ?? $service->name }}" />
	    		  <!--end::Input-->
	    		  @error('name')
	    		      <span class="invalid-feedback" role="alert">
	    		          <strong>{{ $message }}</strong>
	    		      </span>
	    		  @enderror
	    		</div>
	    		<!--end::Input group-->

	    		<!--begin::Input group-->
	    		<div class="fv-row mb-7">
	    		  <!--begin::Label-->
	    		  <label class="required fw-semibold fs-6 mb-2"> Description Top</label>
	    		  <!--end::Label-->
	    		  <!--begin::Input-->
	    		  <textarea name="description_top" id="description_top" cols="30" class="form-control form-control-solid mb-3 mb-lg-0 @error('description_top') is-invalid @enderror" rows="5" placeholder="Description Top">{{ old('description_top') ?? $service->description_top }}</textarea>
	    		  <!--end::Input-->
	    		  @error('description_top')
	    		      <span class="invalid-feedback" role="alert">
	    		          <strong>{{ $message }}</strong>
	    		      </span>
	    		  @enderror
	    		</div>
	    		<!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class="required fw-semibold fs-6 mb-2"> Description Bottom</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <textarea name="description_bottom" id="description_bottom" cols="30" class="form-control form-control-solid mb-3 mb-lg-0 @error('description_bottom') is-invalid @enderror" rows="5" placeholder="Description Bottom">{{ old('description_bottom') ?? $service->description_bottom }}</textarea>
                  <!--end::Input-->
                  @error('description_bottom')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <!--end::Input group-->



	    		<!--begin::Input group-->
	    		<div class="fv-row mb-7">
	    		  <!--begin::Label-->
	    		  <label class="fw-semibold fs-6 mb-2">Status</label>
	    		  <!--end::Label-->
	    		  <select name="status" class="form-select form-select-solid @error('status') is-invalid @enderror" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
	    		      <option></option>
	    		      <option {{ old('status', $service->status) == "1" ? 'selected' : '' }} value="1">Active</option>
	    		      <option {{ old('status', $service->status) == "0" ? 'selected' : '' }} value="0">Inactive</option>
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

    <!--begin::Card-->
    <div class="card mt-3">
      <!--begin::Card header-->
      <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <h4>Service Image Lists</h4>
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            {{-- <a href="{{ route('admin.services.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Service Create</a> --}}
        </div>
        <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <hr style="color: #ddd">
      <!--begin::Card body-->
      <div class="card-body py-4">

        <table id="kt_datatable_dom_positioning" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800 px-7">
                    <th>SL NO.</th>
                    <th>Image</th>
                    <th>Service</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($service->serviceimages as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset($row->multi_image) }}" width="80" alt="">
                    </td>
                    <td>{{ $row->service->name }}</td>
                    <td>
                        <a href="{{ route('admin.serviceimage.delete', ['service' => $service->id, 'serviceimage' => $row->id]) }}" class="btn btn-sm btn-danger delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

      </div>
      <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection

@section('admin_js')
	<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
	{{-- @include('backend.common.ckeditor-script', ['name' => 'description']) --}}
    @include('backend.common.multiple_ckeditor_script', ['ckeditor_two' => 'description_top', 'ckeditor_three' => 'description_bottom'])

    <script>
        $('.delete').on('click', function (e) {
           e.preventDefault();
           var link = $(this).attr('href');
           // alert(link);

           Swal.fire({
                // html: `A SweetAlert content with <strong>bold text</strong>, <a href="#">links</a>
                //      or any of our available <span class="badge badge-primary">components</span>`,
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "info",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Ok, got it!",
                cancelButtonText: 'Nope, cancel it',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
               if (result.isConfirmed) {
                   Swal.fire({
                     title: "Deleted!",
                     text: "Your file has been deleted.",
                     icon: "success"
                   });
                   window.location = link;
               }
           })
       });
    </script>
@endsection
