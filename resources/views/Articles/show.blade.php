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
                        <h1>blog details</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">blog details</a></li>
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
        BLOG DETAILS START
    ===========================-->
    <section class="blog_details mt_120 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="blog_details_img">
                        <img src="{{ asset('storage/' . $Article->photo1) }}" alt="blog details" class="img-fluid w-100">
                    </div>
                    <div class="blog_details_header">
                        <ul class="left_info">
                            <li><span>{{$Article->category->name}}</span></li>
                            <li><i class="far fa-user-circle"></i>{{$Article->user->name}}</li>
                            <li><i class="far fa-calendar-alt"></i>{{$Article->created_at->format('M j, Y')}}</li>
                        </ul>
                       
                    </div>
                    <div class="blog_details_text">
                        <h2>{{$Article->title}}</h2>
                        <p>{!! $Article->text1 !!} .</p>

                      

                        <div class="quot_text">
                            <p> {{$Article->slug}} .</p>
                            
                        </div>

                        <ul>
                            {!! $Article->text2 !!}
                            
                        </ul>

                        <div class="row mb_45">
                            <div class="col-xl-6 col-sm-6">
                                <div class="details_center_img">
                                    <img src="{{ asset('storage/' . $Article->photo3) }}" alt="blog details"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="details_center_img">
                                    <img src="{{ asset('storage/' . $Article->image) }}" alt="blog details"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <p> {!! $Article->text3 !!} .</p>
                      
                    </div>
                   
                    
                </div>
                <div class="col-lg-4 col-md-8 wow fadeInRight">
                    <div class="blog_sidebar sticky_sidebar">
                        
                        <div class="sidebar_wizard sidebar_category mt_25">
                            <h2>Categories</h2>
                            <ul>
                                @foreach ($Categories as $Categorie )
                                <li><a href="{{ route('Categories.show',$Categorie) }}">{{$Categorie->name}} <span></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar_wizard sidebar_post mt_25">
                            <h2>Recent Paost</h2>
                            <ul>
                               @foreach ($Post as $item )
                               <li>
                                <div class="img">
                                    <img src="{{ asset('storage/' . $item->photo1) }}" alt="post"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <p><i class="far fa-calendar-alt"></i> {{$item->created_at->format('M j, Y')}}</p>
                                    <a class="title" href="{{ route('Articles.show',$item ) }}">{{$item->title}}</a>
                                </div>
                            </li>
                               @endforeach
                               
                            </ul>
                        </div>
                        <div class="sidebar_wizard sidebar_tags mt_25">
                            <h2>Categories</h2>
                            <ul>
                                @foreach ($Categories as $Categorie )
                                <li><a href="{{ route('Categories.show',$Categorie) }}">{{$Categorie->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar_banner menu_details_banner mt_25">
                            <img src="{{ asset('Frontend/images/details_banner_img.png') }}" alt="offer" class="img-fluid w-100">
                            <div class="text">
                                <h5>Get Up to 50% Off</h5>
                                <h3>Burger Combo Pack</h3>
                                <a href="{{ route('menu.index') }}">
                                    <span><img src="{{ asset('Frontend/images/cart_icon_2.png') }}" alt="cart"
                                            class="img-fluid w-100"></span>
                                    shop now
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        BLOG DETAILS END
    ===========================-->


@endsection