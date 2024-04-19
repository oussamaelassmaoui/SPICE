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
                        <h1>Our Services</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">Our Services</a></li>
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
        SERVICE START
    ===========================-->
    <section class="service_area pt_95 xs_pt_75">
        <div class="container">
            <div class="row">
                @forelse ($SERVICES as $item )
                <div class="col-lg-4 col-sm-6 wow fadeInUp">
                    <div class="service_item">
                        <img src="{{ asset('storage/' . $item->photo) }}" alt="img" class="img-fluid w-100">
                        <div class="service_item_overly">
                            <div class="service_item_icon">
                                <img src="Frontend/images/fress.png" alt="img" class="img-fluid w-100">
                            </div>
                            <h2>{{ $item->title }}</h2>
                            <p>{!! $item->text3 !!}</p>
                            <a class="common_btn" href="{{ route('SERVICES.show', $item) }}">
                                <span class="icon">
                                    <img src="Frontend/images/eye.png" alt="order" class="img-fluid w-100">
                                </span>
                                View All Details
                            </a>

                        </div>
                    </div>
                </div>
                @empty
                    
                @endforelse
               
            </div>
        </div>
    </section>
    <!--==========================
        SERVICE END
    ===========================-->


@endsection