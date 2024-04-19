@extends('layouts.header&footer')

@section('content')
@include('sweetalert::alert')

    <!--==========================
        BREADCRUMB AREA START
    ===========================-->
    <section class="breadcrumb_area" style="background: url(Frontend/images/breadcrumb_bg.jpg);">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-12">
                    <div class="breadcrumb_text">
                        <h1>dashboard order</h1>
                        <ul>
                            <li><a href="#">Home </a></li>
                            <li><a href="#">dashboard order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        BREADCRUMB AREA END
    ===========================-->


    <!--=========================
        DASHBOARD ORDER START
    ==========================-->
    <section class="dashboard pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 wow fadeInLeft">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_user">
                            <div class="img">
                                @if (auth()->check() && auth()->user()->photo)
                                <img src="{{ asset('storage/profile_pictures/' . auth()->user()->photo) }}" alt="dashboard" class="img-fluid w-100">
                            @else
                                <img src="{{ asset('Frontend/images/SPICE.jpg') }}" alt="dashboard" class="img-fluid w-100">
                            @endif
                                
                            </div>
                            <h3>{{ auth()->user()->name }}</h3>
                           
                        </div>
                        <div class="dashboard_sidebar_menu">
                            <ul>
                                <li><a  href="{{ route('profile') }}"><i class="fas fa-user"></i> Personal
                                        Info</a></li>
                                {{-- <li><a href="{{ route('logout') }}"><i class="fas fa-clipboard-list"></i> address</a>
                                </li> --}}
                                <li><a class="active" href="{{ route('My_Orders') }}"><i class="fas fa-shopping-basket"></i> Order</a></li>

                                <li><a href="{{ route('wishlist.index') }}"><i class="fas fa-heart"></i> Wishlist</a></li>
                                <li><a href="{{ route('update_password') }}"><i class="fas fa-key"></i> Change
                                        Password</a></li>
                                <li><a href="{{ route('delete_user') }}"><i class="fas fa-trash-alt"></i>Supprimer le compte</a></li>
                                <li>
                                    <a href="#"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                            class="fas fa-sign-out-alt"></i> Logout
                                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                                            @csrf

                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 wow fadeInRight">
                    <div class="dashboard_content">
                        <h2 class="dashboard_title">Order History</h2>
                        <div class="dashboard_order">
                            <div class="table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                        @forelse ($OrderItems as $item )
                                        <tr>
                                            <td>#{{$item->id}}</td>
                                            <td>{{$item->order->created_at->format('M j, Y')}}</td>
                                            <td>${{$item->order->total_cost}} </td>
                                            
                                            <td><a href="{{ route('order_invoice',$item->order) }}">View</a></td>
                                        </tr>
                                        @empty
                                            <h4>No Order Yet!</h4>
                                        @endforelse
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_area mt_60 wow fadeInUp">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="far fa-arrow-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DASHBOARD ORDER END
    ==========================-->



@endsection