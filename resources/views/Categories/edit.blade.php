@extends('layouts.dashboard')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Categories.update', $Categorie->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="validationCustom10" class="form-label label">name</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('name') is-invalid @enderror" name="name"
                    id="validationCustom10" value="{{ old('name', $Categorie->name) }}" required>

            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <div class="form-group">
                <label class="label">File Upload</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="file-upload" type="file" name="photo">
                        <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
   
@endsection
