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
            <div class="row mt_95 xs_mt_75">
                <div class="col-xl-4 col-md-6 wow fadeInUp">
                    <div class="contact_info">
                        <div class="icon">
                            <img src="{{ asset('Frontend/images/location_2.png') }}" alt="location" class="img-fluid w-100">
                        </div>
                        <div class="text">
                            <p>16/A, Romadan House City Tower New York, United States</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp">
                    <div class="contact_info">
                        <div class="icon">
                            <img src="{{ asset('Frontend/images/call_icon_3.png') }}" alt="call" class="img-fluid w-100">
                        </div>
                        <div class="text">
                            <a href="callto:123456789">+990 123 456 789</a>
                            <a href="callto:123456789">+990 456 123 789</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp">
                    <div class="contact_info">
                        <div class="icon">
                            <img src="{{ asset('Frontend/images/mail_icon.png') }}" alt="mail" class="img-fluid w-100">
                        </div>
                        <div class="text">
                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                            <a href="mailto:support@RESTINAgmail.com">support@RESTINAgmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact_map mt_120 xs_mt_100 wow fadeInUp">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.8776746534986!2d-77.027541687759!3d38.903912546200644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7931d95b707%3A0x16e85cf5a8a5fdce!2sMarriott%20Marquis%20Washington%2C%20DC!5e0!3m2!1sen!2sbd!4v1700767199965!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--==========================
        CONTACT END
    ===========================-->


@endsection