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
                        <h1>menu </h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">menu</a></li>
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
            MENU STYLE 03 START
        ===========================-->
    <section class="menu_grid_view mt_120 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 order-2 wow fadeInLeft">
                    <div class="menu_sidebar sticky_sidebar">
                        <div class="sidebar_wizard sidebar_search">
                            <h2>Search</h2>
                            <form  method="get"  action="/search">
                                <input type="search" name="search"  placeholder="Search here..." value="{{isset($search)? $search : ''}}">
                                <button type="submit" value="Search"><i class="far fa-search"></i></button>
                            </form>
                            
                        </div>

                        <div class="sidebar_wizard sidebar_category mt_25">
                            <h2>Categories</h2>
                            <ul>
                                @forelse ($Categories as $Categorie)
                                    <li><a href="{{ route('Categories.show', $Categorie) }}">{{ $Categorie->name }}
                                            </a></li>
                                @empty
                                    <h4>No Category Yet!</h4>
                                @endforelse


                            </ul>
                        </div>
                        <div class="sidebar_wizard sidebar_tags mt_25">
                            <h2>Categories</h2>
                            <ul>
                                @forelse ($Categories as $Categorie)
                                    <li><a href="{{ route('Categories.show', $Categorie) }}">{{ $Categorie->name }}</a></li>
                                @empty
                                    <h4>No Category Yet!</h4>
                                @endforelse


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 order-lg-2">
                    <div class="row">
                        @forelse ($products as $item)
                            <div class="col-xl-4 col-sm-6 wow fadeInUp">
                                <div class="single_menu">
                                    <div class="single_menu_img">
                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="menu"
                                            class="img-fluid w-100">
                                        <ul>
                                            <li><a href="{{ route('products.show', $item) }}"><i class="far fa-eye"></i></a>
                                            </li>
                                            <li>
                                                <form id="{{ $item->id }}"  method="POST" action="{{ route('wishlist.add', $item) }}">
                                                    @csrf
                                                    <button  type="submit"  style="background: none">
                                                        
                                                        <a  ><i class="far fa-heart"></i></a>
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
                                        <a class="category"
                                            href="{{ route('products.show', $item) }}">{{ $item->Category->name }}</a>
                                        <a class="title"
                                            href="{{ route('products.show', $item) }}">{{ $item->name }}</a>
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
                            <h4>No Products Found!</h4>
                        @endforelse



                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection
