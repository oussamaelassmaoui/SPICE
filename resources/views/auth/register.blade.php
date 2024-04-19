{{-- <x-guest-layout> --}}
    @extends('layouts.header&footer')

    @section('content')
   
    
    <!--==========================
        SIGN UP START
    ===========================-->
    <section class="sign_up sign_in">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 wow fadeInLeft">
                <div class="sign_in_img">
                    <img src="Frontend/images/sign_in_img_2.jpg" alt="sign in" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInRight">
                <div class="sign_in_form">
                    <a class="sign_in_logo" href="index.html">
                        <img src="Frontend/images/logo.png" alt="sign in" class="img-fluid w-100">
                    </a>
                    <h2>Create Account</h2>
                    <p class="description">Please Enter your Email Address to Start your Online Application</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Fast Name" id="name" name="name"  required autofocus autocomplete="name">
                            
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                         </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="username" id="username" name="username"  required autofocus autocomplete="username">
                             
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                            <div class="col-xl-12">
                                <input type="email" placeholder="Email..." id="email"  name="email"  required autocomplete="username">
                               
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            
                            
                                </div>
                            <div class="col-md-6">
                                <input type="password" id="password" placeholder="Password..." name="password" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="col-md-6">
                                <input type="password" id="password_confirmation" placeholder="Confirm Password..." name="password_confirmation" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="col-12">
                                <button class="common_btn" type="submit">sign up</button>
                            </div>
                        </div>
                    </form>
                    {{-- <p class="or">or</p> --}}
                    {{-- <ul>
                        <li>
                            <a href="#">
                                <span>
                                    <img src="Frontend/images/google_icon.svg" alt="google" class="img-fluid w-100">
                                </span>
                                Google
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img src="Frontend/images/fb_icon.svg" alt="facebook" class="img-fluid w-100">
                                </span>
                                Facebook
                            </a>
                        </li>
                    </ul> --}}
                    <p class="dont_account">Have an account? <a href="{{ route('login') }}">Sign in</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        SIGN UP END
    ===========================-->

{{-- </x-guest-layout> --}}
@endsection
