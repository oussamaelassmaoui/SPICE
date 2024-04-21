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
                        <h1>contact</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">contact</a></li>
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
        CONTACT START
    ===========================-->
    <section class="contact_us pt_120 xs_pt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 wow fadeInLeft">
                    <div class="contact_img">
                        <img src="{{ asset('Frontend/images/contact_img.jpg') }}" alt="contact" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="contact_form">
                        <h2>Get In Touch</h2>
                        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Email">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-md-12">
                                    <textarea rows="7" name="message" placeholder="Write Message..."></textarea>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Select to subscribe to our newsletter and updates and we will send you
                                            all updates about our services.
                                        </label>
                                    </div>
                                    <button class="common_btn">Submit now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

           @forelse ($Information as $item )
           <div class="row mt_95 xs_mt_75">
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="contact_info">
                    <div class="icon">
                        <img src="{{ asset('Frontend/images/location_2.png') }}" alt="location" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <p>{{$item->address}} </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="contact_info">
                    <div class="icon">
                        <img src="{{ asset('Frontend/images/call_icon_3.png') }}" alt="call" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <a href="callto:{{$item->Mobile1}}">{{$item->Mobile1}}</a>
                        <a href="callto:{{$item->Mobile2}}">{{$item->Mobile2}}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="contact_info">
                    <div class="icon">
                        <img src="{{ asset('Frontend/images/mail_icon.png') }}" alt="mail" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <a href="mailto:{{$item->email1}}">{{$item->email1}}</a>
                        <a href="mailto:{{$item->email2}}">{{$item->email2}}</a>
                    </div>
                </div>
            </div>
        </div>
           
        </div>
        <div class="contact_map mt_120 xs_mt_100 wow fadeInUp">
            <iframe
                src="{{$item->iframe_map}}"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        @empty
               <h4>No Data Found!</h4>
           @endforelse
    </section>
    <!--==========================
        CONTACT END
    ===========================-->


@endsection