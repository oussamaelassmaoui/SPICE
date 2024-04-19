@extends('layouts.header&footer')

@section('content')
    <!--==========================
            BREADCRUMB AREA START
        ===========================-->
    <section class="breadcrumb_area" style="background: url(Frontend/images/breadcrumb_bg.jpg);">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-12">
                    <div class="breadcrumb_text">
                        <h1>Edit Information</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">Edit Information</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            BREADCRUMB AREA END
        ===========================-->


    <!--============================
            DASHBOARD INFO EDIT START
        =============================-->
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
                                <li><a class="active" href="{{ route('profile') }}"><i class="fas fa-user"></i> Personal
                                        Info</a></li>
                                {{-- <li><a href="{{ route('logout') }}"><i class="fas fa-clipboard-list"></i> address</a>
                                </li> --}}
                                <li><a href="{{ route('My_Orders') }}"><i class="fas fa-shopping-basket"></i> Order</a></li>

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
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
    </section>
    <!--============================
            DASHBOARD INFO EDIT END
        =============================-->
@endsection