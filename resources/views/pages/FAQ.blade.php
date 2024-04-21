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
                        <h1>FAQ</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">FAQ</a></li>
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
        FAQ'S START
    ===========================-->
    <section class="faq_area pt_95 xs_pt_70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 wow fadeInLeft">
                    <div class="accordion faq_accordion" id="accordionPanelsStayOpenExample">
                        @forelse ($Faqs as $item )
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    {{$item->questions}}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p>{{$item->answers}}.</p>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h4>No Data Found!</h4>
                        @endforelse
                        
                    </div>
                </div>
                <div class="col-xl-5 my-auto wow fadeInRight">
                    <div class="faq_img">
                        <img src="Frontend/images/faq_1.png" alt="faq" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="faq_contact mt_120 xs_mt_100 pt_120 xs_pt_80 pb_120 xs_pb_80">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6 wow fadeInLeft">
                        <div class="faq_contact_img">
                            <img src="Frontend/images/faq_contact_img.png" alt="FAQ's" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInRight">
                        <div class="faq_contact_form contact_form">
                            <h2>Have Any question</h2>
                            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email"  name="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea rows="7" name="message" placeholder="Write Message..."></textarea>
                                        <button class="common_btn">Submit now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        FAQ'S END
    ===========================-->


@endsection