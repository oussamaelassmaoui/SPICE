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
                        <h1>Services Details</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">Services Details</a></li>
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
        SERVICE DETAILS START
    ===========================-->
    <section class="service_details pt_120 xs_pt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="service_details_img">
                        <img src="{{ asset('storage/' . $SERVICES->photo) }}" alt="blog details" class="img-fluid w-100">
                    </div>
                    <div class="service_details_text">
                        <h2>{{ $SERVICES->title }}</h2>
                        <p>{!!$SERVICES->text!!} </p>
                        <div class="service_quot d-flex flex-wrap">
                            <p>{!!$SERVICES->text2!!}</p>
                           
                        </div>
                        <p>{!!$SERVICES->text3!!}</p>
                    </div>
                    <div class="accordion faq_accordion service_accordion" id="accordionPanelsStayOpenExample">
                        <h3>Frequently Asked Questions</h3>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    {{ $SERVICES->FAQ1 }}?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p>{{ $SERVICES->rep1 }}.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    {{ $SERVICES->FAQ2 }}?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <p>{{ $SERVICES->rep2 }}.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    {{ $SERVICES->FAQ3 }}?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <p>{{ $SERVICES->rep3 }}.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    {{ $SERVICES->FAQ4 }}?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    <p>{{ $SERVICES->rep4 }}.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFive">
                                    {{ $SERVICES->FAQ5 }} ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingFive">
                                <div class="accordion-body">
                                    <p>{{ $SERVICES->rep5 }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 wow fadeInRight">
                    <div class="blog_sidebar sticky_sidebar">
                        <div class="sidebar_wizard sidebar_search">
                            <h2>Search</h2>
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar_wizard service_category mt_25">
                            <h2>Services Categories</h2>
                            <div class="row">
                                @foreach ($Categories as $item )
                                <div class="col-xl-6 col-sm-6">
                                    <div class="service_category_img">
                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="food" class="img-fluid w-100">
                                        <div class="service_category_text">
                                            <a href="{{ route('list_SERVICES') }}">{{ $item->title }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @foreach ($Settings as $item )
                        <div class="sidebar_banner menu_details_banner mt_25">
                            <img src="{{ asset('storage/' . $item->banner2) }}" alt="offer" class="img-fluid w-100">
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        SERVICE DETAILS END
    ===========================-->


@endsection