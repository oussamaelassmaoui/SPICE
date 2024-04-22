{{-- <x-guest-layout> --}}
    @extends('layouts.header&footer')

@section('content')

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    

    <!--==========================
        FORGOT PASSWORD START
    ===========================-->
    @foreach ($Settings as $item )
    <section class="sign_up sign_in">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 wow fadeInLeft">
                <div class="sign_in_img">
                    <img src="{{ asset('storage/' . $item->Sign_Up_photo) }}" alt="sign in" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInRight">
                <div class="sign_in_form">
                    <a class="sign_in_logo" href="/">
                        <img src="{{ asset('storage/' . $item->logo) }}" alt="sign in" class="img-fluid w-100">
                    </a>
                    <h2>forgot password ?</h2>
                    <p class="description">Please Enter your Email Address for resat your password</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <input type="email" id="email" placeholder="Enter Your Email..."  name="email"  required autofocus>
                               
                                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="col-12">
                                <button class="common_btn" type="submit">send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!--==========================
        FORGOT PASSWORD END
    ===========================-->

        
      
    
{{-- </x-guest-layout> --}}
@endsection
