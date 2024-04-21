@extends('layouts.dashboard')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Inbox</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Inbox</span>
            </li>
        </ul>
    </div>

    
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between text-center align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Email List</h4>
                <div class="d-sm-flex align-items-center">
                    <form action="{{ route('contact.destroy-all') }}" method="POST" class="text-decoration-none text-gray-light ms-1">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Remove all" class="btn btn-danger btn-sm px-3">
                    </form>
                </div>
                
            </div>
            <div class="default-table-area recent-files-list">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Name</th>
                                <th scope="col">phone</th>
                                <th scope="col">message</th>
                                <th scope="col">subject</th>
                                <th scope="col">email</th>
                                <th scope="col">Listed Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $Contacts as $item )
                            <tr class="text-center">
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                       
                                        <h4 class="fw-semibold fs-14 mb-0">{{$item->name}}</h4>
                                    </div>
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                       
                                        <h4 class="fw-semibold fs-14 mb-0">{{$item->phone}}</h4>
                                    </div>
                                    </div>
                                </td>
                                
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                       
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-14 mb-0">{{$item->message}}</h4>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                       
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-14 mb-0">{{$item->subject}}</h4>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                       
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-14 mb-0">{{$item->email}}</h4>
                                        </div>
                                    </div>
                                </td>
                                
                               
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                       
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-14 mb-0">{{$item->updated_at}}</h4>
                                        </div>
                                    </div>
                                </td>
                                
                                
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            
                                            
                                            <li>
                                               
                                                <form action="{{ route('contact.destroy', $item) }}" method="POST" class="dropdown-item" >
                                                    @csrf
                                                    @method('DELETE')
                                                  
                                                    <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }" >
                                                       <i data-feather="trash-2"></i>  Remove
                                                    </a>
                                                    
                                                 
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                             </tr>
                                @empty
                                <h4>No Emails Found!</h4>
                                @endforelse
                           
                           
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>

@endsection
