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
                        <h1>cart view</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">cart view</a></li>
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
                CART VIEW START
            ===========================-->
    <section class="cart_view mt_115 xs_mt_95">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="cart_list">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro_img">Image</th>

                                        <th class="pro_name">Product Details</th>

                                        <th class="pro_tk">Price</th>

                                        <th class="pro_select">Quantity</th>

                                        <th class="pro_tk">Subtotal</th>

                                        <th class="pro_icon">
                                            <a class="clear_all">Clear</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($cartItems as $item)
                                        <tr>
                                            <td class="pro_img">
                                                <img src="{{ asset('storage/' . $item->product->photo) }}" alt="product"
                                                    class="img-fluid w-100">
                                            </td>

                                            <td class="pro_name">
                                                <a
                                                    href="{{ route('products.show', $item->product) }}">{{ $item->product->name }}</a>
                                                <span>{{ $item->size }}</span>
                                                <p>{{ $item->option }}</p>
                                            </td>

                                            <td class="pro_tk">
                                                <h6>${{ $item->product->price }}</h6>
                                            </td>

                                            <td class="pro_select">
                                                <form id="update-form-{{ $item->id }}" method="POST"
                                                    action="{{ route('cart.update', $item) }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="quentity_btn">
                                                        <button type="button" class="btn btn-danger decrement-btn"
                                                            data-item-id="{{ $item->id }}">
                                                            <i class="fal fa-minus"></i>
                                                        </button>
                                                        <input type="text" class="quantity-input"
                                                            id="quantity-{{ $item->id }}" name="quantity"
                                                            value="{{ $item->quantity }}">
                                                        <button type="button" class="btn btn-success increment-btn"
                                                            data-item-id="{{ $item->id }}">
                                                            <i class="fal fa-plus"></i>
                                                        </button>
                                                        <button type="submit" style="display: none;">Update
                                                            Quantity</button>
                                                    </div>
                                                </form>
                                            </td>

                                            <script>
                                                // Get all quantity input fields and attach event listeners
                                                document.querySelectorAll('.quantity-input').forEach(function(input) {
                                                    input.addEventListener('input', function() {
                                                        var form = input.closest('form');
                                                        form.querySelector('button[type="submit"]').click();
                                                    });
                                                });

                                                // Get all increment and decrement buttons and attach event listeners
                                                document.querySelectorAll('.increment-btn').forEach(function(button) {
                                                    button.addEventListener('click', function() {
                                                        var itemId = button.getAttribute('data-item-id');
                                                        var quantityInput = document.getElementById('quantity-' + itemId);
                                                        var quantity = parseInt(quantityInput.value);
                                                        quantity++;
                                                        quantityInput.value = quantity;
                                                        quantityInput.dispatchEvent(new Event('input')); // Trigger input event
                                                    });
                                                });

                                                document.querySelectorAll('.decrement-btn').forEach(function(button) {
                                                    button.addEventListener('click', function() {
                                                        var itemId = button.getAttribute('data-item-id');
                                                        var quantityInput = document.getElementById('quantity-' + itemId);
                                                        var quantity = parseInt(quantityInput.value);
                                                        if (quantity > 1) {
                                                            quantity--;
                                                            quantityInput.value = quantity;
                                                            quantityInput.dispatchEvent(new Event('input')); // Trigger input event
                                                        }
                                                    });
                                                });
                                            </script>


                                            <td class="pro_tk">
                                                <h6>${{ $item->quantity * $item->product->price }}</h6>
                                            </td>

                                       


                                        <td class="pro_icon">
                                            <form id="{{ $item->id }}" action="{{ route('cart.remove', $item) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background: none">
                                                    <a><i class="far fa-times"></i></a>
                                                </button>
                                            </form>
                                        </td>
                                        </tr>
                                    @empty
                                        <h4>No items in the cart.</h4>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" cart_list_footer_button mt_60">
                <div class="row wow fadeInUp">
                    <div class="col-xl-8 col-md-6 col-lg-7">

                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-5">
                        <div class="cart_summery">
                            <h6>total cart (02)</h6>

                            <p class="total"><span>total:</span>
                                <span>${{ $cartItems->sum(function ($cartItem) {
                                    return $cartItem->quantity * $cartItem->product->price;
                                }) }}</span>
                            </p>
                            <a class="common_btn" href="{{ route('checkout.index') }}">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
                CART VIEW END
            ===========================-->
@endsection
