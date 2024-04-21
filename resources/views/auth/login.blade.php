{{-- <x-guest-layout> --}}
@extends('layouts.header&footer')
@section('content')
    <!--==========================
        SIGN IN START
    ===========================-->
    @foreach ($Settings as $item )
    <section class="sign_in">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 wow fadeInLeft">
                <div class="sign_in_img">
                    <img src="{{ asset('storage/' . $item->Sign_In_photo) }}" alt="sign in" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInRight">
                <div class="sign_in_form">
                    <a class="sign_in_logo" href="/">
                        <img src="{{ asset('storage/' . $item->logo) }}" alt="sign in" class="img-fluid w-100">
                    </a>
                    <h2>Welcome back, sign in</h2>
                    <p class="description">Sign in to your account and make recharges. payments and bookings faster</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input  type="email" id="email"  name="email" placeholder="Enter your email..."  required autofocus autocomplete="username" >
                               
                            </div>
                            <div class="col-md-6">
                                <input type="password"   name="password" id="password" placeholder="Enter your password..." required autocomplete="current-password">
                               
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="col-md-12">
                                <div class="sign_in_check_area">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}">Forget Password?</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="common_btn" type="submit">sign in</button>
                            </div>
                        </div>
                    </form>
                    {{-- <p class="or">or</p>
                    <ul>
                        <li>
                            <a href="#">
                                <span>
                                    <img src="{{ asset('Frontend/images/google_icon.svg') }}" alt="google" class="img-fluid w-100">
                                </span>
                                Google
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img src="{{ asset('Frontend/images/fb_icon.svg') }}" alt="facebook" class="img-fluid w-100">
                                </span>
                                facebook
                            </a>
                        </li>
                    </ul> --}}
                    <p class="dont_account">Don’t have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!--==========================
        SIGN IN END
    ===========================-->


@endsection