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
                        <h1>Our Chefs</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">Our Chefs</a></li>
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
        CHEFS START
    ===========================-->
    <section class="shefs pt_95 xs_pt_70">
        <div class="container">
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
                    <h4 style="color:red; text-align:center;">No Data Found!</h4>
                @endforelse


                <div class="pagination_area mt_60 wow fadeInUp">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="far fa-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!--==========================
        CHEFS END
    ===========================-->


@endsection