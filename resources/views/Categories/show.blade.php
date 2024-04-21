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
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button type="submit"><i class="far fa-search"></i></button>
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
                            <h4>No Category Yet!</h4>
                        @endforelse



                    </div>
                    <div class="pagination_area mt_35 xs_mb_60 wow fadeInUp">
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
                            <img src="Frontend/images/popup_cart_img.jpg" alt="menu" class="img-fluid w-100">
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
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="large" checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
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
                                        <span class="icon"><img src="Frontend/images/cart_icon_1.png"
                                                alt=""></span>
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
    <!--==========================
            MENU STYLE 03 END
        ===========================-->
@endsection
