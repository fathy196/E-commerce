@extends('layouts.E-commerce')

@section('Content')
    <!--content-->
    <div class="container container-240">

        <div class="checkout">
            <ul class="breadcrumb v3">
                <li><a href="#">Home</a></li>
                <li class="active">Cart</li>
            </ul>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="shopping-cart bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v2">Cart</h1>
                        </div>
                        <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="table-responsive">
                                <table class="table cart-table">

                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr class="item_cart">
                                                <td class="product-name flex align-center">
                                                    <!-- Button to remove item (DELETE) -->
                                                    <button class="btn-del" onclick="removeItem({{ $item->id }})">
                                                        <i class="ion-ios-close-empty"></i>
                                                    </button>
                                                    <div class="product-img">
                                                        <img src="{{ asset('assets/img/product/sound2.jpg') }}"
                                                            alt="Futurelife">
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="#" title="">{{ $item->product->name }} </a>
                                                    </div>
                                                </td>

                                                <td class="bcart-quantity single-product-detail">
                                                    <div class="single-product-info">
                                                        <div class="e-quantity">
                                                            <input type="number" name="quantity[{{ $item->product_id }}]"
                                                                value="{{ $item->quantity }}" title="Qty"
                                                                class="qty input-text js-number" size="4">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="total-price">
                                                    <p class="price">{{ $item->quantity * $item->price }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-cart-bottom">

                                <a href="#" class="btn btn-update">Total price is : {{ $total }}</a>


                                {{-- coupon discount --}}
                                {{-- <form class="form_coupon" action="#" method="post">
                                    <input type="email" value="" placeholder="Coupon code" name="EMAIL"
                                        id="mail" class="newsletter-input form-control">
                                    <div class="input-icon">
                                        <img src="{{ asset('assets/img/coupon-icon.png') }}" alt="">
                                    </div>
                                    <button id="subscribe2" class="button_mini btn" type="submit">
                                        Apply coupon
                                    </button>
                                </form> --}}
                                <button type="submit" class="btn btn-update">Update cart</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="cart-total bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v3">Cart totals</h1>
                        </div>
                        <div class="table-responsive">
                            <table class="shop_table">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>{{ $total }}</td>
                                    </tr>
                                    <tr class="cart-shipping">
                                        <th>Shipping</th>
                                        <td class="td">
                                            <ul class="shipping">
                                                <li>
                                                    <input type="radio" name="gender" value="Flat" id="radio1"
                                                        checked="checked">
                                                    <label for="radio1">Flat rate : $ 12</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="gender" value="Free" id="radio2">
                                                    <label for="radio2">Free Shipping</label>
                                                </li>
                                            </ul>
                                            <a href="#" class="calcu">Calculate shipping</a>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>{{ $total }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-total-bottom">
                            <a href="#" class="btn-gradient btn-checkout">Proceed to checkout</a>
                        </div>
                        <div class="sign-in-divider">
                            <span>or</span>
                        </div>
                        <div class="cart-total-bottom pp-checkout">
                            <a href="#"><img src="{{ asset('assets/img/checkoutpp.jpg') }}" alt=""
                                    class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- e-category  -->
    <div class="e-category">
        <div class="container container-240">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Featured Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/usb.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/macbook.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/flycam.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Top Rated Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/samsung.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/headphone2.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/anker.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Top Selling Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/headphone.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/samsung2.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt=""
                                    class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature">
        <div class="container container-240">
            <div class="feature-inside">
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="{{ asset('assets/img/feature/truck.png') }}" alt=""
                            class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Worldwide Delivery</h3>
                        <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="{{ asset('assets/img/feature/credit-card.png') }}"
                            alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Safe Payment</h3>
                        <p>Pay with the world’s most popular and secure payment methods.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="{{ asset('assets/img/feature/safety.png') }}"
                            alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Shop with Confidence</h3>
                        <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="{{ asset('assets/img/feature/telephone.png') }}"
                            alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>24/7 Help Center</h3>
                        <p>Round-the-clock assistance for a smooth shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / end content -->





{{-- this script for handling remove cart --}}
    <script>
        function removeItem(itemId) {
            if (confirm('Are you sure you want to remove this item?')) {
                fetch(`/cart/remove/${itemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token
                        'Content-Type': 'application/json'
                    }
                }).then(response => {
                    if (response.ok) {
                        window.location.reload(); // Reload the page to reflect changes
                    }
                });
            }
        }
        </script>
@endsection
