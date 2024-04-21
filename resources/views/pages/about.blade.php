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
                        <h1>about</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">About us</a></li>
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
        ABOUT US PAGE 02 START
    ===========================-->
    @forelse ($abouts as $item)
    <section class="about_us_2 mt_120 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="about_us_2_img">
                        <img src="{{ asset('storage/' . $item->photo) }}" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="about_us_2_text">
                        <h5>about us</h5>
                        {!! $item->ABOUT_US !!}
                        {{-- <ul>
                            <li>Location-based services</li>
                            <li>Food Items management</li>
                            <li>Customer feedback portal</li>
                            <li>Table reservation</li>
                        </ul> --}}
                        <a class="common_btn" href="{{ route('menu.index') }}">
                            <span class="icon">
                                <img src="Frontend/images/eye.png" alt="order" class="img-fluid w-100">
                            </span>
                            View All Menu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_video mt_120 mt_100 pt_120 pb_120"
        style="background: url({{ asset('storage/' . $item->banner_about_menu) }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-8 col-lg-6 wow fadeInUp">
                    <div class="about_video_text">
                        {!! $item->menu !!}
                        {{-- <h2>Discover Art Of Food With Us.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminu
                            is one doeiusmod tempor incidition ulla mco laboris nisi ut aliquip ex ea commo condorico
                            consectetur adipiscing elitut aliquip.</p> --}}
                        <a class="common_btn" href="{{ route('menu.index') }}">
                            <span class="icon">
                                <img src="Frontend/images/eye.png" alt="order" class="img-fluid w-100">
                            </span>
                            View All Menu
                        </a>
                        <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                            href="{{ $item->url_video }}">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why_choose_us mt_95 xs_mt_75">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-5 wow fadeInUp">
                    <div class="why_choose_text">
                        <h5>Why Choose Us</h5>
                        {{-- <h2>RESTINA is The Best food Restaurant in Town</h2>
                        <p>PIzza hen an unknown printer took a galley of type and scrambled it to make cimen books
                            survived not only five centuries area PIzza hen an unknown a type specimenIt has survived
                            not book.</p> --}}
                            {!! $item->WHY_CHOOSE_US !!}
                        <a class="common_btn" href="{{ route('menu.index') }}">
                            <span class="icon">
                                <img src="Frontend/images/eye.png" alt="order" class="img-fluid w-100">
                            </span>
                            View All Menu
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 wow fadeInLeft">
                            <div class="why_choose_item">
                                <div class="icon">
                                    <img src="Frontend/images/why_choose_icon_1.png" alt="why Choose"
                                        class="img-fluid w-100">
                                </div>
                                <h3>Quality Chees</h3>
                                <p>{{ $item->QUALITY_CHEFS}}</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 wow fadeInRight">
                            <div class="why_choose_item">
                                <div class="icon">
                                    <img src="Frontend/images/why_choose_icon_2.png" alt="why Choose"
                                        class="img-fluid w-100">
                                </div>
                                <h3>Super Fast Delivery</h3>
                                <p>{{ $item->SUPER_FAST_DELIVERY }}</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 wow fadeInLeft">
                            <div class="why_choose_item">
                                <div class="icon">
                                    <img src="Frontend/images/why_choose_icon_3.png" alt="why Choose"
                                        class="img-fluid w-100">
                                </div>
                                <h3>Table reservation</h3>
                                <p>{{ $item->TABLE_RESERVATION}}</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 wow fadeInRight">
                            <div class="why_choose_item">
                                <div class="icon">
                                    <img src="Frontend/images/why_choose_icon_4.png" alt="why Choose"
                                        class="img-fluid w-100">
                                </div>
                                <h3>Online Order</h3>
                                <p>{{ $item->ONLINE_ORDER}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @empty
        <h4>No Data Found!</h4>
    @endforelse
    <section class="shefs pt_110 xs_pt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto wow fadeInUp">
                    <div class="section_heading mb_25">
                        <h2>Meet Our special Chefs </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($chefs as $item)
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_chef">
                        <a href="{{ route('chefs.show',$item ) }}" class="single_chef_img">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="Chef" class="img-fluid w-100">
                            <span>{{$item->email}}</span>
                        </a>
                        <div class="single_chef_text">
                            <a class="title" href="{{ route('chefs.show',$item ) }}">{{$item->name}}</a>
                            <ul>
                                <li><a class="facebook" href="{{$item->Facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="{{$item->Twitter}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="instagram" href="{{$item->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                    <h4>No Data Found!</h4>
                @endforelse
                
                <div class="col-12 about_2_shefs text-center mt_60 wow fadeInUp">
                    <a class="common_btn" href="{{ route('chef.index') }}">
                        <span class="icon">
                            <img src="Frontend/images/eye.png" alt="order" class="img-fluid w-100">
                        </span>
                        View All Chef
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about_2_testimonial testimonial_2 pt_120 xs_pt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 wow fadeInLeft">
                    <div class="testimonial_2_img">
                        <img src="Frontend/images/testimonial_2_img_1.png" alt="testimonial" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="testimonial_2_area">
                        <div class="row testimonial_2_slider">
                            @forelse ($Testimonials as $item )
                            <div class="col-12">
                                <div class="single_testimonial_2">
                                    <span class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <p>{{$item->text}}</p>
                                </div>
                            </div>
                            @empty
                              <h5>No Testimony Available.</h5>
                            @endforelse
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     @foreach ($Information as $item)
    <section class="counter_area_2 mt_120 xs_mt_100" style="background: url(Frontend/images/counter_2_bg.jpg);">
        <div class="counter_area_2_overlay pt_120 xs_pt_100 pb_115 xs_pb_95">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single_counter_2_area">
                            <ul>
                                <li class="wow fadeInUp">
                                    <div class="icon">
                                        <img src="Frontend/images/counter_icon_1.png" alt="counter"
                                            class="img-fluid w-100">
                                    </div>
                                    <h3><span class="counter">{{$item->OUR_CLIENTS}}</span>+</h3>
                                    <p>Our Clients Daily</p>
                                </li>
                                <li class="wow fadeInUp">
                                    <div class="icon">
                                        <img src="Frontend/images/counter_icon_2.png" alt="counter"
                                            class="img-fluid w-100">
                                    </div>
                                    <h3><span class="counter">{{$item->YEARS_EXPERIENCE}}</span>+</h3>
                                    <p>Years experience</p>
                                </li>
                                <li class="wow fadeInUp">
                                    <div class="icon">
                                        <img src="Frontend/images/counter_icon_3.png" alt="counter"
                                            class="img-fluid w-100">
                                    </div>
                                    <h3><span class="counter">{{$item->FRESH_HALAL}}</span>%</h3>
                                    <p>Fresh & Halal</p>
                                </li>
                                <li class="wow fadeInUp">
                                    <div class="icon">
                                        <img src="Frontend/images/counter_icon_4.png" alt="counter"
                                            class="img-fluid w-100">
                                    </div>
                                    <h3><span class="counter">{{$item->TEAM_MEMBER}}</span>+</h3>
                                    <p>Team Member</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <section class="blog_2 mt_110 xs_mt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto wow fadeInUp">
                    <div class="section_heading mb_25">
                        <h2>Our Latest News & Article</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               @forelse ( $Articles as $item )
               <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="single_blog_2">
                    <a href="{{ route('Articles.show', $item) }}" class="single_blog_2_img">
                        <img src="{{ asset('storage/' . $item->photo1) }}" alt="blog" class="img-fluid w-100">
                    </a>
                    <div class="single_blog_2_text">
                        <ul>
                            <li>
                                <a href="{{ route('Articles.show', $item) }}">{{ $item->category->name }}</a>
                            </li>
                            <li>
                                <span>
                                    <img src="Frontend/images/calendar_2.svg" alt="calendar" class="img-fluid w-100">
                                </span>
                                {{ $item->created_at->format('M j, Y') }}
                            </li>
                        </ul>
                        <a class="title" href="{{ route('Articles.show', $item) }}">{{ $item->title }} ?</a>
                        <a class="read_btn" href="{{ route('Articles.show', $item) }}">Read More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
               @empty
                   <h4>No Data Found!</h4>
               @endforelse
                
            </div>
        </div>
    </section>

    <!--==========================
        ABOUT US PAGE 02 END
    ===========================-->



@endsection