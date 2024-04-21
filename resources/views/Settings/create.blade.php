@extends('layouts.dashboard')
@section('content')
<form class="row g-3 needs-validation" action="{{ route('Settings.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload banner Global</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-Global" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-Global" name="banner_Global"
                        class="@error('banner_Global') is-invalid @enderror">

                </div>
                @error('banner_Global')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo logo</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-photo_logo" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-photo_logo" name="logo"
                        class="@error('logo') is-invalid @enderror">

                </div>
                @error('logo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload banner1</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-banner1" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-banner1" name="banner1"
                        class="@error('banner1') is-invalid @enderror">

                </div>
                @error('banner1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload banner2</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-banner2" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-banner2" name="banner2"
                        class="@error('banner2') is-invalid @enderror">

                </div>
                @error('banner2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
  

    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload Sign In photo</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-Sign_In_photo" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-Sign_In_photo" name="Sign_In_photo"
                        class="@error('Sign_In_photo') is-invalid @enderror">

                </div>
                @error('Sign_In_photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload Sign Up photo</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-Sign_Up_photo" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-Sign_Up_photo" name="Sign_Up_photo"
                        class="@error('Sign_Up_photo') is-invalid @enderror">

                </div>
                @error('Sign_Up_photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
   
   
   
  
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">New Recipes </label>
        <div class="position-relative">
            <textarea cols="30" rows="5" name="New_Recipes" class="form-control py-3 @error('New_Recipes') is-invalid @enderror"
                id="New_Recipes" placeholder="Notes" required>{{ old('New_Recipes') }}</textarea>

        </div>
        @error('New_Recipes')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
    <div class="col-12">
        <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
    </div>
</form>
<br>
<br>

<script>
   
    $('#New_Recipes').summernote({
        placeholder: 'New Recipes',
        tabsize: 2,
        height: 100
    });
   
    
</script>
@endsection