@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
   <h3 class="mb-sm-0 mb-1 fs-18">products</h3>
   <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
       <li>
           <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
               <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
               <span>Dashboard</span>
           </a>
       </li>
       <li>
           <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">products</span>
       </li>
   </ul>
</div>
<div class="card bg-white border-0 rounded-10 mb-4">
   <div class="card-body p-4">
       <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
           <h4 class="fw-semibold fs-18 mb-0">All products</h4>
           <div class="d-sm-flex align-items-center">
               <a href="{{ route('products.create') }}">
                   <button class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                       <span class="py-sm-1 d-block">
                           <i class="ri-add-line text-white"></i>
                           <span>Add Products</span>
                       </span>
                   </button>
               </a>
           </div>
       </div>
       <div class="default-table-area project-list style-two">
           <div class="table-responsive">
               <table class="table align-middle">
                   <thead>
                       <tr class="text-center">
                           
                           <th scope="col">Product Name</th>
                           <th scope="col">Category</th>
                           <th scope="col">price</th>
                           <th scope="col">quantity</th>
                           <th scope="col">Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                       @forelse ($products as $item)
                           <tr>
                               <td>
                                   <a href="#" class="d-flex align-items-center mw-380">
                                       <div class="flex-shrink-0">
                                           <img src="{{ asset('storage/' . $item->photo) }}"
                                               class="wh-44 rounded-circle" alt="project">
                                       </div>
                                       <div class="flex-grow-1 ms-3">
                                           <h4 class="fw-semibold fs-16 mb-0 lh-base hover">{{ $item->name }}</h4>
                                       </div>
                                   </a>
                               </td>
                               
                              
                               <td>
                                   <span
                                       class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold d-block text-center">{{$item->Category->name}}</span>
                               </td>
                              
                               <td>
                                   <span class="d-block text-center">{{ $item->price }}</span>
                               </td>
                               <td>
                                   <span class="d-block text-center">{{ $item->quantity }}</span>
                               </td>
                               <td>
                                   <div class="dropdown action-opt">
                                       <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                           <i data-feather="more-horizontal"></i>
                                       </button>
                                       <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">

                                           <li>
                                               <a class="dropdown-item" href="{{ route('products.edit', $item->id) }}">
                                                   <i data-feather="edit-3"></i>
                                                   Rename
                                               </a>
                                           </li>

                                           <li>

                                               <form action="{{ route('products.destroy', $item) }}" method="POST"
                                                   class="dropdown-item">
                                                   @csrf
                                                   @method('DELETE')

                                                   <a href="#"
                                                       onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }">
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

       </div>
   </div>
</div>
@endsection