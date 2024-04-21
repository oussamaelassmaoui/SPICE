@extends('layouts.header&footer')
@section('content')

    <!--==========================
        BREADCRUMB AREA START
    ===========================-->
    @foreach ($Settings as $item )
    <section class="breadcrumb_area" style="background: url({{ asset('storage/' . $item->banner_Global) }});">
     @endforeach
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-12">
                    <div class="breadcrumb_text">
                        <h1>Chefs Details</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">Chefs Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        BREADCRUMB AREA END
    ===========================-->


    <!--==========================
        CHEFS DETAILS START
    ===========================-->
    <section class="chef_details_area pt_120 xs_pt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 wow fadeInLeft">
                    <div class="chefs_details_img">
                        <img src="{{ asset('storage/' . $chef->photo) }}" alt="chef" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInRight">
                    <div class="chefs_description">
                        <h5>Master Chef</h5>
                        <h2>{{$chef->name}}</h2>
                        <p>{{$chef->About_Me}}.</p>
                        <ul class="chef_address">
                            <li>
                                <span><img src="{{ asset('Frontend/images/location_1.png') }}" alt="location" class="img-fluid w-100">
                                </span>
                                {{$chef->address}}.
                            </li>
                            <li>
                                <span><img src="{{ asset('Frontend/images/call_3.jpg') }}" alt="location" class="img-fluid w-100">
                                </span>
                                {{$chef->Mobile}}
                            </li>
                            <li>
                                <span><img src="{{ asset('Frontend/images/sms_1.png') }}" alt="location" class="img-fluid w-100">
                                </span>
                                {{$chef->email}}
                            </li>
                        </ul>
                        <h3>Social Media</h3>
                        <ul class="chef_social_icon d-flex flex-wrap">
                            <li><a href="{{$chef->Facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="{{$chef->Twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="instagram" href="{{$chef->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="youtube" href="{{$chef->youtube}}"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-xl-12">
                    <div class="chef_details_text">
                        <h2>Personal Information</h2>
                        <p>{!!$chef->PERSONAL_INFORMATION!!}</p>
                       
                    </div>
                </div>
            </div>
            <div class="row mt_70">
                <div class="col-xxl-5 col-lg-6 wow fadeInUp">
                    <div class="chefs_details_dish">
                        <h2>Signature Dish</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('menu.index') }}" class="chef_dish_img">
                                    <img src="{{ asset('storage/' . $chef->photo1) }}" alt="img" class="img-fluid w-100">
                                    <h5>{{$chef->DISH1}}</h5>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('menu.index') }}" class="chef_dish_img">
                                    <img src="{{ asset('storage/' . $chef->photo2) }}" alt="img" class="img-fluid w-100">
                                    <h5>{{$chef->DISH2}}</h5>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('menu.index') }}" class="chef_dish_img">
                                    <img src="{{ asset('storage/' . $chef->photo3) }}" alt="img" class="img-fluid w-100">
                                    <h5>{{$chef->DISH3}}</h5>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('menu.index') }}" class="chef_dish_img">
                                    <img src="{{ asset('storage/' . $chef->photo4) }}" alt="img" class="img-fluid w-100">
                                    <h5>{{$chef->DISH4}}</h5>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-7 col-lg-6 wow fadeInUp">
                    <div class="chefs_details_skills">
                        <h2>Professional Skills</h2>
                        <p>{{$chef->PROFESSIONAL_SKILLS}}.</p>

                        <div class="team_skills_bar_single">
                            <h4>General Knowledge</h4>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="{{$chef->GENERAL_KNOWLEDGE}}"></span>
                            </div>
                        </div>
                        <div class="team_skills_bar_single">
                            <h4>Signature Dishes</h4>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="{{$chef->SIGNATURE_DISHES}}"></span>
                            </div>
                        </div>
                        <div class="team_skills_bar_single">
                            <h4>Customer Satisfied</h4>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="{{$chef->CUSTOMER_SATISFIED}}"></span>
                            </div>
                        </div>
                        <div class="team_skills_bar_single">
                            <h4>Communication Skills</h4>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="{{$chef->COMMUNICATION_SKILLS}}"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        CHEFS DETAILS END
    ===========================-->


@endsection