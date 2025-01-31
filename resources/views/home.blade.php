@extends('layouts.E-commerce')


@section('Content')
            <section class="all-s">
                <div class="ads-group v2 nospc">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 set-w hidden-xs hidden-sm "></div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 set-flex ">
                                <div class="slide-home3">
                                    <div class="e-slide v2 js-slider-3items">
                                        <div class="e-slide-img">
                                            <a href="#"><img src="{{asset('assets/img/slider/h3_s1.jpg')}}" alt=""></a>
                                            <div class="slide-content v2">
                                                <p class="cate v2">Google Home</p>
                                                <h3 class="v2">A coral fabric base is coming soon</h3>
                                                <p class="sale v2">From <span class="red">69.99</span></p>
                                                <a href="#" class="slide-btn e-yl-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img">
                                            <a href="#"><img src="{{ asset('assets/img/slider/h3_s2.jpg') }}" alt=""></a>
                                            <div class="slide-content v2">
                                                <p class="cate v2">Google Home</p>
                                                <h3 class="v2">A coral fabric base is coming soon</h3>
                                                <p class="sale v2">From <span class="red">69.99</span></p>
                                                <a href="#" class="slide-btn e-yl-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img">
                                            <a href="#"><img src="{{ asset('assets/img/slider/h3_s3.jpg') }}" alt=""></a>
                                            <div class="slide-content v2">
                                                <p class="cate v2">Google Home</p>
                                                <h3 class="v2">A coral fabric base is coming soon</h3>
                                                <p class="sale v2">From <span class="red">69.99</span></p>
                                                <a href="#" class="slide-btn e-yl-gradient">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature -->
                <div class="feature v2">
                    <div class="container container-240">
                        <div class="feature-inside">
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="{{ asset('img/feature/g-truck.png') }}" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>Worldwide Delivery</h3>
                                    <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                                </div>
                            </div>
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="{{asset('assets/img/feature/g-credit.png')}}" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>Safe Payment</h3>
                                    <p>Pay with the world’s most popular and secure payment methods.</p>
                                </div>
                            </div>
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="{{ asset('assets/img/feature/g-safety.png') }}" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>Shop with Confidence</h3>
                                    <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                                </div>
                            </div>
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="{{ asset('assets/img/feature/g-tele.png') }}" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>24/7 Help Center</h3>
                                    <p>Round-the-clock assistance for a smooth shopping experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top product -->
                <div class="top-product-tab">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="filter filter-product e-category">
                                    <h1 class="widget-blog-title">Top Products</h1>
                            <div class="owl-carousel owl-theme js-owl-post">
                                <div class="item">
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/phone4.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{asset('assets/img/product/macbookair.jpg')}}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/phone3.jpg')}}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
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
                                            <a href="#"><img src="{{ asset('assets/img/product/phone4.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{asset('assets/img/product/macbookair.jpg')}}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/phone3.jpg')}}" alt="" class="img-reponsive"></a>
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
                                            <a href="#"><img src="{{ asset('assets/img/product/phone4.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/ring.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{asset('assets/img/product/macbookair.jpg')}}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/phone3.jpg')}}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="product-tab spc3">
                                    <ul class="product-tab-sw v2">
                                        <li class="active"><a data-toggle="tab" href="#feature" aria-expanded="true">Featured</a></li>
                                        <li class=""><a data-toggle="tab" href="#top-rated" aria-expanded="false">Top rated</a></li>
                                        <li class=""><a data-toggle="tab" href="#most" aria-expanded="false">New arrivals</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="feature" class="tab-pane fade in active">
                                            <div class="product-tab-pd owl-carousel owl-theme js-owl-product2">
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/sound3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Computers &amp; Accessories</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price">
                                                                        <span class="red">$1.450.00</span>
                                                                        <span class="old">$1,215.00</span>
                                                                    </div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle skyblue"></a>
                                                                <a href="#" class="circle pink"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Camera & Photo</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/sound3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Computers &amp; Accessories</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price">
                                                                        <span class="red">$1.450.00</span>
                                                                        <span class="old">$1,215.00</span>
                                                                    </div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle skyblue"></a>
                                                                <a href="#" class="circle pink"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Camera & Photo</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                            </div>
                                        </div>
                                        <div id="top-rated" class="tab-pane fade">
                                            <div class="product-tab-pd owl-carousel owl-theme js-owl-product2">
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/sound3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Computers &amp; Accessories</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price">
                                                                        <span class="red">$1.450.00</span>
                                                                        <span class="old">$1,215.00</span>
                                                                    </div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle skyblue"></a>
                                                                <a href="#" class="circle pink"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Camera & Photo</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/sound3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Computers &amp; Accessories</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price">
                                                                        <span class="red">$1.450.00</span>
                                                                        <span class="old">$1,215.00</span>
                                                                    </div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle skyblue"></a>
                                                                <a href="#" class="circle pink"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Camera & Photo</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                            </div>
                                        </div>
                                        <div id="most" class="tab-pane fade">
                                            <div class="product-tab-pd owl-carousel owl-theme js-owl-product2">
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/sound3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Computers &amp; Accessories</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price">
                                                                        <span class="red">$1.450.00</span>
                                                                        <span class="old">$1,215.00</span>
                                                                    </div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle skyblue"></a>
                                                                <a href="#" class="circle pink"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Camera & Photo</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/sound3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Computers &amp; Accessories</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group"></div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price">
                                                                        <span class="red">$1.450.00</span>
                                                                        <span class="old">$1,215.00</span>
                                                                    </div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle skyblue"></a>
                                                                <a href="#" class="circle pink"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Camera & Photo</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                                <a href="#" class="circle black"></a>
                                                                <a href="#" class="circle red"></a>
                                                                <a href="#" class="circle gray"></a>
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/samsung3.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Cell Phones & Accessories</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                                <div class="product-item">
                                                    <div class="pd-bd product-inner">
                                                        <div class="product-img">
                                                            <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="color-group">
                                                            </div>
                                                            <div class="element-list element-list-left">
                                                                <ul class="desc-list">
                                                                    <li>Connects directly to Bluetooth</li>
                                                                    <li>Battery Indicator light</li>
                                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                                    <li>Computers running Windows</li>
                                                                </ul>
                                                            </div>
                                                            <div class="element-list element-list-middle">
                                                                <div class="product-rating bd-rating">
                                                                    <span class="star star-5"></span>
                                                                    <span class="star star-4"></span>
                                                                    <span class="star star-3"></span>
                                                                    <span class="star star-2"></span>
                                                                    <span class="star star-1"></span>
                                                                    <div class="number-rating">( 896 reviews )</div>
                                                                </div>
                                                                <p class="product-cate">Audio Speakers</p>
                                                                <h3 class="product-title"><a href="#">Harman Kardon Onyx Studio </a></h3>
                                                                <div class="product-bottom">
                                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                                    <a href="#" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                                </div>
                                                                <div class="product-bottom-group">
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                                    <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-button-group">
                                                                <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="homepage-banner">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="banner-img banner-img2">
                                                <a href="#"><img src="{{asset('assets/img/banner/h3_b2.jpg')}}" alt="" class="img-responsive"></a>
                                                <div class="h-banner-content v5">
                                                    <p class="content-name">Kbox Controller</p>
                                                    <p class="content-price">Sale up to 30%</p>
                                                    <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="banner-img banner-img2">
                                                <a href="#"><img src="{{asset('assets/img/banner/h3_b3.jpg')}}" alt="" class="img-responsive"></a>
                                                <div class="h-banner-content v5">
                                                    <p class="content-name">Smart Watch Seri 2</p>
                                                    <p class="content-price">Sale up to 30%</p>
                                                    <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Super Deal -->
                <div class="super-deal">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="owl-carousel owl-theme owl-cate js-oneitem">
                                    <div class="slick-item">
                                        <div class="sp-item">
                                            <div class="product-wrapper">
                                                <div class="flex product-img-slide">
                                                    <div class="product-images v2">
                                                        <div class="main-img v2 js-product-slider">
                                                            <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sonos1.jpg') }}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sonos2.jpg') }}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sonos3.jpg') }}" alt="photo" class="img-reponsive"></a>
                                                        </div>
                                                    </div>
                                                    <div class="multiple-img-list-ver2 v2 js-click-product">
                                                        <div class="product-col v2">
                                                            <div class="img active">
                                                                <img src="{{ asset('assets/img/single/sonos1.jpg') }}" alt="photo" class="img-reponsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{ asset('assets/img/single/sonos2.jpg') }}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{ asset('assets/img/single/sonos3.jpg') }}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-box">
                                                <div class="product-item-countd">
                                                    <div class="product-info">
                                                        <div class="product-info-top">
                                                            <h1 class="deal-title">Super deal</h1>
                                                            <h3 class="product-title v3"><a href="#">Sonos One – Voice Controlled Smart Speaker </a></h3>
                                                            <div class="product-price thin-price">
                                                                <span class="red">$79.00</span>
                                                                <span class="old">$99.00</span>
                                                            </div>
                                                            <div class="deal-progress">
                                                                <div class="deal-stock">
                                                                    <span class="stock-sold">19% already claimed</span>
                                                                    <span class="stock-available">Available: <strong>22</strong></span>
                                                                </div>
                                                                <div class="progress">
                                                                    <span class="progress-bar" style="width:27.5956%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="time-cound">
                                                            <p>Deal ends in :</p>
                                                            <div class="countdown countdown-time v2" data-countdown="countdown" data-date="08-31-2018-00-00-00">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="sp-item">
                                            <div class="product-wrapper">
                                                <div class="flex product-img-slide">
                                                    <div class="product-images v2">
                                                        <div class="main-img v2 js-product-slider">
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony2.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony3.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony4.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony4.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony4.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                        </div>
                                                    </div>
                                                    <div class="multiple-img-list-ver2 v2 js-click-product">
                                                        <div class="product-col v2">
                                                            <div class="img active">
                                                                <img src="{{asset('assets/img/single/sony.jpg')}}" alt="photo" class="img-reponsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony2.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony3.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony4.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony4.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony4.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-box">
                                                <div class="product-item-countd">
                                                    <div class="product-info">
                                                        <div class="product-info-top">
                                                            <h1 class="deal-title">Super deal</h1>
                                                            <h3 class="product-title v3"><a href="#">Sonos One – Voice Controlled Smart Speaker </a></h3>
                                                            <div class="product-price thin-price">
                                                                <span class="red">$79.00</span>
                                                                <span class="old">$99.00</span>
                                                            </div>
                                                            <div class="deal-progress">
                                                                <div class="deal-stock">
                                                                    <span class="stock-sold">19% already claimed</span>
                                                                    <span class="stock-available">Available: <strong>22</strong></span>
                                                                </div>
                                                                <div class="progress">
                                                                    <span class="progress-bar" style="width:27.5956%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="time-cound">
                                                            <p>Deal ends in :</p>
                                                            <div class="countdown countdown-time v2" data-countdown="countdown" data-date="08-31-2018-00-00-00">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="sp-item">
                                            <div class="product-wrapper">
                                                <div class="flex product-img-slide">
                                                    <div class="product-images v2">
                                                        <div class="main-img v2 js-product-slider">
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony2.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony3.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony4.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony4.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="{{asset('assets/img/single/sony4.jpg')}}" alt="photo" class="img-reponsive"></a>
                                                        </div>
                                                    </div>
                                                    <div class="multiple-img-list-ver2 v2 js-click-product">
                                                        <div class="product-col v2">
                                                            <div class="img active">
                                                                <img src="{{asset('assets/img/single/sony.jpg')}}" alt="photo" class="img-reponsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony2.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony3.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony4.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony4.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="{{asset('assets/img/single/sony4.jpg')}}" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-box">
                                                <div class="product-item-countd">
                                                    <div class="product-info">
                                                        <div class="product-info-top">
                                                            <h1 class="deal-title">Super deal</h1>
                                                            <h3 class="product-title v3"><a href="#">Sonos One – Voice Controlled Smart Speaker </a></h3>
                                                            <div class="product-price thin-price">
                                                                <span class="red">$79.00</span>
                                                                <span class="old">$99.00</span>
                                                            </div>
                                                            <div class="deal-progress">
                                                                <div class="deal-stock">
                                                                    <span class="stock-sold">19% already claimed</span>
                                                                    <span class="stock-available">Available: <strong>22</strong></span>
                                                                </div>
                                                                <div class="progress">
                                                                    <span class="progress-bar" style="width:27.5956%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="time-cound">
                                                            <p>Deal ends in :</p>
                                                            <div class="countdown countdown-time v2" data-countdown="countdown" data-date="08-31-2018-00-00-00">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="filter filter-product e-category">
                                    <h1 class="widget-blog-title">Staffpick Products</h1>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/tplink.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/anker.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/logitech.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('assets/img/product/phone5.jpg') }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                            <div class="product-price v2"><span>$780.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="releases v2">
                    <div class="container container-240">
                        <div class="title-icon t-column mg-50">
                            <div class="t-inside">
                                <img src="{{asset('assets/img/real.png')}}" alt="">
                            </div>
                            <h1>New releases</h1>
                        </div>
                        <ul class="product-tab-sw2">
                            <li class="active"><a data-toggle="tab" href="#tv2" aria-expanded="true">TV & Video</a></li>
                            <li class=""><a data-toggle="tab" href="#audito2" aria-expanded="false">Audio & Theater</a></li>
                            <li class=""><a data-toggle="tab" href="#camera2" aria-expanded="false">Camera, Photo & Video</a></li>
                            <li class=""><a data-toggle="tab" href="#phone2" aria-expanded="false">Cell Phones & Accessories</a></li>
                            <li class=""><a data-toggle="tab" href="#headphone" aria-expanded="false">Headphones</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tv2" class="tab-pane fade in active">
                                <div class="js-multiple-row2">
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                </div>
                            </div>
                            <div id="audito2" class="tab-pane fade">
                                <div class="js-multiple-row2">
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                </div>
                            </div>
                            <div id="camera2" class="tab-pane fade">
                                <div class="js-multiple-row2">
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/fujifilm.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                </div>
                            </div>
                            <div id="phone2" class="tab-pane fade">
                                <div class="js-multiple-row2">
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/headphone2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                </div>
                            </div>
                            <div id="headphone" class="tab-pane fade">
                                <div class="js-multiple-row2">
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/pd2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/tv2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd3.jpg') }}" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/headphone3.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/pd4.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/samsungbox.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/logitech.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/smartwatch.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{asset('assets/img/product/macbook2.jpg')}}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/tv.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="container container-240">
                    <div class="banner-callus spc2 image-bd effect_img2">
                        <a href="#"><img src="{{ asset('assets/img/banner/h3_b1.jpg') }}" alt="" class="img-responsive"></a>
                        <div class="box-center v2">
                            <p>Free Shipping on Orders $50</p>
                            <a href="#" class="btn-callus">Shop now</a>
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
            </section>
@endsection