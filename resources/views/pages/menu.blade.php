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
                        <h1>menu</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">menu </a></li>
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
        MENU STYLE 02 START
    ===========================-->
    <section class="breakfast_menu mt_120 xs_mt_100">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading mb_25">
                        <h5>Menu Book</h5>
                        <h2>Our Breakfast Menu</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($products as $item )
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_menu">
                        <div class="single_menu_img">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="menu" class="img-fluid w-100">
                            <ul>
                                <li><a href="{{ route('products.show',$item ) }}"><i class="far fa-eye"></i></a></li>
                                <li>
                                    <form id="{{ $item->id }}"  method="POST" action="{{ route('wishlist.add', $item) }}">
                                        @csrf
                                        <button  type="submit"  style="background: none">
                                            
                                            <a   ><i class="far fa-heart"></i></a>
                                        </button>
                                    </form>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="single_menu_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <a class="category" href="{{ route('products.show',$item ) }}">{{$item->Category->name}}</a>
                            <a class="title" href="{{ route('products.show',$item ) }}">{{ $item->name }}</a>
                            <p class="descrption">{{ $item->slug }}</p>
                            <div class="d-flex flex-wrap align-items-center">
                                <form method="POST" action="{{ route('cart.add', $item) }}">
                                    @csrf
                                    <button  type="submit"  style="background: none">
                                <a class="add_to_cart">Add To Cart</a>
                                    </button>
                                </form>
                                <h3>${{ $item->price }} <del> ${{ $item->old_price }}</del></h3>
                            </div>
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

    <section class="new_recipes mt_120 xs_mt_100 pt_120 xs_pt_100 pb_115 xs_pb_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 wow fadeInLeft">
                    <div class="new_recipes_text">
                        @foreach ($Settings as $item )
                        <div class="section_heading heading_left mb_25">
                            <h5>New Recipes</h5>
                            {!!$item->New_Recipes!!}
                        </div>
                         @endforeach
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row recipes_slider">
                        @forelse ($products as $item )
                        <div class="col-xl-4 wow fadeInUp">
                            <div class="new_recipes_item">
                                <img src="{{ asset('storage/' . json_decode($item->images)[0]) }}" alt="recipes" class="img-fluid w-100">
                                <div class="text">
                                    <a href="{{ route('products.show',$item ) }}">{{ $item->name }}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h4>No Data Found!</h4>
                        @endforelse
                       
                    </div>
                </div>
            </div>
            
        </div>
    </section>

  

    <section class="breakfast_menu mt_120 xs_mt_100">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-8 m-auto">
                    <div class="section_heading mb_25">
                        <h5>Menu New</h5>
                        <h2>RECENT PRODUCTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($RECENT_PRODUCTS as $item )
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_menu">
                        <div class="single_menu_img">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="menu" class="img-fluid w-100">
                            <ul>
                                <li><a href="{{ route('products.show',$item ) }}"><i class="far fa-eye"></i></a></li>
                                <li>
                                    <form id="{{ $item->id }}"  method="POST" action="{{ route('wishlist.add', $item) }}">
                                        @csrf
                                        <button  type="submit"  style="background: none">
                                            
                                            <a><i class="far fa-heart"></i></a>
                                        </button>
                                    </form>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="single_menu_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <a class="category" href="{{ route('products.show',$item ) }}">{{$item->Category->name}}</a>
                            <a class="title" href="{{ route('products.show',$item ) }}">{{ $item->name }}</a>
                            <p class="descrption">{{ $item->slug }}</p>
                            <div class="d-flex flex-wrap align-items-center">
                                <form method="POST" action="{{ route('cart.add', $item) }}">
                                    @csrf
                                    <button  type="submit"  style="background: none">
                                <a class="add_to_cart">Add To Cart</a>
                                    </button>
                                </form>
                                <h3>${{ $item->price }} <del> ${{ $item->old_price }}</del></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <h4>No Data Found!</h4>
                @endforelse
              
            </div>
        </div>
    </section>


@endsection