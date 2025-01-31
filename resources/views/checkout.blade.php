@extends('layouts.E-commerce')

@section('Content')
        <div class="main-content space1">
            <div class="container container-240">
                <div class="co-coupon">
                    <div class="row">
                        <div class="checkout-login col-xs-12 col-sm-6">
                            <div class="box-toggle box-login">
                                <img src="{{ asset('assets/img/co-login.png') }}" alt="">Returning customer?
                                <a class="show-login js-showlogin"> Click here to login</a>
                            </div>
                            <form method="post" class="myaccount form-customer form-login js-openlogin">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                <div class="form-group ">
                                    <label for="exampleInputEmail1">Username or email address *</label>
                                    <input type="email" class="form-control form-account form-account" id="exampleInputEmail1">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputPassword1">Password *</label>
                                    <input type="password" class="form-control form-account form-account" id="exampleInputPassword1">
                                </div>
                                <div class="form-check ">
                                    <button type="submit" class="btn btn-submit btn-gradient">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class=" col-xs-12 col-sm-6 checkout-cp ">
                            <div class="box-toggle box-coupon ">
                                <img src="{{ asset('assets/img/co-coupon.png') }}" alt="">Have a coupon?
                                <a class="show-login js-showcp"> Click here to enter your code</a>
                            </div>
                            <form class="form_coupon form-cp js-opencp" action="#" method="post">
                                <input type="email" value="" placeholder="Coupon code" name="EMAIL" id="mail" class="newsletter-input form-control">
                                <div class="input-icon">
                                    <img src="{{ asset('assets/img/coupon-icon.png') }}" alt="">
                                </div>
                                <button id="subscribe" class="button_mini btn" type="submit">
                                    Apply coupon
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <form name="checkout" method="post" class="co">
                    <div class="cart-box-container-ver2">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="co-left bd-7">
                                    <div class="cmt-title text-center abs">
                                        <h1 class="page-title v1">Billing details</h1>
                                    </div>
                                    <div class="row form-customer">
                                        <div class="form-group col-md-6">
                                            <label for="inputfname_2" class=" control-label">First Name <span class="f-red">*</span></label>
                                            <input type="text" id="inputfname_2" class="form-control form-account">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputlname" class=" control-label">Last Name <span class="f-red">*</span></label>
                                            <input type="text" id="inputlname" class="form-control form-account">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputcompany" class=" control-label">Company Name</label>
                                            <input type="text" id="inputcompany" class="form-control form-account">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputcountry1" class=" control-label">Country <span class="f-red">*</span></label>
                                            
                                            <input type="text" id="inputcountry1" class="form-control form-account">
                                        </div>                                    
                                        <div class="form-group col-md-12">
                                            <label for="inputstreet" class=" control-label">Street address <span class="f-red">*</span></label>
                                            <input type="text" id="inputstreet" class="form-control form-account">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputpostcode" class=" control-label">Postcode / ZIP</label>
                                            <input type="text" id="inputpostcode" class="form-control form-account">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputfState" class=" control-label">Town / City <span class="f-red">*</span></label>
                                            <input type="text" id="inputfState" class="form-control form-account">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputphone" class=" control-label">Phone <span class="f-red">*</span></label>
                                            <input type="text" id="inputphone" class="form-control form-account">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputemail" class=" control-label">Email Address <span class="f-red">*</span></label>
                                            <input type="text" id="inputemail" class="form-control form-account">
                                        </div>
                                        <div class="form-check col-md-12">
                                            <label class="form-check-label ver2">
                                                <input type="checkbox" class="form-check-input">
                                                <span>Create an account?</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="co-left bd-7">
                                    <div class="cmt-title text-center abs">
                                        <h1 class="page-title v5">Shipping Details</h1>
                                    </div>
                                    <div class="row form-customer v2">
                                        <div class="form-check col-md-12">
                                            <label class="form-check-label ver2">
                                                <input type="checkbox" class="form-check-input">
                                                <span>Ship to a different address?</span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputfState" class=" control-label">Order Notes</label>
                                            <textarea name="message" rows="8" id="message" class="form-control form-note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End contact-form -->
                            <div class="col-md-4">
                                <div class="cart-total bd-7">
                                    <div class="cmt-title text-center abs">
                                        <h1 class="page-title v3">Your order</h1>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="co-pd">
                                            <p class="co-title">
                                                Product<span>Total</span>
                                            </p>
                                            <ul class="co-pd-list">
                                                <li class="clearfix">
                                                    <div class="co-name">
                                                        Harman Kardon Onyx  Studio  x 1 
                                                    </div>
                                                    <div class="co-price">
                                                        $ 1.125.00
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <table class="shop_table">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td>$ 1.215.00</td>
                                                </tr>
                                                <tr class="cart-shipping v2">
                                                    <th>Shipping</th>
                                                    <td class="td">
                                                        <ul class="shipping">
                                                            <li>
                                                                <input type="radio" name="gender" value="Flat" id="radio1" checked="checked">
                                                                <label for="radio1">Flat rate : $ 12</label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" name="gender" value="Free" id="radio2">
                                                                <label for="radio2">Free Shipping</label>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="order-total v2">
                                                    <th>Total</th>
                                                    <td>$ 1.215.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <ul class="payment">
                                        <li>
                                            <input type="radio" name="gender" value="Direct" id="radio3" >
                                            <label for="radio3">Direct bank transfer</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="gender" value="Check" id="radio4">
                                            <label for="radio4">Check payments</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="gender" value="Cash" id="radio5">
                                            <label for="radio5">Cash on delivery</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="gender" value="Paypal" id="radio6">
                                            <label for="radio6">PayPal Express Checkout <a class="co-pp" href=""><img src="{{ asset('assets/img/payment/pp.jpg') }}" alt=""></a></label>
                                            
                                        </li>
                                    </ul>
                                    
                                    <div class="form-check">
                                        <label class="form-check-label ver2">
                                            <input type="checkbox" class="form-check-input">
                                            <span>I’ve read and accept the <a href="#" class="term">terms & conditions *</a></span>
                                        </label>
                                    </div>
                                    <div class="cart-total-bottom v2">
                                        <a href="#" class="btn-gradient btn-checkout btn-co-order">Place order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
        <div class="e-category">
            <div class="container container-240">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Featured Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{asset('assets/img/product/usb.jpg')}}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('assets/img/product/macbook.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('assets/img/product/flycam.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{asset('assets/img/product/samsung.jpg')}}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('assets/img/product/headphone2.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('assets/img/product/anker.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{asset('assets/img/product/headphone.jpg')}}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('assets/img/product/samsung2.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
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
                        <div class="feature-block-img"><img src="{{ asset('assets/img/feature/truck.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Worldwide Delivery</h3>
                            <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                        </div>
                    </div>

                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="{{ asset('assets/img/feature/credit-card.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Safe Payment</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div>

                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="{{ asset('assets/img/feature/safety.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Shop with Confidence</h3>
                            <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                        </div>
                    </div>

                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="{{ asset('assets/img/feature/telephone.png') }}" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>24/7 Help Center</h3>
                            <p>Round-the-clock assistance for a smooth shopping experience.</p>
                        </div>
                    </div>
            </div>
            </div>
        </div>
       @endsection