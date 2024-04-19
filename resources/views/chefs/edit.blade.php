@extends('layouts.dashboard')
@section('content')
<form class="row g-3 needs-validation" action="{{ route('chefs.update', $chef->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-md-12">
        <label for="validationCustom10" class="form-label label">name</label>
        <div class="position-relative">
            <input type="text" class="form-control h-58 @error('name') is-invalid @enderror" name="name"
                id="validationCustom10" value="{{ old('name', $chef->name) }}" required>

        </div>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">About_Me</label>
        <div class="position-relative">
            <input type="text" name="About_Me" class="form-control h-58 @error('About_Me') is-invalid @enderror"
                id="validationCustom11" value="{{ old('About_Me', $chef->About_Me) }}" required>

        </div>
        @error('About_Me')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">Mobile</label>
        <div class="position-relative">
            <input type="text" name="Mobile" class="form-control h-58 @error('Mobile') is-invalid @enderror"
                id="validationCustom11" value="{{ old('Mobile', $chef->Mobile) }}" required>

        </div>
        @error('Mobile')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">Facebook</label>
        <div class="position-relative">
            <input type="text" name="Facebook" class="form-control h-58 @error('Facebook') is-invalid @enderror"
                id="validationCustom11" value="{{ old('Facebook', $chef->Facebook) }}" required>

        </div>
        @error('Facebook')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">Twitter</label>
        <div class="position-relative">
            <input type="text" name="Twitter" class="form-control h-58 @error('Twitter') is-invalid @enderror"
                id="validationCustom11" value="{{ old('Twitter', $chef->Twitter) }}" required>

        </div>
        @error('Twitter')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">youtube</label>
        <div class="position-relative">
            <input type="text" name="youtube" class="form-control h-58 @error('youtube') is-invalid @enderror"
                id="validationCustom11" value="{{ old('youtube', $chef->youtube) }}" required>

        </div>
        @error('youtube')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">instagram</label>
        <div class="position-relative">
            <input type="text" name="instagram" class="form-control h-58 @error('instagram') is-invalid @enderror"
                id="validationCustom11" value="{{ old('instagram', $chef->instagram) }}" required>

        </div>
        @error('instagram')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">address</label>
        <div class="position-relative">
            <input type="text" name="address" class="form-control h-58 @error('address') is-invalid @enderror"
                id="validationCustom11" value="{{ old('address', $chef->address) }}" required>

        </div>
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">email</label>
        <div class="position-relative">
            <input type="email" name="email" class="form-control h-58 @error('email') is-invalid @enderror"
                id="validationCustom11" value="{{ old('email', $chef->email) }}" required>

        </div>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">PROFESSIONAL SKILLS</label>
        <div class="position-relative">
            <input type="text" name="PROFESSIONAL_SKILLS"
                class="form-control h-58 @error('PROFESSIONAL_SKILLS') is-invalid @enderror" id="validationCustom11"
                value="{{ old('PROFESSIONAL_SKILLS', $chef->PROFESSIONAL_SKILLS) }}" required>

        </div>
        @error('PROFESSIONAL_SKILLS')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">GENERAL KNOWLEDGE</label>
        <div class="position-relative">
            <input type="number" name="GENERAL_KNOWLEDGE"
                class="form-control h-58 @error('GENERAL_KNOWLEDGE') is-invalid @enderror" id="validationCustom11"
                value="{{ old('GENERAL_KNOWLEDGE' , $chef->GENERAL_KNOWLEDGE) }}" required>

        </div>
        @error('GENERAL_KNOWLEDGE')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">SIGNATURE DISHES</label>
        <div class="position-relative">
            <input type="number" name="SIGNATURE_DISHES"
                class="form-control h-58 @error('SIGNATURE_DISHES') is-invalid @enderror" id="validationCustom11"
                value="{{ old('SIGNATURE_DISHES', $chef->SIGNATURE_DISHES) }}" required>

        </div>
        @error('SIGNATURE_DISHES')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">CUSTOMER SATISFIED</label>
        <div class="position-relative">
            <input type="number" name="CUSTOMER_SATISFIED"
                class="form-control h-58 @error('CUSTOMER_SATISFIED') is-invalid @enderror" id="validationCustom11"
                value="{{ old('CUSTOMER_SATISFIED', $chef->CUSTOMER_SATISFIED) }}" required>

        </div>
        @error('CUSTOMER_SATISFIED')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">COMMUNICATION SKILLS</label>
        <div class="position-relative">
            <input type="number" name="COMMUNICATION_SKILLS"
                class="form-control h-58 @error('COMMUNICATION_SKILLS') is-invalid @enderror" id="validationCustom11"
                value="{{ old('COMMUNICATION_SKILLS', $chef->COMMUNICATION_SKILLS) }}" required>

        </div>
        @error('COMMUNICATION_SKILLS')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>








    <div class="col-md-12">
        <label for="" class="form-label label"> PERSONAL INFORMATION :</label>
        <div class="position-relative">
            <textarea cols="30" name="PERSONAL_INFORMATION" rows="5"
                class="form-control py-3 @error('PERSONAL_INFORMATION') is-invalid @enderror" id="summernote"
                placeholder="Notes" required>{{ old('PERSONAL_INFORMATION', $chef->PERSONAL_INFORMATION) }}</textarea>

        </div>
        @error('PERSONAL_INFORMATION')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>




    <br><br>

    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo 1</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="file-upload" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input id="file-upload" class="@error('photo') is-invalid @enderror" type="file" name="photo">

                </div>
                @error('photo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">DISH1</label>
        <div class="position-relative">
            <input type="text" name="DISH1" class="form-control h-58 @error('DISH1') is-invalid @enderror"
                id="validationCustom11" value="{{ old('DISH1', $chef->DISH1) }}" required>

        </div>
        @error('DISH1')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo 2</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-upload1" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to
                            upload.</span>
                    </label>
                    <input type="file" id="file-upload1" name="photo1"
                        class="@error('photo1') is-invalid @enderror">


                </div>
                @error('photo1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">DISH2</label>
        <div class="position-relative">
            <input type="text" name="DISH2" class="form-control h-58 @error('DISH2') is-invalid @enderror"
                id="validationCustom11" value="{{ old('DISH2', $chef->DISH2) }}" required>

        </div>
        @error('DISH2')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo 3</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-upload2" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-upload2" name="photo2"
                        class="@error('photo2') is-invalid @enderror">

                </div>
                @error('photo2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">DISH3</label>
        <div class="position-relative">
            <input type="text" name="DISH3" class="form-control h-58 @error('DISH3') is-invalid @enderror"
                id="validationCustom11" value="{{ old('DISH3', $chef->DISH3) }}" required>

        </div>
        @error('DISH3')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo 4</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-upload3" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-upload3" name="photo3"
                        class="@error('photo3') is-invalid @enderror">

                </div>
                @error('photo3')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">DISH4</label>
        <div class="position-relative">
            <input type="text" name="DISH4" class="form-control h-58 @error('DISH4') is-invalid @enderror"
                id="validationCustom11" value="{{ old('DISH4', $chef->DISH4) }}" required>

        </div>
        @error('DISH4')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label class="label">File Upload photo 4</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">

                <div class="product-upload">
                    <label for="file-upload4" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">
                            Drop files here or click to upload.
                        </span>
                    </label>
                    <input type="file" id="file-upload4" name="photo4"
                        class="@error('photo4') is-invalid @enderror">

                </div>
                @error('photo4')
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
        $('#summernote').summernote({
            placeholder: 'Notes',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
