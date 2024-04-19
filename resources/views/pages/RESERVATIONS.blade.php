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
                        <h1>Reservations</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">Reservations</a></li>
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
        RESERVATION PAGE START
    ===========================-->
    <section class="reservation_page pt_120 xs_pt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="reservation_img">
                        <img src="Frontend/images/reservation_img_2.jpg" alt="reservation" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="reservation_form">
                        <h2>ONLINE RESERVATION</h2>
                        <form action="{{ route('Reservations.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="reservation_form_input">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reservation_form_input">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reservation_form_input">
                                        <input type="text" name="Phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reservation_form_input">
                                        <input type="date" name="date"  required  autofocus min="<?= date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reservation_form_input">
                                        {{-- <select class="select_2" name="time">
                                            <option value="AL">Select Time</option>
                                            <option value="">08.00 am to 09.00 am</option>
                                            <option value="">09.00 am to 10.00 am</option>
                                            <option value="">11.00 am to 12.00 am</option>
                                            <option value="">02.00 am to 03.00 am</option>
                                            <option value="">05.00 am to 06.00 am</option>
                                        </select> --}}
                                        <input type="time" name="time" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reservation_form_input">
                                        <select class="select_2" name="Person">
                                            <option value="AL">Select Person</option>
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="3">3 Person</option>
                                            <option value="4">4 Person</option>
                                            <option value="5">5 Person</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="reservation_form_input">
                                        <textarea rows="7" name="message" placeholder="Write Message..."></textarea>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Select to subscribe to our newsletter and updates and we will send you
                                                all updates about our services.
                                            </label>
                                        </div>
                                        <button class="common_btn" type="submit">Make A reserve</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        RESERVATION PAGE END
    ===========================-->


    <!--==========================
        GALLERY START
    ===========================-->
    <section class="gallery mt_120 xs_mt_100">
        <div class="row gallery_slider">
            @forelse ($products as $item )
            <div class="col-xl-3 wow fadeInUp">
                <div class="gallery_item">
                    <img src="{{ asset('storage/' . json_decode($item->images)[0]) }}" alt="gallery" class="img-fluid w-100">
                    <div class="text">
                        <a class="title" href="{{ route('products.show',$item ) }}">{{ $item->name }}</a>
                    </div>
                </div>
            </div>
            @empty
                <h4>No Products Found!</h4>
            @endforelse
          
        </div>
    </section>
    <!--==========================
        GALLERY END
    ===========================-->


    <!--==========================
        BRANCH 2 START
    ===========================-->
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
                @forelse ($Articles as $item)
                    <div class="col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="single_blog">
                            <div class="single_blog_img">
                                <img src="{{ asset('storage/' . $item->photo1) }}" alt="blog"
                                    class="img-fluid w-100">
                                <a class="category"
                                    href="{{ route('Articles.show', $item) }}">{{ $item->category->name }}</a>
                            </div>
                            <div class="single_blog_text">
                                <ul>
                                    <li>
                                        <span><img src="Frontend/images/calendar.svg" alt="calendar"
                                                class="img-fluid"></span>
                                        {{ $item->created_at->format('M j, Y') }}
                                    </li>
                                    <li>BY {{ $item->user->name }}</li>
                                </ul>
                                <a class="title" href="{{ route('Articles.show', $item) }}">{{ $item->title }}</a>
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
    <!-- BRANCH POPUT END -->

    <!--==========================
        BRANCH 2 END
    ===========================-->


@endsection