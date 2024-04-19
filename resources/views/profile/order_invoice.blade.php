@extends('layouts.header&footer')

@section('content')
<!--==========================
        BREADCRUMB AREA START
    ===========================-->
    <section class="breadcrumb_area" style="background: url({{ asset('Frontend/images/breadcrumb_bg.jpg') }});">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-12">
                    <div class="breadcrumb_text">
                        <h1>order invoice</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">order invoice</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        BREADCRUMB AREA END
    ===========================-->


    <!--================================
        DASHBOARD ORDER INVOICE START
    =================================-->
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
                        <a class="back_btn common_btn" href="{{ route('My_Orders') }}"><i
                                class="far fa-long-arrow-left"></i> Go
                            Back <span></span></a>
                        <div class="dashboard_order_invoice">
                            <div class="dashboard_invoice_logo_area">
                                <div class="invoice_logo">
                                    <img src="{{ asset('Frontend/images/logo.png') }}" alt="logo" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h2>invoice</h2>
                                    <p>invoice no: #{{$order->id}}</p>
                                    <p>date: {{$order->created_at->format('M j, Y')}}</p>
                                </div>
                            </div>
                            <div class="dashboard_invoice_header">
                                <div class="text">
                                    <h2>Bill To</h2>
                                    <p>{{$order->shipping_address}}</p>
                                    <p>{{$order->telephone_number}}</p>
                                    <p>{{$order->email}}</p>
                                </div>
                                <div class="text">
                                    <h2>Ship To</h2>
                                    <ul>
                                        <li><span>Name:</span> {{$order->first_name}} {{$order->last_name}} </li>
                                        <li><span>Email:</span> {{$order->email}}</li>
                                        <li><span>Phone:</span> {{$order->telephone_number}}</li>
                                        <li><span>Address:</span> {{$order->shipping_address}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="invoice_table dashboard_order">
                                <div class="table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                            
                                                @foreach ($OrderItems as $item)
        <tr>
            <td>{{ $item->product->name }}</td>
            <td>${{ $item->unit_price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>${{ $item->unit_price * $item->quantity }}</td>
        </tr>
        @endforeach
                                            
                                           
                                           
                                            
                                            <tr>
                                                <td colspan="3"><b>Total</b></td>
                                                <td><b>${{$order->total_cost}}</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="dashboard_invoice_footer">
                                <h4>Notes</h4>
                                <p>Thanks for your purchase</p>
                                <button onclick="window.print()">
                                    <a class="common_btn" >
                                        <i class="far fa-print"></i> Print PDF<span></span>
                                    </a>
                                </button>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        DASHBOARD ORDER INVOICE END
    =================================-->

@endsection