@extends('layouts.dashboard')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('about.update', $about->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
          
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">ABOUT US </label>
        <div class="position-relative">
            <textarea cols="30" rows="5" name="ABOUT_US" class="form-control py-3 @error('ABOUT_US') is-invalid @enderror"
                id="ABOUT_US" placeholder="Notes" required>{{ old('ABOUT_US', $about->ABOUT_US) }}</textarea>

        </div>
        @error('ABOUT_US')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">WHY CHOOSE US </label>
        <div class="position-relative">
            <textarea cols="30" rows="5" name="WHY_CHOOSE_US" class="form-control py-3 @error('WHY_CHOOSE_US') is-invalid @enderror"
                id="WHY_CHOOSE_US" placeholder="Notes" required>{{ old('WHY_CHOOSE_US', $about->WHY_CHOOSE_US) }}</textarea>

        </div>
        @error('WHY_CHOOSE_US')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="validationCustom11" class="form-label label">QUALITY CHEFS</label>
        <div class="position-relative">
            <input type="text" name="QUALITY_CHEFS" class="form-control h-58 @error('QUALITY_CHEFS') is-invalid @enderror"
                id="validationCustom11" value="{{ old('QUALITY_CHEFS', $about->QUALITY_CHEFS) }}" required>

        </div>
        @error('QUALITY_CHEFS')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="validationCustom11" class="form-label label">SUPER FAST DELIVERY</label>
        <div class="position-relative">
            <input type="text" name="SUPER_FAST_DELIVERY" class="form-control h-58 @error('SUPER_FAST_DELIVERY') is-invalid @enderror"
                id="validationCustom11" value="{{ old('SUPER_FAST_DELIVERY', $about->SUPER_FAST_DELIVERY) }}" required>

        </div>
        @error('SUPER_FAST_DELIVERY')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="validationCustom11" class="form-label label">TABLE RESERVATION</label>
        <div class="position-relative">
            <input type="text" name="TABLE_RESERVATION" class="form-control h-58 @error('TABLE_RESERVATION') is-invalid @enderror"
                id="validationCustom11" value="{{ old('TABLE_RESERVATION', $about->TABLE_RESERVATION) }}" required>

        </div>
        @error('TABLE_RESERVATION')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="validationCustom11" class="form-label label">ONLINE ORDER</label>
        <div class="position-relative">
            <input type="text" name="ONLINE_ORDER" class="form-control h-58 @error('ONLINE_ORDER') is-invalid @enderror"
                id="validationCustom11" value="{{ old('ONLINE_ORDER', $about->ONLINE_ORDER) }}" required>

        </div>
        @error('ONLINE_ORDER')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom18" class="form-label label">menu</label>
        <div class="position-relative">
            <textarea cols="30" rows="5" name="menu" class="form-control py-3 @error('menu') is-invalid @enderror"
                id="menu" placeholder="Notes" required>{{ old('menu', $about->menu) }}</textarea>

        </div>
        @error('menu')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">url video</label>
        <div class="position-relative">
            <input type="url" name="url_video" class="form-control h-58 @error('url_video') is-invalid @enderror"
                id="validationCustom11" value="{{ old('url_video', $about->url_video) }}" required>

        </div>
        @error('url_video')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload banner about menu</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-upload2" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-upload2" name="banner_about_menu"
                        class="@error('banner_about_menu') is-invalid @enderror">

                </div>
                @error('banner_about_menu')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo </label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-upload3" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-upload3" name="photo"
                        class="@error('photo') is-invalid @enderror">

                </div>
                @error('photo')
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
    $('#ABOUT_US').summernote({
        placeholder: 'ABOUT US',
        tabsize: 2,
        height: 100
    });
    $('#WHY_CHOOSE_US').summernote({
        placeholder: 'WHY CHOOSE US',
        tabsize: 2,
        height: 100
    });
    $('#menu').summernote({
        placeholder: 'menu',
        tabsize: 2,
        height: 100
    });
    
</script>
@endsection