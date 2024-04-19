@extends('layouts.dashboard')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">SERVICES</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">SERVICES</span>
            </li>
        </ul>
    </div>   
    <div class="row justify-content-center">
        @forelse ($SERVICES as $item)
        <div class="col-xxl-3 col-sm-6 col-md-4">
            <div class="card bg-white border-0 rounded-10 mb-4 text-center p-1 transition">
                <div class="card-body p-4">
                    <img src="{{ asset('storage/' . $item->photo) }}" class="rounded-circle mb-20" width="100" alt="photo">
                    <h4 class="mb-1 fs-16 fw-semibold">{{ $item->title }}</h4>
                    
                   <br>
                    <ul class="ps-0 mb-0 list-unstyled d-flex gap-3">
                        <li>
                           
                            <a  class="text-decoration-none text-gray-light ms-1" href="{{ route('SERVICES.edit', $item->id) }}">
                                <button class="btn btn-info btn-sm px-3">edit</button>
                            </a>
                        </li>
                        <li>
                            
                          
                            
                                <form action="{{ route('SERVICES.destroy', $item) }}" method="POST" class="text-decoration-none text-gray-light ms-1">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Remove" class="btn btn-danger btn-sm px-3">
                                </form>
                           
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
