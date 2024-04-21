@extends('layouts.dashboard')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('termsCondition.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">content :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="content" class="form-control py-3 @error('content') is-invalid @enderror"
                    id="content" placeholder="Notes" required>{{ old('content') }}</textarea>

            </div>
            @error('content')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>

        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Settings</button>
        </div>
    </form>
    <script>
        
        $('#content').summernote({
            placeholder: 'content',
            tabsize: 2,
            height: 100
        });
       
        
    </script>
@endsection
