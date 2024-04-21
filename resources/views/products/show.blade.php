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
                        <h1>menu details</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">menu details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
                BREADCRUMB AREA END
            ===========================-->


    <!--=========================
                MENU DETAILS START
            ==========================-->
    <section class="menu_details pt_120 xs_pt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-8 col-lg-5 wow fadeInLeft">
                    <div class="menu_det_slider_area sticky_sidebar">
                        <div class="row slider-for">
                            @foreach (json_decode($product->images) as $image)
                                <div class="col-12">
                                    <div class="details_large_img">
                                        <img src="{{ asset('storage/' . $image) }}" alt="slider" class="img-fluid w-100">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row slider-nav">
                            @foreach (json_decode($product->images) as $image)
                                <div class="col-xl-3">
                                    <div class="details_small_img">
                                        <img src="{{ asset('storage/' . $image) }}" alt="slider" class="img-fluid w-100">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-xl-5 col-md-8 col-lg-7 wow fadeInUp">
                    <div class="menu_det_text">
                        <h2 class="details_title">{{ $product->name }}</h2>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>Review ({{$productsWithReviewCount}})</span>
                        </p>
                        <p class="price">$ {{ $product->price }} <del>$ {{ $product->old_price }} </del></p>
                        <div class="details_short_description">
                            <h3>Description</h3>
                            <p>{{ $product->slug }}</p>
                        </div>
                        <form method="POST" action="{{ route('cart.add', $product) }}">
                            @csrf
                             @if (!$product->sizes->isEmpty())
                        <div class="details_size">
                            <h5>select size</h5>
                            @foreach ($product->sizes as $item)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="{{ $item->name }}" name="size" id="large"
                                        checked>
                                    <label class="form-check-label"  for="large">
                                        {{ $item->name }}<span>+ ${{ $item->price }}</span>
                                    </label>
                                </div>
                            @endforeach

                        </div>
                        @endif
                        @if (!$product->options->isEmpty())
                        <div class="details_size">
                            <h5>select option <span>(optional)</span></h5>
                            @foreach ($product->options as $item)
                                <div class="form-check">
                
                                    <input class="form-check-input" type="radio" value="{{ $item->name }}" name="option" id="coca-cola"
                                        checked>
                                    <label class="form-check-label"  for="coca-cola">
                                        {{ $item->name }}<span>+ ${{ $item->price }}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="details_quentity">
                            <div class="quentity_btn_area d-flex flex-wrap align-items-center">
                                <div class="quentity_btn">
                                    <a class="btn btn-danger" onclick="decrementQuantity()"><i class="fal fa-minus"></i></a>
                                    <input type="text" id="quantity" name="quantity" value="1">
                                    <a class="btn btn-success" onclick="incrementQuantity()"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="details_cart_btn">
                            <button  type="submit"  style="background: none"> 
                            <a class="common_btn">
                                <span class="icon">
                                    <img src="{{ asset('Frontend/images/cart_icon_1.png') }}" alt="order"
                                        class="img-fluid w-100">
                                </span>
                                add to cart
                            </a>
                        </button>
                        </form> 
                            <form id="{{ $product->id }}"  method="POST" action="{{ route('wishlist.add', $product) }}">
                                @csrf
                                <button  type="submit"  style="background: none">
                                    
                                    <a class="love"><i class="far fa-heart"></i></a>
                                </button>
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 col-md-8 d-lg-none d-xl-block wow fadeInRight">
                    <div class="sticky_sidebar">
                        {{-- <div class="menu_details_offer"> --}}
                        <div class="sidebar_wizard sidebar_category ">
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
                        {{-- </div> --}}
                        <br>
                        @foreach ($Settings as $item )
                        <div class="menu_details_banner">
                            <img src="{{ asset('storage/' . $item->banner1) }}" alt="offer"
                                class="img-fluid w-100">
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
            <div class="row mt_120 xs_mt_100 wow fadeInUp">
                <div class="col-12">
                    <div class="menu_det_content_area">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Description</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">Reviews</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="menu_det_description">
                                    <p>{!! $product->description !!}</p>
                                    


                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab" tabindex="0">
                                <div class="menu_det_review_area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h2>({{$productsWithReviewCount}}) Reviews</h2>
                                            @foreach ($Reviews as $item )
                                            <div class="single_review">
                                                <div class="img">
                                                    @if (auth()->check() && auth()->user()->photo)
                                                    <img src="{{ asset('storage/profile_pictures/' . $item->user->photo) }}" alt="dashboard" class="rounded-circle wh-54">
                                                @else
                                                    <img src="{{ asset('Frontend/images/SPICE.jpg') }}" alt="dashboard" class="rounded-circle wh-54">
                                                @endif
                                                    {{-- <img src="{{ asset('Frontend/images/client_img_1.png') }}"
                                                        alt="Reviewer" class="img-fluid w-100"> --}}
                                                </div>
                                               
                                                <div class="text">
                                                    <h4>{{$item->user->name}}<span>{{$item->created_at->format('M j, Y')}} </span></h4>
                                                    <span class="rating">
                                                        <div class="product-rating" style="width:{{ $item->rating }}9px">
                                                        </div>
                                                    </span>
                                                    <p>{{$item->content}}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                            <div class="pagination_area mt_30">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <i class="far fa-arrow-left"></i>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link active"
                                                                href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <i class="far fa-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="review_input_area">
                                                <h2>Write A Review</h2>
                                                <style>
                                                    .rating>label {
                                                        justify-content: center;
                                                    }

                                                    .rating:not(:checked)>input {
                                                     
                                                    display: none
                                                    }

                                                    .rating:not(:checked)>label {
                                                        float:right;
                                                        cursor: pointer;
                                                        font-size: 30px;
                                                    }

                                                    .rating:not(:checked)>label>svg {
                                                        fill: #666;
                                                        transition: fill 0.3s ease;
                                                    }

                                                    .rating>input:checked~label>svg {
                                                        fill: #ffa723;
                                                    }

                                                    .rating:not(:checked)>label:hover~label>svg,
                                                    .rating:not(:checked)>label:hover>svg {
                                                        fill: #ff9e0b;
                                                    }

                                                    #star1:hover~label>svg,
                                                    #star1:hover>svg {
                                                        fill: #a23c3c !important;
                                                    }

                                                    #star2:hover~label>svg,
                                                    #star2:hover>svg {
                                                        fill: #99542d !important;
                                                    }

                                                    #star3:hover~label>svg,
                                                    #star3:hover>svg {
                                                        fill: #9f7e18 !important;
                                                    }

                                                    #star4:hover~label>svg,
                                                    #star4:hover>svg {
                                                        fill: #22885e !important;
                                                    }

                                                    #star5:hover~label>svg,
                                                    #star5:hover>svg {
                                                        fill: #7951ac !important;
                                                    }

                                                    #star1:checked~label>svg {
                                                        fill: #ef4444;
                                                    }

                                                    #star2:checked~label>svg {
                                                        fill: #e06c2b;
                                                    }

                                                    #star3:checked~label>svg {
                                                        fill: #eab308;
                                                    }

                                                    #star4:checked~label>svg {
                                                        fill: #19c37d;
                                                    }

                                                    #star5:checked~label>svg {
                                                        fill: #ab68ff;
                                                    }
                                                </style>
                                                <form action="{{ route('reviews.store') }}" method="POST">

                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <div class="center">
                                                        <div class="rating">
                                                            <input type="radio" id="star5" name="rating"
                                                                value="5" />
                                                            <label title="Excellent!" for="star5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                    viewBox="0 0 576 512">
                                                                    <path
                                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                                    </path>
                                                                </svg>
                                                            </label>
                                                            <input value="4" name="rating" id="star4"
                                                                type="radio" />
                                                            <label title="Great!" for="star4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                    viewBox="0 0 576 512">
                                                                    <path
                                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                                    </path>
                                                                </svg>
                                                            </label>
                                                            <input value="3" name="rating" id="star3"
                                                                type="radio" />
                                                            <label title="Good" for="star3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                    viewBox="0 0 576 512">
                                                                    <path
                                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                                    </path>
                                                                </svg>
                                                            </label>
                                                            <input value="2" name="rating" id="star2"
                                                                type="radio" />
                                                            <label title="Okay" for="star2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                    viewBox="0 0 576 512">
                                                                    <path
                                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                                    </path>
                                                                </svg>
                                                            </label>
                                                            <input value="1" name="rating" id="star1"
                                                                type="radio" />
                                                            <label title="Bad" for="star1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                    viewBox="0 0 576 512">
                                                                    <path
                                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                                    </path>
                                                                </svg>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <br><br>
                                                    <div class="review_input_box">
                                                        
                                                        <textarea rows="5" name="content" placeholder="Write your review"></textarea>
                                                    </div>
                                                    <button type="submit" class="common_btn">Submit Review
                                                        <span></span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                MENU DETAILS END
            ==========================-->


    <!--=========================
                RELATED MENU START
            ==========================-->
    <section class="related_menu pt_105 xs_pt_85">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5">
                    <div class="section_heading heading_left mb_25">
                        <h2>Related food</h2>
                    </div>
                </div>
            </div>
            <div class="row related_slider">
                @forelse ($RECENT_PRODUCTS as $item)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                        <div class="single_menu">
                            <div class="single_menu_img">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="menu"
                                    class="img-fluid w-100">
                                <ul>
                                    <li><a href="{{ route('products.show', $item) }}"><i class="far fa-eye"></i></a></li>
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
                                <a class="title" href="{{ route('products.show', $item) }}">{{ $item->name }}</a>
                                <p class="descrption">{{ $item->slug }}</p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <form method="POST" action="{{ route('cart.add', $product) }}">
                                        @csrf
                                        <button  type="submit"  style="background: none">
                                    <a class="add_to_cart" >Add
                                        To Cart</a>
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

    <!-- CART POPUT START -->
    {{-- <div class="cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="cart_popup_img">
                            <img src="{{ asset('Frontend/images/popup_cart_img.jpg') }}" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large2"
                                        checked>
                                    <label class="form-check-label" for="large2">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium2">
                                    <label class="form-check-label" for="medium2">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small2">
                                    <label class="form-check-label" for="small2">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola2">
                                    <label class="form-check-label" for="coca-cola2">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up2">
                                    <label class="form-check-label" for="7up2">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li>
                                    <a class="common_btn" href="#">
                                        <span class="icon"><img src="{{ asset('Frontend/images/cart_icon_1.png') }}" alt=""></span>
                                        add to cart
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- CART POPUT END -->
    <!--=========================
                RELATED MENU END
            ==========================-->
            <script>
                function incrementQuantity() {
                    var quantityInput = document.getElementById('quantity');
                    var currentQuantity = parseInt(quantityInput.value);
                    quantityInput.value = currentQuantity + 1;
                }
            
                function decrementQuantity() {
                    var quantityInput = document.getElementById('quantity');
                    var currentQuantity = parseInt(quantityInput.value);
                    if (currentQuantity > 1) {
                        quantityInput.value = currentQuantity - 1;
                    }
                }
            </script>
            
@endsection
