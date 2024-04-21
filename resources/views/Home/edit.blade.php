@extends('layouts.dashboard')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Home.update', $Home->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
    
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">DELICIOUS FOOD </label>
        <div class="position-relative">
            <textarea cols="30" rows="5" name="DELICIOUS_FOOD" class="form-control py-3 @error('DELICIOUS_FOOD') is-invalid @enderror"
                id="DELICIOUS_FOOD" placeholder="Notes" required>{{ old('DELICIOUS_FOOD', $Home->DELICIOUS_FOOD) }}
            </textarea>
        </div>
        @error('DELICIOUS_FOOD')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
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
            <label class="label">File Upload photo Global</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-photo_Global" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-photo_Global" name="photo_Global"
                        class="@error('photo_Global') is-invalid @enderror">

                </div>
                @error('photo_Global')
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
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">title1</label>
        <div class="position-relative">
            <input type="text" name="title1" class="form-control h-58 @error('title1') is-invalid @enderror"
                id="validationCustom11" value="{{ old('title1', $Home->title1) }}" required>

        </div>
        @error('title1')
            <div class="text-danger">{{ $message }}</div>
        @enderror
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
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">title2</label>
        <div class="position-relative">
            <input type="text" name="title2" class="form-control h-58 @error('title2') is-invalid @enderror"
                id="validationCustom11" value="{{ old('title2', $Home->title2) }}" required>

        </div>
        @error('title2')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">TODAY_SPECIAL_OFFER </label>
        <div class="position-relative">
            <textarea cols="30" rows="5" name="TODAY_SPECIAL_OFFER" class="form-control py-3 @error('TODAY_SPECIAL_OFFER') is-invalid @enderror"
                id="TODAY_SPECIAL_OFFER" placeholder="Notes" required>{{ old('TODAY_SPECIAL_OFFER', $Home->TODAY_SPECIAL_OFFER) }}</textarea>

        </div>
        @error('TODAY_SPECIAL_OFFER')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload banner TODAY</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-banner_TODAY" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-banner_TODAY" name="banner_TODAY"
                        class="@error('banner_TODAY') is-invalid @enderror">

                </div>
                @error('banner_TODAY')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo 1</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-photo1" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-photo1" name="photo1"
                        class="@error('photo1') is-invalid @enderror">

                </div>
                @error('photo1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    
   
   
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">text Download</label>
        <div class="position-relative">
            <textarea cols="30" rows="5" name="Download" class="form-control py-3 @error('Download') is-invalid @enderror"
                id="Download" placeholder="Notes" required>{{ old('Download', $Home->Download) }}</textarea>

        </div>
        @error('Download')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
 
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo Download </label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-photo_Download1" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-photo_Download1" name="photo_Download1"
                        class="@error('photo_Download1') is-invalid @enderror">

                </div>
                @error('photo_Download1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">url video</label>
        <div class="position-relative">
            <input type="url" name="url_video" class="form-control h-58 @error('url_video') is-invalid @enderror"
                id="validationCustom11" value="{{ old('url_video', $Home->url_video) }}" required>

        </div>
        @error('url_video')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload banner testimonials</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-banner_testimonials" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-banner_testimonials" name="banner_testimonials"
                        class="@error('banner_testimonials') is-invalid @enderror">

                </div>
                @error('banner_testimonials')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
    </div>
</form>
<br>
<br>

<script>
    $('#DELICIOUS_FOOD').summernote({
        placeholder: 'DELICIOUS FOOD',
        tabsize: 2,
        height: 100
    });
    $('#TODAY_SPECIAL_OFFER').summernote({
        placeholder: 'TODAY SPECIAL OFFER',
        tabsize: 2,
        height: 100
    });
    $('#Download').summernote({
        placeholder: 'text Download',
        tabsize: 2,
        height: 100
    });
    
</script>
@endsection