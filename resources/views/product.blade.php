@extends('layouts.E-commerce')
@section('Content')
        <div class="container container-240">
             <div class="single-product-detail product-bundle product-aff">
               
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        
                        <div class="flex product-img-slide">
                            
                        
                            <div class="product-images">
                                <div class="main-img js-product-slider">
                                    <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sony.jpg') }}" alt="photo" class="img-reponsive"></a>
                                    <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sony2.jpg') }}" alt="photo" class="img-reponsive"></a>
                                    <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sony3.jpg') }}" alt="photo" class="img-reponsive"></a>
                                    <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sony4.jpg') }}" alt="photo" class="img-reponsive"></a>
                                    <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sony4.jpg') }}" alt="photo" class="img-reponsive"></a>
                                    <a href="#" class="hover-images effect"><img src="{{ asset('assets/img/single/sony4.jpg') }}" alt="photo" class="img-reponsive"></a>
                                </div>
                            </div>
                            <div class="multiple-img-list-ver2 js-click-product">
                                <div class="product-col">
                                    <div class="img active">
                                        <img src="{{ asset('assets/img/single/sony.jpg') }}" alt="photo" class="img-reponsive">
                                    </div>
                                </div>
                                <div class="product-col">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/single/sony2.jpg') }}" alt="images" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-col">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/single/sony3.jpg') }}" alt="images" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-col">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/single/sony4.jpg') }}" alt="images" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-col">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/single/sony4.jpg') }}" alt="images" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-col">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/single/sony4.jpg') }}" alt="images" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                           
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="single-flex">
                            <div class="single-product-info product-info product-grid-v2 s-50">
                                <p class="product-cate">Audio Speakers</p>
                                <div class="product-rating">
                                    <span class="star star-5"></span>
                                    <span class="star star-4"></span>
                                    <span class="star star-3"></span>
                                    <span class="star star-2"></span>
                                    <span class="star star-1"></span>
                                    <div class="number-rating">( 896 reviews )</div>
                                </div>
                                <h3 class="product-title"><a href="#">Bang & Olufsen Beoplay</a></h3>
                                <div class="product-price">
                                    <span>$1,215.00</span>
                                </div>
                                <div class="availability">
                                    <p class="product-inventory"> <label>Availability : </label><span> In stock</span></p>
                                </div>
                                <div class="product-brand">
                                    <p>Brand :</p>
                                    <img src="{{ asset('assets/img/single/sony_brand.png') }}" alt="">
                                </div>
                                <div class="product-sku">
                                    <label>SKU :</label><span> 8900105789430</span>
                                </div>
                                <div class="short-desc">
                                    <p class="product-desc">Uses a dictionary of over combined with a handful of model sentence structures, to generate lorem Ipsum which looks reasonable.</p>
                                    <ul class="desc-list">
                                       <li>Connects directly to Bluetooth</li> 
                                       <li>Battery Indicator light</li> 
                                       <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                       <li>Computers running Windows</li> 
                                    </ul>
                                </div>
                                <div class="color-group">
                                    <label>Color :</label>
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle red"></a>
                                    <a href="#" class="circle gray"></a>
                                </div>

                                <div class="single-product-button-group">
                                    <div class="e-btn cart-qtt btn-gradient">
                                        <div class="e-quantity">
                                          <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                          <div class="tc pa">
                                             <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                             <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                          </div>
                                       </div>
                                       <a href="#" class="btn-add-cart">Add to cart <span class="icon-bg icon-cart v2"></span></a>
                                    </div>
                                    <a href="#" class="e-btn btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="e-btn btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>

                                <div class="product-tags">
                                    <label>Tags :</label>
                                    <a href="#">Fast,</a>
                                    <a href="#">Gaming,</a>
                                    <a href="#">Strong</a>
                                </div>
                            </div>
                            <div class="single-product-feature s-50 hidden-xs hidden-sm">
                                <div class="bd-7">
                                    <div class="single-feature-box">
                                        <div class="single-feature-img">
                                            <img src="{{ asset('assets/img/feature/credit-card2.png') }}" alt="">
                                        </div>
                                        <div class="single-feature-info">
                                            <h3>Safe Payment</h3>
                                            <p>Pay with the world’s most payment methods.</p>
                                        </div>
                                    </div>

                                    <div class="single-feature-box">
                                        <div class="single-feature-img">
                                            <img src="{{ asset('assets/img/feature/safety2.png') }}" alt="">
                                        </div>
                                        <div class="single-feature-info">
                                            <h3>Confidence</h3>
                                            <p>Protection covers your purchase</p>
                                        </div>
                                    </div>

                                    <div class="single-feature-box">
                                        <div class="single-feature-img">
                                            <img src="{{ asset('assets/img/feature/truck2.png') }}" alt="">
                                        </div>
                                        <div class="single-feature-info">
                                            <h3>Worldwide Delivery</h3>
                                            <p>Ship to over 200 countries & regions.</p>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-product-tab bd-7">
                    <div class="cmt-title text-center abs">
                        <ul class="nav nav-tabs v3 text-center">
                            <li class="active"><a data-toggle="pill" href="#desc">Description</a></li>
                        </ul>
                    </div>
                <div class="tab-content">
                    <div id="desc" class="tab-pane fade in active">
                        <div class="entry-content active">
                            <div class="e-text">
                                <div class="entry-inside v4 text-center">
                                    <img src="{{ asset('assets/img/single/simple_icon.png') }}" alt="">
                                    <h1 class="entry-title spc">Multi-Purpose WooCommerce Theme for Electronics Store </h1>
                                </div>
                                <div class="entry-inside v3">
                                    
                                        <div class="text-center image-bd">
                                            <img src="{{ asset('assets/img/single/des_1.jpg') }}" alt="">
                                        </div>
                                    
                                        <div class="row entry-middle">
                                            <div class="entry-info col-xs-12 col-sm-6 col-md-6">
                                                <h3>This is demo heading</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                            </div>

                                            <div class="entry-info col-xs-12 col-sm-6 col-md-6">
                                                <h3>This is demo heading</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center image-bd img-cal">
                                            <img src="{{ asset('assets/img/single/des_2.jpg') }}" alt="">
                                        </div>
                                </div>
                            </div>
                            <div class="entry-button text-center abs">
                                <a href="#" class="btn-show">Show more<i class="ion-chevron-down"></i></a>
                            </div>
                        </div>
                    </div>
         
                </div>
            </div>
            </div>
            <div class="bestseller">
                <div class="ecome-heading style5v3 spc5v3">
                    <h1>Related products</h1>
                    <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
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
                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{ asset('assets/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                </div>
                                <div class="element-list element-list-left">
                                </div>
                                <div class="element-list element-list-middle">
                                    <p class="product-cate">Cell Phones & Accessories</p>
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
                                <a href="#"><img src="{{ asset('assets/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{ asset('assets/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{ asset('assets/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
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
                </div>
            </div>
          
            <div class="bestseller single-space">
                <div class="ecome-heading style5v3 spc5v3">
                    <h1>Similar Brand</h1>
                    <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
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
                                <a href="#"><img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{ asset('assets/img/product/samsung3.jpg') }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                </div>
                                <div class="element-list element-list-left">
                                </div>
                                <div class="element-list element-list-middle">
                                    <p class="product-cate">Cell Phones & Accessories</p>
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
                                <a href="#"><img src="{{ asset('assets/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{ asset('assets/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
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
                                <a href="#"><img src="{{ asset('assets/img/product/macbook2.jpg') }}" alt="" class="img-reponsive"></a>
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
@endsection