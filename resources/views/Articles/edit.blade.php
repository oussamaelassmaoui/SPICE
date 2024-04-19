@extends('layouts.dashboard')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Articles.update', $Article->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Title</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('title') is-invalid @enderror" name="title"
                    id="validationCustom10" value="{{ old('title', $Article->title) }}" required>

            </div>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom11" class="form-label label">Slug</label>
            <div class="position-relative">
                <input type="text" name="slug" class="form-control h-58 @error('slug') is-invalid @enderror"
                    id="validationCustom11" value="{{ old('slug', $Article->slug) }}" required>

            </div>
            @error('slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text 1 :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="text1" class="form-control py-3 @error('text1') is-invalid @enderror"
                    id="text1" placeholder="Notes" required>{{ old('text1', $Article->text1) }}</textarea>

            </div>
            @error('text1')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>


        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text 2:</label>
            <div class="position-relative">
                <textarea cols="30" name="text2" rows="5" class="form-control py-3 @error('text2') is-invalid @enderror"
                    id="text2" placeholder="Notes" required>{{ old('text2', $Article->text2) }}</textarea>

            </div>
            @error('text2')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="summernote" class="form-label label">text 3:</label>
            <div class="position-relative">
                <textarea cols="30" name="text3" rows="5" class="form-control py-3 @error('text3') is-invalid @enderror"
                    id="summernote" placeholder="Notes" required>{{ old('text3', $Article->text3) }}</textarea>

            </div>
            @error('text3')
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
                        <input id="file-upload" class="@error('photo1') is-invalid @enderror" type="file" name="photo1">

                    </div>
                    @error('photo1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
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
                        <input type="file" id="file-upload1" name="image" class="@error('image') is-invalid @enderror">


                    </div>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
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
                        <input type="file" id="file-upload2" name="photo3"
                            class="@error('photo3') is-invalid @enderror">

                    </div>
                    @error('photo3')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Categories</label>
                <div class="form-group position-relative">
                    <select name="category_id" id="category_id" class="form-select form-control h-58" aria-label="Default select example">
                       
                             @foreach ($Categories as $Categorie)
                             <option  value="{{$Categorie->id}}">{{ $Categorie->name}}</option>
                             @endforeach
                       
                        
                    </select>
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
        $('#text1').summernote({
            placeholder: 'Notes',
            tabsize: 2,
            height: 100
        });
        $('#text2').summernote({
            placeholder: 'Notes',
            tabsize: 2,
            height: 100
        });
        
    </script>
@endsection
