@extends('layouts.dashboard')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('SERVICES.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">Title</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('title') is-invalid @enderror" name="title"
                    id="validationCustom10" value="{{ old('title') }}" required>

            </div>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

       

        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="text" class="form-control py-3 @error('text') is-invalid @enderror"
                    id="text" placeholder="Notes" required>{{ old('text') }}</textarea>

            </div>
            @error('text')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>


        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text 2:</label>
            <div class="position-relative">
                <textarea cols="30" name="text2" rows="5" class="form-control py-3 @error('text2') is-invalid @enderror"
                    id="text2" placeholder="Notes" required>{{ old('text2') }}</textarea>

            </div>
            @error('text2')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>

      

        <div class="col-md-12">
            <label for="" class="form-label label">text 3:</label>
            <div class="position-relative">
                <textarea cols="30" name="text3" rows="5" class="form-control py-3 @error('text3') is-invalid @enderror"
                    id="summernote" placeholder="Notes" required>{{ old('text3') }}</textarea>

            </div>
            @error('text3')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>

       
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">FAQ1</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('FAQ1') is-invalid @enderror" name="FAQ1"
                    id="validationCustom10" value="{{ old('FAQ1') }}" required>

            </div>
            @error('FAQ1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">rep1</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('rep1') is-invalid @enderror" name="rep1"
                    id="validationCustom10" value="{{ old('rep1') }}" required>

            </div>
            @error('rep1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">FAQ2</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('FAQ2') is-invalid @enderror" name="FAQ2"
                    id="validationCustom10" value="{{ old('FAQ2') }}" required>

            </div>
            @error('FAQ2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">rep2</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('rep2') is-invalid @enderror" name="rep2"
                    id="validationCustom10" value="{{ old('rep2') }}" required>

            </div>
            @error('rep2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">FAQ3</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('FAQ3') is-invalid @enderror" name="FAQ3"
                    id="validationCustom10" value="{{ old('FAQ3') }}" required>

            </div>
            @error('FAQ3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">rep3</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('rep3') is-invalid @enderror" name="rep3"
                    id="validationCustom10" value="{{ old('rep3') }}" required>

            </div>
            @error('rep3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">FAQ4</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('FAQ4') is-invalid @enderror" name="FAQ4"
                    id="validationCustom10" value="{{ old('FAQ4') }}" required>

            </div>
            @error('FAQ4')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">rep4</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('rep4') is-invalid @enderror" name="rep4"
                    id="validationCustom10" value="{{ old('rep4') }}" required>

            </div>
            @error('rep4')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">FAQ5</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('FAQ5') is-invalid @enderror" name="FAQ5"
                    id="validationCustom10" value="{{ old('FAQ5') }}" required>

            </div>
            @error('FAQ5')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">rep5</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('rep5') is-invalid @enderror" name="rep5"
                    id="validationCustom10" value="{{ old('rep5') }}" required>

            </div>
            @error('rep5')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <br><br>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">File Upload photo</label>
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
        $('#text').summernote({
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
