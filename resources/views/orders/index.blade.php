@extends('layouts.dashboard')
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"> Orders</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                        <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2"> Orders</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-semibold fs-18 border-bottom pb-20 mb-20"> Orders</h4>

                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                           
                            <div class="default-table-area recent-orders">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-primary">Order ID </th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Size</th>
                                                <th scope="col">color</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">quantity</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($OrderItems as $item )
                                          <tr>
                                            <td class="fs-15 fw-semibold">#{{ $item->id }}</td>
                                            <td>
                                                 <a href="#" class="d-flex align-items-center">
                                                        <img src="{{ asset('storage/' . $item->product->photo) }}" class="wh-55 rounded-3" width="60" height="50" alt="Product Image">
                                                    <h6 class="fw-semibold">{{ $item->product->name}}</h6>
                                                </a>
                                            </td>
                                            <td>{{$item->order->first_name}} {{$item->order->last_name}}</td>
                                            <td>{{$item->size}}</td>
                                            <td>{{$item->option}}</td>
                                            <td>${{$item->order->total_cost}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->updated_at->format('d-m-y')}}</td>

                                            <td><a href="{{ route('order_invoice',$item->order) }}">View</a></td>
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
                </div>
            </div>
        </div>
    </div>
@endsection

