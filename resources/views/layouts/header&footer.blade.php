<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/restina/html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 02:04:44 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>SPICE</title>
    <link rel="icon" type="image/png" href="{{ asset('Frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/ranger_slider.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/scroll_button.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom_spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/colorfulTab.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/jquery.animatedheadline.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/responsive.css') }}">
</head>

<body>

    <!--==========================
        POPUP SUBSCRIBE START
    ===========================-->
    {{-- <section class="popup_subscribe_area">
        <div class="popup_subscribe_box">
            <div class="row">
                <div class="col-md-6">
                    <div class="popup_subscribe_img">
                        <img src="{{ asset('Frontend/images/popup_subscribe_img.jpg') }}" alt="subscribe" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="popup_subscribe_form">
                        <span class="close_popup"><i class="far fa-times"></i></span>
                        <h2>Subscibe for the Updates!</h2>
                        <input type="text" placeholder="Enter Your Email Adress">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the <a href="privacy_policy.html">Privacy Policy</a>.
                            </label>
                        </div>
                        <button type="submit" class="common_btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==========================
        POPUP SUBSCRIBE END
    ===========================-->


    <!--==========================
        HEADER START
    ===========================-->
    <header>
        <div class="container container_large">
            <div class="row">
                <div class="col-xl-6 col-md-6 d-none d-md-block">
                    <div class="header_left">
                        <p><i class="far fa-truck"></i> Free Express shipping over $200!</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="header_right">
                        <ul>
                           


                            @guest
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">
                                        Sign In
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('register') }}">
                                        Sign Up
                                    </a>
                                </li>
                            @else
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('login') }}" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-user"></i> {{ auth()->user()->name }}
                                    </a>
                                </li> --}}
                                          <li>
                                <a href="{{ route('profile') }}">
                                    <span><img src="{{ asset('Frontend/images/user_icon.png') }}" alt="user"
                                            class="img-fluid w-100"></span>
                                    My Account
                                </a></li>
                            @endguest
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==========================
        HEADER END
    ===========================-->


    <!--==========================
        MENU START
    ===========================-->
   
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container container_large">
            @foreach ($Settings as $item )
            <a class="navbar-brand" href="/">
                <img src="{{ asset('storage/' . $item->logo) }}" alt="RESTINA" class="img-fluid w-100">
            </a>
            @endforeach
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars bar_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('about_list')}}">About</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('menu.index') }}">Menu </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('Reservations.index') }}">Reservations</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('list_SERVICES') }}">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('BLOGS.index') }}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('contact.create') }}">Contact</a>
                    </li>
                </ul>
                <ul class="menu_right">
                    <li>
                        <a class="menu_search"><i class="far fa-search"></i></a>
                    </li>
                    <li>
                        <a class="menu_cart" href="{{ route('cart.index') }}"><i class="far fa-shopping-basket"></i> <span
                                class="qnty">{{ $totalCartCount }}</span></a>
                    </li>
                    <li>
                        <a class="menu_order common_btn" href="{{ route('menu.index') }}">
                            <span class="icon">
                                <img src="{{ asset('Frontend/images/cart_icon_1.png') }}" alt="order" class="img-fluid w-100">
                            </span>
                            order now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
    <div class="menu_search_area">
        <form method="get"  action="/search">
            <input type="search" name="search" placeholder="Search Item..." value="{{isset($search)? $search : ''}}">
            <button class="common_btn" type="submit" value="Search">Search</button>
            <span class="close_search"><i class="far fa-times"></i></span>
        </form>
        
    </div>

    
    <!--==========================
        MENU END
    ===========================-->

    <main>
        @yield('content')
    </main>


    <!--==========================
        FOOTER START
    ===========================-->
    <footer class="pt_100 mt_120 xs_mt_100">
        <div class="container">
            @forelse ($Information as $item )    
            <div class="row justify-content-between wow fadeInUp">
                <div class="col-lg-3 col-md-4">
                    <div class="footer_info">
                        @foreach ($Settings as $se )
                            <a class="footer_logo" href="/">
                            <img src="{{ asset('storage/' . $se->logo) }}" alt="RESTINA" class="img-fluid w-100">
                        </a>
                        @endforeach
                        
                        <p>{{$item->address}}.</p>
                        <ul>
                            <li><a class="facebook" href="{{$item->Facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="{{$item->Twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="{{$item->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="instagram" href="{{$item->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                @empty
                <h4>No Information Found!</h4>
                @endforelse
                <div class="col-lg-2 col-sm-6 col-md-4">
                    <div class="footer_link">
                        <h3>Our Menu</h3>
                        <ul>
                            <li><a href="{{ route('Reservations.index') }}">Reservations</a></li>
                            <li><a href="{{ route('menu.index') }}">Menu</a></li>
                            <li><a href="{{ route('list_SERVICES') }}">SERVICES</a></li>
                            <li><a href="{{route('chef.index')}}">All Chef</a></li>
                            <li><a href="{{ route('FAQ.index') }}">FAQ</a></li>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-4">
                    <div class="footer_link">
                        <h3>Resources</h3>
                        <ul>
                            <li><a href="{{route('about_list')}}">About</a></li>
                            <li><a href="{{ route('BLOGS.index') }}">Blog</a></li>
                            <li><a href="{{ route('contact.create') }}">Contact</a></li>
                            <li><a href="{{ route('privacy_policy') }}">privacy policy</a></li>
                            <li><a href="{{ route('terms_condition') }}">terms condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-9">
                    <div class=" footer_post">
                        <h3>Recent Post</h3>
                        <ul>
                            @forelse ($footers as  $item)
                            <li>
                                <div class="img">
                                    <img src="{{ asset('storage/' . $item->photo1) }}" alt="post"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <p><i class="far fa-clock"></i>{{$item->created_at->format('M j, Y')}}</p>
                                    <a href="{{ route('Articles.show',$item ) }}">{{$item->title}}</a>
                                </div>
                            </li>
                            @empty
                               <h4>No Data Found!</h4>  
                            @endforelse
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt_80 wow fadeInUp">
                <div class="col-12">
                    <div class="footer_subscribe">
                        <h2>Subscription News</h2>
                        <form>
                            <input type="text" placeholder="Enter Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer_copyright">
                        <p>Copyright © SPICE 2024. All Rights Reserved By <a class="active" href="https://oussamaassmaoui.serv00.net/"> Oussama EL Assmaoui</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--==========================
        FOOTER END
    ===========================-->


    <!--==========================
        SCROLL BUTTON START
    ===========================-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--==========================
        SCROLL BUTTON END
    ===========================-->


    <!--==========================
        RTL BUTTON START
    ===========================-->
    {{-- <a class="rtl_button" href="https://html.themefax.com/restina/html/rtl/index.html">RTL</a> --}}
    <!--==========================
        RTL BUTTON END
    ===========================-->


    <!--jquery library js-->
    <script src="{{ asset('Frontend/js/jquery-3.7.1.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('Frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('Frontend/js/Font-Awesome.js') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('Frontend/js/jquery.nice-select.min.js') }}"></script>
    <!--marquee js-->
    <script src="{{ asset('Frontend/js/jquery.marquee.min.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('Frontend/js/slick.min.js') }}"></script>
    <!--countup js-->
    <script src="{{ asset('Frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.countup.min.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('Frontend/js/venobox.min.js') }}"></script>
    <!--scroll button js-->
    <script src="{{ asset('Frontend/js/scroll_button.js') }}"></script>
    <!--price ranger js-->
    <script src="{{ asset('Frontend/js/ranger_jquery-ui.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/ranger_slider.js') }}"></script>
    <!--select 2 js-->
    <script src="{{ asset('Frontend/js/select2.min.js') }}"></script>
    <!--aos js-->
    <script src="{{ asset('Frontend/js/wow.min.js') }}"></script>
    <!--colorfulTab js-->
    <script src="{{ asset('Frontend/js/colorfulTab.min.js') }}"></script>
    <!--sticky sidebar js-->
    <script src="{{ asset('Frontend/js/sticky_sidebar.js') }}"></script>
    <!--animated barfiller js-->
    <script src="{{ asset('Frontend/js/animated_barfiller.js') }}"></script>
    <!--animatedheadline js-->
    <script src="{{ asset('Frontend/js/jquery.animatedheadline.min.js') }}"></script>
    <!--script/custom js-->
    <script src="{{ asset('Frontend/js/script.js') }}"></script>

</body>


<!-- Mirrored from html.themefax.com/restina/html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 02:05:25 GMT -->

</html>
