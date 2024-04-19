@extends('layouts.header&footer')

@section('content')
    {{-- @include('sweetalert::alert') --}}
    <!--==========================
            BANNER START
        ===========================-->
    <section class="banner" style="background: url(Frontend/images/banner_bg.jpg);">
        <div class="container container_large">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-6 col-lg-6 col-xl-6 col-md-9">
                    <div class="banner_text wow fadeInUp">
                        <h5>Delicious Food </h5>
                        <h1>Special Foods for your Eating </h1>
                        <p>Commodo ullamcorper a lacus vestibulum sed arcu non. Non blandit massa enim
                            Sem viverra aliquet eget sit amet tellus cras</p>
                        {{-- <form>
                            <input type="text" placeholder="Enter Your Location">
                            <div class="banner_btn_area d-flex flex-wrap align-items-center">
                                <button class="common_btn" type="submit">Pickup</button>
                                <span>or</span>
                                <button class="common_btn" type="submit">Delivery</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6 col-xl-6">
                    <div class="banner_img wow fadeInRight">
                        <div class="img">
                            <img src="Frontend/images/banner_img.png" alt="banner" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            BANNER END
        ===========================-->


    <!--==========================
            CATEGORY START
        ===========================-->
    <section class="category pt_130 xs_pt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 wow fadeInUp">
                    <div class="section_heading heading_left mb_50">
                        <h2> Our Popular category</h2>
                    </div>
                </div>
            </div>
            <div class="row category_slider">
                @forelse ($Categories as $Categorie)
                    <div class="col-xl-3 wow fadeInUp">
                        <a href="{{ route('Categories.show', $Categorie) }}" class="category_item">
                            <img src="{{ asset('storage/' . $Categorie->photo) }}" alt="category" class="img-fluid w-100">
                            <h3>{{ $Categorie->name }}</h3>
                        </a>
                    </div>
                @empty
                    <h4>No Category Yet!</h4>
                @endforelse

            </div>
        </div>
    </section>
    <!--==========================
            CATEGORY END
        ===========================-->


    <!--==========================
            ADD BANNER START
        ===========================-->
    <section class="add_banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="add_banner_large" style="background: url(Frontend/images/large_banner_img_1.jpg);">
                        <div class="text">
                            <h3>The best Burger place in town</h3>
                            <a href="{{ route('menu.index') }}"> order now <i class="fas fa-chevron-circle-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 wow fadeInUp">
                    <div class="add_banner_small" style="background: url(Frontend/images/small_banner_img_1.jpg);">
                        <div class="text">
                            <h3>Great Value Mixed Drinks</h3>
                            <a href="{{ route('menu.index') }}"> order now <i class="fas fa-chevron-circle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            ADD BANNER END
        ===========================-->


    <!--==========================
            MENU ITEM START
        ===========================-->
    <section class="menu_item pt_125 xs_pt_85">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto wow fadeInUp">
                    <div class="section_heading mb_45 xs_mb_50">
                        <h2>Delicious Menu</h2>
                    </div>
                </div>
            </div>
            <div id="schedule">
                <div class="colorful-tab-wrapper" id="filter_area">
                    <div class="row mb_15 wow fadeInUp">
                        <div class="col-xxl-8 col-lg-9 m-auto">
                            <ul class="filter_btn_area">


                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="colorful-tab-content active" id="">
                                <div class="row">
                                    @forelse ($products as $item)
                                        <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                                            <div class="single_menu">
                                                <div class="single_menu_img">
                                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="menu"
                                                        class="img-fluid w-100">
                                                    <ul>
                                                        <li><a href="{{ route('products.show', $item) }}"><i
                                                                    class="far fa-eye"></i></a></li>
                                                        <li>
                                                            <form id="{{ $item->id }}" method="POST"
                                                                action="{{ route('wishlist.add', $item) }}">
                                                                @csrf
                                                                <button type="submit" style="background: none">

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
                                                    <a class="category"
                                                        href="{{ route('products.show', $item) }}">{{ $item->Category->name }}</a>
                                                    <a class="title"
                                                        href="{{ route('products.show', $item) }}">{{ $item->name }}</a>
                                                    <p class="descrption">{{ $item->slug }}</p>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <form method="POST" action="{{ route('cart.add', $item) }}">
                                                            @csrf
                                                            <button type="submit" style="background: none">
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
                        <div class="col-12 text-center mt_60">
                            <a class="common_btn" href="{{ route('menu.index') }}">
                                <span class="icon">
                                    <img src="Frontend/images/eye.png" alt="order" class="img-fluid w-100">
                                </span>
                                View All Menu
                            </a>
                        </div>
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
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
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
                                        <span class="icon"><img src="Frontend/images/cart_icon_1.png" alt=""></span>
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
            MENU ITEM END
        ===========================-->


    <!--==========================
            ADD BANNER FULL START
        ===========================-->
    <section class="add_banner_full mt_140 xs_mt_100 pt_155 xs_pt_100 pb_155 xs_pb_100"
        style="background: url(Frontend/images/add_banner_full_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-6 wow fadeInLeft">
                    <div class="add_banner_full_text">
                        <h4>Today special offer</h4>
                        <h2>Delicious Food with us.</h2>
                        <a class="common_btn" href="{{ route('menu.index') }}">
                            <span class="icon">
                                <img src="Frontend/images/cart_icon_1.png" alt="order" class="img-fluid w-100">
                            </span>
                            order now
                        </a>
                        <div class="img">
                            <img src="Frontend/images/add_banner_full_img.png" alt="add banner" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            ADD BANNER FULL END
        ===========================-->


    <!--==========================
            APP DOWNLOAD START
        ===========================-->
    <section class="app_download pt_120 xs_pt_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-5 col-md-6 col-lg-5 wow fadeInLeft">
                    <div class="app_download_img">
                        <img src="Frontend/images/download_img.png" alt="download" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xxl-5 col-md-6 col-lg-6 wow fadeInRight">
                    <div class="app_download_text">
                        <h2>Are you Ready to Start your Order?</h2>
                        <p>Commodo ullamcorper lacus vestibulum sed Non blandit massa enim.</p>
                        <ul class="d-flex flex-wrap">
                            <li>
                                <a class="common_btn" href="#">
                                    <span class="icon">
                                        <img src="Frontend/images/apple_icon.png" alt="order" class="img-fluid w-100">
                                    </span>
                                    Apple Store</a>
                            </li>
                            <li>
                                <a class="common_btn" href="#">
                                    <span class="icon">
                                        <img src="Frontend/images/play_store_icon.png" alt="order"
                                            class="img-fluid w-100">
                                    </span>
                                    Play Story</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            APP DOWNLOAD END
        ===========================-->


    <!--==========================
            CHEFS START
        ===========================-->
    <section class="shefs pt_125 xs_pt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto wow fadeInUp">
                    <div class="section_heading mb_25">
                        <h2>Meet Our special Chefs </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_chef">
                        <a href="chefs_details.html" class="single_chef_img">
                            <img src="Frontend/images/chef_img_1.jpg" alt="Chef" class="img-fluid w-100">
                            <span>Main Chef</span>
                        </a>
                        <div class="single_chef_text">
                            <a class="title" href="chefs_details.html">Nathaneal Down</a>
                            <ul>
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_chef">
                        <a href="chefs_details.html" class="single_chef_img">
                            <img src="Frontend/images/chef_img_2.jpg" alt="Chef" class="img-fluid w-100">
                            <span>Executive Chef</span>
                        </a>
                        <div class="single_chef_text">
                            <a class="title" href="chefs_details.html">Pelican Steve</a>
                            <ul>
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_chef">
                        <a href="chefs_details.html" class="single_chef_img">
                            <img src="Frontend/images/chef_img_3.jpg" alt="Chef" class="img-fluid w-100">
                            <span>Master Chef</span>
                        </a>
                        <div class="single_chef_text">
                            <a class="title" href="chefs_details.html">Dylan Meringue</a>
                            <ul>
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_chef">
                        <a href="chefs_details.html" class="single_chef_img">
                            <img src="Frontend/images/chef_img_4.jpg" alt="Chef" class="img-fluid w-100">
                            <span>Executive Chef</span>
                        </a>
                        <div class="single_chef_text">
                            <a class="title" href="chefs_details.html">Fergus Douchebag</a>
                            <ul>
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt_60 wow fadeInUp">
                    <a class="common_btn" href="{{ route('chefs.index') }}">
                        <span class="icon">
                            <img src="Frontend/images/eye.png" alt="order" class="img-fluid w-100">
                        </span>
                        View All Chef
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            CHEFS END
        ===========================-->


    <!--==========================
            TESTIMONIAL START
        ===========================-->
    <section class="testimonial mt_140 xs_mt_100" style="background: url(Frontend/images/testimonial_bg.jpg);">
        <div class="testimonial_overlay pt_250 xs_pt_100">
            <div class="container mt_20">
                <div class="row">
                    <div class="col-md-9 wow fadeInUp">
                        <div class="testimonial_content">
                            <div class="row testi_slider">
                                <div class="col-12">
                                    <div class="single_testimonial">
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </p>
                                        <p class="description">"I love that solvency lets us manage everything in one
                                            place. It's super helpful to be able to listen to voice samples, upload our
                                            own lists, and find quality salespeople that can grow with our team."</p>
                                        <div class="single_testimonial_footer">
                                            <div class="img">
                                                <img src="Frontend/images/client_img_1.png" alt="clien"
                                                    class="img-fluis w-100">
                                            </div>
                                            <h3>Indigo Violet <span>Co - Founder</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_testimonial">
                                        <p class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </p>
                                        <p class="description">"I love that solvency lets us manage everything in one
                                            place. It's super helpful to be able to listen to voice samples, upload our
                                            own lists, and find quality salespeople that can grow with our team."</p>
                                        <div class="single_testimonial_footer">
                                            <div class="img">
                                                <img src="Frontend/images/client_img_2.png" alt="client"
                                                    class="img-fluis w-100">
                                            </div>
                                            <h3>jihan ahmed <span>Co - Founder</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="testimonial_video">
                            <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/embed/U0e5OuHNksA">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            TESTIMONIAL END
        ===========================-->


    <!--==========================
            COUNTER START
        ===========================-->
    <section class="counter_area">
        <div class="counter_bg pt_30 pb_35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp">
                        <div class="single_counter">
                            <h2 class="counter">45</h2>
                            <span>Dishes</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp">
                        <div class="single_counter">
                            <h2 class="counter">68</h2>
                            <span>Location</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp">
                        <div class="single_counter">
                            <h2 class="counter">32</h2>
                            <span>Chefs</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp">
                        <div class="single_counter">
                            <h2 class="counter">120</h2>
                            <span>Cities</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            COUNTER END
        ===========================-->


    <!--==========================
            BLOG START
        ===========================-->
    <section class="blog pt_110 xs_pt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto wow fadeInUp">
                    <div class="section_heading mb_25">
                        <h2>Our Latest News & Article</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($Articles as $item)
                    <div class="col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="single_blog">
                            <div class="single_blog_img">
                                <img src="{{ asset('storage/' . $item->photo1) }}" alt="blog"
                                    class="img-fluid w-100">
                                <a class="category"
                                    href="{{ route('Articles.show', $item) }}">{{ $item->category->name }}</a>
                            </div>
                            <div class="single_blog_text">
                                <ul>
                                    <li>
                                        <span><img src="Frontend/images/calendar.svg" alt="calendar"
                                                class="img-fluid"></span>
                                        {{ $item->created_at->format('M j, Y') }}
                                    </li>
                                    <li>BY {{ $item->user->name }}</li>
                                </ul>
                                <a class="title" href="{{ route('Articles.show', $item) }}">{{ $item->title }}</a>
                                <a class="read_btn" href="{{ route('Articles.show', $item) }}">Read More <i
                                        class="far fa-arrow-right"></i></a>
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
