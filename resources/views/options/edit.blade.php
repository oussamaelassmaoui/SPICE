@extends('layouts.dashboard')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('options.update', $option->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">name</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('name') is-invalid @enderror" name="name"
                    id="validationCustom10" value="{{ old('name', $option->name) }}" required>

            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group mb-4">
                <label class="label">option Price</label>
                <div class="form-group position-relative">
                    <input type="number" value="{{ old('price', $option->price) }}" name="price" class="form-control ps-5 text-gray-light h-58"
                        placeholder="Enter price">
                    <i
                        class="ri-money-dollar-circle-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
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
