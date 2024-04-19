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
                        <h1>blogs</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">blogs</a></li>
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
        BLOGS START
    ===========================-->
    <section class="blog_page mt_95 xs_mt_70">
        <div class="container">
            <div class="row">
              @forelse ($Articles as $item)
              <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="single_blog_2">
                    <a href="{{ route('Articles.show',$item ) }}" class="single_blog_2_img">
                        <img src="{{ asset('storage/' . $item->photo1) }}" alt="blog" class="img-fluid w-100">
                    </a>
                    <div class="single_blog_2_text">
                        <ul>
                            <li>
                                <a>{{$item->category->name}}</a>
                            </li>
                            <li>
                                <span>
                                    <img src="Frontend/images/calendar_2.svg" alt="calendar" class="img-fluid w-100">
                                </span>
                                {{$item->created_at->format('M j, Y')}}
                            </li>
                        </ul>
                        <a class="title" href="{{ route('Articles.show',$item ) }}">{{$item->title}}</a>
                        <a class="read_btn" href="{{ route('Articles.show',$item ) }}">Read More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
              @empty
                  <h4>No Article Found!</h4>
              @endforelse
               
            </div>
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
    </section>
    <!--==========================
        BLOGS END
    ===========================-->


@endsection