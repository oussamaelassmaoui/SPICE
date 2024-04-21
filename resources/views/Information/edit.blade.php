@extends('layouts.dashboard')
@section('content')
<form class="row g-3 needs-validation" action="{{ route('Information.update', $Information->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
  


    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">Mobile1</label>
        <div class="position-relative">
            <input type="text" name="Mobile1" class="form-control h-58 @error('Mobile1') is-invalid @enderror"
                id="validationCustom11" value="{{ old('Mobile1', $Information->Mobile1) }}" required>

        </div>
        @error('Mobile1')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">Mobile 2</label>
        <div class="position-relative">
            <input type="text" name="Mobile2" class="form-control h-58 @error('Mobile2') is-invalid @enderror"
                id="validationCustom11" value="{{ old('Mobile2', $Information->Mobile2) }}" required>

        </div>
        @error('Mobile2')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">email 1</label>
        <div class="position-relative">
            <input type="email" name="email1" class="form-control h-58 @error('email1') is-invalid @enderror"
                id="validationCustom11" value="{{ old('email1', $Information->email1) }}" required>

        </div>
        @error('email1')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">email 2</label>
        <div class="position-relative">
            <input type="email" name="email2" class="form-control h-58 @error('email2') is-invalid @enderror"
                id="validationCustom11" value="{{ old('email2', $Information->email2) }}" required>

        </div>
        @error('email2')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">Facebook</label>
        <div class="position-relative">
            <input type="url" name="Facebook" class="form-control h-58 @error('Facebook') is-invalid @enderror"
                id="validationCustom11" value="{{ old('Facebook', $Information->Facebook) }}" required>

        </div>
        @error('Facebook')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">Twitter</label>
        <div class="position-relative">
            <input type="url" name="Twitter" class="form-control h-58 @error('Twitter') is-invalid @enderror"
                id="validationCustom11" value="{{ old('Twitter', $Information->Twitter) }}" required>

        </div>
        @error('Twitter')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">instagram</label>
        <div class="position-relative">
            <input type="url" name="instagram" class="form-control h-58 @error('instagram') is-invalid @enderror"
                id="validationCustom11" value="{{ old('instagram', $Information->instagram) }}" required>

        </div>
        @error('instagram')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">address</label>
        <div class="position-relative">
            <input type="text" name="address" class="form-control h-58 @error('address') is-invalid @enderror"
                id="validationCustom11" value="{{ old('address', $Information->address) }}" required>

        </div>
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
   <div class="col-md-12">
        <label for="" class="form-label label"> iframe map :</label>
        <div class="position-relative">
            <textarea cols="30" name="iframe_map" rows="5"
                class="form-control py-3 @error('iframe_map') is-invalid @enderror" id="summernote"
                placeholder="iframe map" required>{{ old('iframe_map', $Information->iframe_map) }}</textarea>

        </div>
        @error('iframe_map')
            <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">OUR CLIENTS</label>
        <div class="position-relative">
            <input type="number" name="OUR_CLIENTS" class="form-control h-58 @error('OUR_CLIENTS') is-invalid @enderror"
                id="validationCustom11" value="{{ old('OUR_CLIENTS', $Information->OUR_CLIENTS) }}" required>

        </div>
        @error('OUR_CLIENTS')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">YEARS EXPERIENCE</label>
        <div class="position-relative">
            <input type="number" name="YEARS_EXPERIENCE" class="form-control h-58 @error('YEARS_EXPERIENCE') is-invalid @enderror"
                id="validationCustom11" value="{{ old('YEARS_EXPERIENCE', $Information->YEARS_EXPERIENCE) }}" required>

        </div>
        @error('YEARS_EXPERIENCE')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">FRESH HALAL</label>
        <div class="position-relative">
            <input type="number" name="FRESH_HALAL" class="form-control h-58 @error('FRESH_HALAL') is-invalid @enderror"
                id="validationCustom11" value="{{ old('FRESH_HALAL', $Information->FRESH_HALAL) }}" required>

        </div>
        @error('FRESH_HALAL')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="validationCustom11" class="form-label label">TEAM MEMBER</label>
        <div class="position-relative">
            <input type="number" name="TEAM_MEMBER" class="form-control h-58 @error('TEAM_MEMBER') is-invalid @enderror"
                id="validationCustom11" value="{{ old('TEAM_MEMBER', $Information->TEAM_MEMBER) }}" required>

        </div>
        @error('TEAM_MEMBER')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>



    <div class="col-12">
        <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
    </div>
    </form>
    <br>
    <br>
   
@endsection
