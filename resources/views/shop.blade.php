@extends('layouts.E-commerce')
@section('Content')
    <div class="container container-240 shop-collection">

        <div class="filter-collection-left hidden-lg hidden-md">
            <a class="btn">Filter</a>
        </div>
        <div class="row shop-colect">
            <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
                <div class="close-sidebar-collection hidden-lg hidden-md">
                    <span>filter</span><i class="icon_close ion-close"></i>
                </div>

                <div class="filter filter-group">
                    <h1 class="widget-blog-title">Product filter</h1>
                    <div class="filter-price filter-inside">
                        <h3>Price</h3>
                        <div class="filter-content">
                            <div class="price-range-holder">
                                <input type="text" class="price-slider" value="">
                            </div>
                            <span class="min-max">
                                Price: $25 — $258
                            </span>
                            <a href="#" class="btn-filter e-gradient">Filter</a>
                        </div>
                    </div>
                    <div class="filter-brand filter-inside">
                        <h3>Brands</h3>
                        <ul class="e-filter brand-filter">
                            <li><a href="#">Apple <span class="number">(80)</span></a></li>
                            <li class="active-filter"><a href="#">Samsung <span class="number">(80)</span></a></li>
                            <li><a href="#">LG <span class="number">(80)</span></a></li>
                            <li><a href="#">Blackberry <span class="number">(80)</span></a></li>
                            <li><a href="#">Oppo <span class="number">(80)</span></a></li>
                            <li><a href="#">Panasonic <span class="number">(80)</span></a></li>
                        </ul>
                        <a href="#" class="btn-showmore">Show more +</a>
                    </div>
                    <div class="filter-color filter-brand filter-inside">
                        <h3>Color</h3>
                        <ul class="e-filter brand-filter">
                            <li><a href="#">Black <span class="number">(80)</span></a></li>
                            <li><a href="#">Black Leather <span class="number">(80)</span></a></li>
                            <li class="active-filter"><a href="#">Black with Red <span class="number">(80)</span></a>
                            </li>
                            <li><a href="#">Gold <span class="number">(80)</span></a></li>
                            <li><a href="#">Spacegrey <span class="number">(80)</span></a></li>
                        </ul>
                        <a href="#" class="btn-showmore">Show more +</a>
                    </div>
                </div>
                <div class="filter filter-product e-category">
                    <h1 class="widget-blog-title">Top Products</h1>
                    <div class="owl-carousel owl-theme js-owl-post">
                        <div class="item">
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone1.jpg') }}" alt=""
                                            class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone2.jpg') }}" alt=""
                                            class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone3.jpg') }}" alt=""
                                            class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone4.jpg') }}" alt=""
                                            class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone5.jpg') }}" alt=""
                                            class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone1.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone2.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone3.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone4.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone5.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone1.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone2.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone3.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone4.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('assets/img/product/phone5.jpg') }}"
                                            alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                    <div class="product-price v2"><span>$780.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <a class="image-bd hover-images" href=""><img src="{{ asset('assets/img/o-banner3.jpg') }}"
                            alt="" class="img-reponsive"></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
                <div class="e-product">
                    <div class="pd-banner">
                        <a href="#" class="image-bd effect_img2"><img
                                src="{{ asset('assets/img/shop-banner_3.jpg') }}" alt=""
                                class="img-reponsive"></a>
                    </div>
                    <div class="pd-top">
                        <h1 class="title">Shop</h1>
                    </div>
                    <div class="pd-middle">
                        <div class="view-mode view-group">
                            <a class="grid-icon col"><img src="{{ asset('assets/img/grid.png') }}" alt=""></a>
                            <a class="grid-icon col2 active"><img src="{{ asset('assets/img/grid2.png') }}"
                                    alt=""></a>
                            <a class="list-icon list"><img src="{{ asset('assets/img/list.png') }}" alt=""></a>
                        </div>

                    </div>
                    <div class="product-collection-grid product-grid product-grid-v2">
                        <div class="row">

                            @if ($products->isEmpty())
                                <div class="empty-message"
                                    style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 50vh; text-align: center;">
                                    <i class="fas fa-box-open"
                                        style="font-size: 100px; color: #ccc; margin-bottom: 20px;"></i>
                                    <p style="font-size: 18px; color: #666;">No products available at the moment. Please
                                        check back later.</p>
                                </div>
                            @else
                                @foreach ($products as $product)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ $product->image }}" alt=""
                                                        class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan
                                                            Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <form action="{{ route(name: 'cart.add') }}" method="POST"
                                                            class="add-to-cart-form">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <input type="number" name="quantity" value="1"
                                                                min="1" class="quantity-input">
                                                            <button type="submit" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </button>
                                                        </form>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <form action="{{ route(name: 'cart.add') }}" method="POST"
                                                        class="add-to-cart-form">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <input type="number" name="quantity" value="1"
                                                            min="1" class="quantity-input">
                                                        <button type="submit" class="btn-icon"
                                                            style="background: none;">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </button>
                                                    </form>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                        </div>
                    </div>
                    <div class="pd-middle space-v1">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>





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
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
@endsection
