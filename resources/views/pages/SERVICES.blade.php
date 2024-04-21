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
                    <h4>No Data Found!</h4>
                @endforelse
               
            </div>
            <div class="pagination_area mt_60 wow fadeInUp">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="{{ $SERVICES->previousPageUrl() }}" aria-label="Previous">
                                <i class="far fa-arrow-left"></i>
                            </a>
                        </li>
                        @foreach ($SERVICES->getUrlRange(1, $SERVICES->lastPage()) as $page => $url)
                        <li class="page-item"><a class="page-link{{ $SERVICES->currentPage() === $page ? ' active' : '' }}" href="{{ $url }}">{{ $page }}</a></li>
                        @endforeach
                        <li class="page-item">
                            <a class="page-link" href="{{ $SERVICES->nextPageUrl() }}" aria-label="Next">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--==========================
        SERVICE END
    ===========================-->


@endsection