@extends('layouts.header&footer')

@section('content')
@include('sweetalert::alert')
@foreach ($Settings as $item )
    <section class="breadcrumb_area" style="background: url({{ asset('storage/' . $item->banner_Global) }});">
     @endforeach
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-12">
                <div class="breadcrumb_text">
                    <h1>checkout</h1>
                    <ul>
                        <li><a href="/">Home </a></li>
                        <li><a href="#">checkout</a></li>
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
    CHECKOUT START
===========================-->
<section class="checkout pt_110 xs_pt_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow fadeInLeft">
                <div class="checkout_area">
                    <h2>Billing Details</h2>
                    <form method="post" action="{{ route('place-order') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="first_name" placeholder="Fast Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="telephone_number" placeholder="Your Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="zip_code" placeholder="Zip">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="shipping_address" placeholder="Address">
                            </div>
                            
                        </div>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-7 wow fadeInRight">
                <div class="checkout_sidebar">
                    <h2>Your Order</h2>
                    <div class="cart_summery">
                        <h6>total cart (02)</h6>
                        <p class="total"><span>total:</span> <span>${{ $cartItems->sum(function ($cartItem) {
                            return $cartItem->quantity * $cartItem->product->price;
                            }) }}</span></p>
                            <button type="submit" style="background: none">
                        <a class="common_btn" >checkout</a>
                            </button>
                    </div>
                </div>
            </div>
        </div> </form>
    </div>
</section>

@endsection
