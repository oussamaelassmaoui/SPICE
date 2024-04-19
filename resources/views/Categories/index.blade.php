
@extends('layouts.dashboard')

@section('content')

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Categories</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Categories</span>
            </li>
        </ul>
    </div>
    
        
        
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-sm-flex justify-content-between text-center align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-sm-0">Categories</h4>
                        <button class="border-0 btn btn-primary py-2 px-4 text-white fs-14 fw-semibold rounded-3"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create Categories</span>
                            </span>
                        </button>
                    </div>
                    <div class="default-table-area recent-files-list">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="text-primary text-start">Name</th>
                                        <th scope="col" >photo</th>
                                        <th scope="col">Listed Date</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $Categories as $Categorie )
                                    <tr class="text-center">
                                        
                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$Categorie->name}}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/' . $Categorie->photo) }}" class="wh-60 rounded-circle" alt="{{$Categorie->photo}}">
                                        </td>
                                        
                                        <td>
                                            <span>{{$Categorie->updated_at}}</span>
                                        </td>
                                        
                                        <td>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i data-feather="more-horizontal"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('Categories.edit', $Categorie->id) }}">
                                                            <i data-feather="edit-3"></i>
                                                            Rename
                                                        </a>
                                                    </li>
                                                   
                                                    <li>
                                                       
                                                        <form action="{{ route('Categories.destroy', $Categorie) }}" method="POST" class="dropdown-item" >
                                                            @csrf
                                                            @method('DELETE')
                                                          
                                                            <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }">
                                                                <i data-feather="trash-2"></i> Remove
                                                            </a>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                     </tr>
                                        @empty
                                            <h4>No Data Found!</h4>
                                        @endforelse
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="d-sm-flex justify-content-between align-items-center text-center">
                            <span class="fs-14">Showing 1 To 5 Of 20 Entries</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link icon" href="documents.html" aria-label="Previous">
                                            <i data-feather="arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="documents.html">1</a></li>
                                    <li class="page-item"><a class="page-link" href="documents.html">2</a></li>
                                    <li class="page-item"><a class="page-link" href="documents.html">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link icon" href="documents.html" aria-label="Next">
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>
      
   


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom p-4">
            <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Create Categories</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <form  action="{{ route('Categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               
               
                    <div class="form-group mb-4">
                        <label class="label">Categories Name</label>
                        <input type="text" name="name" class="form-control text-dark @error('name') is-invalid @enderror" placeholder="Categorie Name" value="{{ old('name') }}" required>
                    </div>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-4">
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
                    <div class="form-group d-flex gap-3">
                        <button class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3" type="submit">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create Categorie</span>
                            </span>
                        </button>
                    </div>
              
            </form>
        </div>
    </div>
@endsection
