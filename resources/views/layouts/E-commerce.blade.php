<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>E-come | Multi-Purpose HTML Template for Electronics Store</title>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-dyDtnmxvDZaaTHx8AYirX7l7ZnWmSbHVsCO93aqmLvKAeESy1Be1Bo5DJ8vq5u4MbsLlwECQP1CcTGVF7BU+qQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="clearfix"></div>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown"><a href="{{ route('home') }}">Home</a></li>
                <li class="level1 active dropdown"><a href="{{ route('shop') }}">Shop</a></li>
                <li class="level1 active dropdown"><a href="{{ route('aboutus') }}">About us</a></li>
                <li class="level1 active dropdown"><a href="{{ route('contact') }}">Contact</a></li>
                <li class="level1 active dropdown"><a href="{{ route('faq') }}">FAQs</a></li>
                <li class="level1 active dropdown"><a href="{{ route('blogs') }}">Blogs</a></li>
            </ul>
        </div>
    </div>

    <div class="h3-bg">
        <div class="wrappage v2">


            <header id="header" class="header-v3 bg-w">

                <div class="header-center">
                    <div class="container container-240">
                        <div class="row flex">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                                <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt=""
                                        class="img-reponsive"></a>
                            </div>
                            <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                                <form method="get" class="searchform ajax-search" action="/search" role="search">
                                    <input type="hidden" name="type" value="product">
                                    <input type="text" onblur="if (this.value=='') this.value = this.defaultValue"
                                        onfocus="if (this.value==this.defaultValue) this.value = ''" name="q"
                                        class="form-control" placeholder="i’m shoping for...">
                                    <ul class="list-product-search hidden-xs hidden-sm">
                                        <li>
                                            <a class="flex align-center" href="">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/img/product/iphonex.jpg') }}"
                                                        alt="">
                                                </div>
                                                <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex align-center" href="">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/img/product/sound.jpg') }}"
                                                        alt="">
                                                </div>
                                                <h3 class="product-title">Smartphone 6S 64GB LTE</h3>
                                            </a>
                                        <li>
                                            <a class="flex align-center" href="">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/img/product/phone4.jpg') }}"
                                                        alt="">
                                                </div>
                                                <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex align-center" href="">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/img/product/phone5.jpg') }}"
                                                        alt="">
                                                </div>
                                                <h3 class="product-title">Smartphone 6S 64GB LTE </h3>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex align-center" href="">
                                                <div class="product-img">
                                                    <img src="{{ asset('assets/img/product/phone1.jpg') }}"
                                                        alt="">
                                                </div>
                                                <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0
                                                </h3>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="search-panel">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href='#'>All
                                            categories <span class="fa fa-caret-down"></span></a>
                                        <ul id="category" class="dropdown-menu dropdown-category">
                                            <li><a href="#">TV & Video</a></li>
                                            <li><a href="#">Home Audio & Theater</a></li>
                                            <li><a href="#">Camera, Photo & Video</a></li>
                                            <li><a href="#">Cell Phones & Accessories</a></li>
                                            <li><a href="#">Headphones</a></li>
                                            <li><a href="#">Car Electronics</a></li>
                                            <li><a href="#">Electronics Showcase</a></li>
                                        </ul>
                                    </div>
                                    <span class="input-group-btn">
                                        <button class="button_search" type="button"><i
                                                class="ion-ios-search-strong"></i></button>
                                    </span>
                                </form>

                            </div>
                            <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                                <div class="right-panel">
                                    <div class="header-sub-element hidden-xs hidden-sm">
                                        <div class="sub-left">
                                            <img src="{{ asset('assets/img/icon-call.png') }}" alt="">
                                        </div>
                                        <div class="sub-right">
                                            <span>Call Us Free</span>
                                            <div class="phone">(+123) 456 789 </div>
                                        </div>
                                    </div>
                                    <div class="header-sub-element row">

                                        @if (Route::has('login'))
                                            @auth

                                                <a class="hidden-xs hidden-sm" href="{{ route('profile.edit') }}"><img
                                                        src="{{ asset('assets/img/icon-user.png') }}" alt=""></a>
                                                <a href="{{ route('wishlist.index') }}"><img
                                                        src="{{ asset('assets/img/icon-heart.png') }}"
                                                        alt=""></a>
                                                <div class="cart">
                                                    <a href="{{ route('cart.view') }}"><img
                                                            src="{{ asset('assets/img/icon-cart.png') }}"
                                                            alt=""></a>
                                                    <span class="count cart-count">0</span>
                                                    </a>
                                                </div>
                                                </a>
                                            @else
                                            <a href="{{ route('login') }}"
                                            class="flex items-center gap-2 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            style="display: inline-flex; align-items: center; font-size: 2rem;">
                                            <i class="fas fa-sign-in-alt" style="font-size: 2rem;"></i>
                                            <span style="margin-left: 5px;">Log in</span>
                                         </a>
                                         
                                         @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                               class="flex items-center gap-2 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                               style="display: inline-flex; align-items: center; font-size: 2rem;">
                                               <i class="fas fa-user-plus" style="font-size: 2rem;"></i>
                                               <span style="margin-left: 5px;">Register</span>
                                            </a>
                                         @endif

                                            @endauth
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom hidden-xs hidden-sm">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-lg-3 widget-verticalmenu">
                                <div class="navbar-vertical">
                                    <button class="navbar-toggles navbar-drop js-vertical-menu"><span>All
                                            Departments</span></button>
                                </div>
                                <div class="vertical-wrapper">
                                    <ul class="vertical-group">
                                        <li class="vertical-item level1 mega-parent"><a href="#">New
                                                Arrivals</a></li>
                                        <li class="vertical-item level1 mega-parent"><a href="#">Top 100 Best
                                                Seller <span class="h-ribbon e-red mg-l10">Hot</span></a></li>
                                        <li class="vertical-item level1 vertical-drop"><a href="#">TV &
                                                Video</a>
                                            <div class="menu-level-1 dropdown-menu vertical-menu v2 tvbg pd2 style1">
                                                <ul class="level1">
                                                    <li class="level2 col-md-5">
                                                        <a href="#">TVs by Type</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#" title="">4K
                                                                    Ultra HD</a></li>
                                                            <li class="level3"><a href="#" title="">Smart
                                                                    TVs</a></li>
                                                            <li class="level3"><a href="#" title="">LED &
                                                                    LCD TVs & amplifiers</a></li>
                                                            <li class="level3"><a href="#" title="">OLED
                                                                    TVs</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">QLED/Quantum Dot TVs </a></li>
                                                        </ul>

                                                        <a href="#">Blu-ray & DVD Players</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#" title="">4K
                                                                    Blu-ray Players</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Streaming Blu-ray Players</a></li>
                                                            <li class="level3"><a href="#" title="">3D
                                                                    Blu-ray Players</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Portable Blu-ray Players</a></li>
                                                            <li class="level3"><a href="#" title="">DVD
                                                                    Recorders</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2 col-md-7">
                                                        <a href="# ">Home Audio</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#" title="">Home
                                                                    Theater Systems</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Soundbars</a></li>

                                                            <li class="level3"><a href="#"
                                                                    title="">Speakers</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Receivers & Amplifiers</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Premium Audio</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="vertical-item level1 vertical-drop"><a href="#">Home Audi &
                                                Theater</a>
                                            <div class="menu-level-1 dropdown-menu vertical-menu v2 homebg pd2 style1">
                                                <ul class="level1">
                                                    <li class="level2 col-md-4">
                                                        <a href="#">Home theater</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#" title="">Sound
                                                                    bars</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Speakers</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Receivers & amplifiers</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Equalizers</a></li>
                                                            <li class="level3"><a href="#" title="">Phono
                                                                    preamps </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2 col-md-4">
                                                        <a href="# ">Speakers</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">Bluetooth speakers</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Ceiling & in-wall speakers</a></li>

                                                            <li class="level3"><a href="#"
                                                                    title="">Digital music systems</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Outdoor</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Satellite speakers</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2 col-md-4">
                                                        <a href="#">Accessories</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">Receivers & amplifiers</a></li>
                                                            <li class="level3"><a href="#" title="">Cd &
                                                                    tape players</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Tuners</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Curntables</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Receivers & adapters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="vertical-item level1 vertical-drop"><a href="#">Camera, Photo
                                                & Video</a>
                                            <div class="menu-level-1 dropdown-menu vertical-menu">
                                                <ul class="vertical-menu1">
                                                    <li><a href="#">Car Audio</a></li>
                                                    <li><a href="#">Radar Detectors</a></li>
                                                    <li><a href="#">Car Safety & Security</a></li>
                                                    <li><a href="#">Car Video</a></li>
                                                    <li><a href="#">Two-Way Radios</a></li>
                                                    <li><a href="#">CB Radios & Scanners</a></li>
                                                    <li><a href="#">In-Dash Mounting Kits</a></li>
                                                    <li><a href="#">Installation Accessories.</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="vertical-item level1 vertical-drop"><a href="#">Cell Phones &
                                                Accessories</a>
                                            <div
                                                class="menu-level-1 dropdown-menu vertical-menu v2 phonebg pd2 style1">
                                                <ul class="level1">
                                                    <li class="level2 col-md-4">
                                                        <a href="#">Cell Phones</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">Samsung Galaxy S8</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">iPhone 7/7 Plus</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">iPhone 6</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Samsung Galaxy S7</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Unlocked Phones</a></li>
                                                        </ul>

                                                        <a href="#">Cases</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">4Armbands</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Armbands</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Cases</a></li>
                                                            <li class="level3"><a href="#" title="">Flip
                                                                    Cases</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Holsters & Clips</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2 col-md-8">
                                                        <a href="# ">Accessories</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">Batteries</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Bluetooth Headsets</a></li>

                                                            <li class="level3"><a href="#"
                                                                    title="">Bluetooth Speakers</a></li>
                                                            <li class="level3"><a href="#" title="">Car
                                                                    Accessories</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Chargers</a></li>
                                                        </ul>

                                                        <a href="# ">Connected Devices</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">Tablets</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Mobile Hotspots</a></li>

                                                            <li class="level3"><a href="#" title="">Smart
                                                                    Watches</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Wearable Technology</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="vertical-item level1 vertical-drop"><a
                                                href="#">Headphones</a>
                                            <div
                                                class="menu-level-1 dropdown-menu vertical-menu v2 headphonebg pd3 style1">
                                                <ul class="level1">

                                                    <li class="level2 col-md-6">
                                                        <a href="#">Headphones</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">In-Ear & Earbud</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">On-Ear</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Over-Ear</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Wireless</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Sports & Fitness</a></li>
                                                        </ul>


                                                    </li>
                                                    <li class="level2 col-md-6">
                                                        <a href="# ">Speaker System</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="#"
                                                                    title="">Complete Systems</a></li>
                                                            <li class="level3"><a href="#" title="">Sound
                                                                    Bars</a></li>

                                                            <li class="level3"><a href="#"
                                                                    title="">Surround Sound</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Receivers & Amplifiers</a></li>
                                                            <li class="level3"><a href="#"
                                                                    title="">Equalizers</a></li>
                                                        </ul>


                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="vertical-item level1 vertical-drop"><a href="#">Car
                                                Electronics</a>
                                            <div class="menu-level-1 dropdown-menu vertical-menu">
                                                <ul class="vertical-menu1">
                                                    <li><a href="#">Car Audio</a></li>
                                                    <li><a href="#">Radar Detectors</a></li>
                                                    <li><a href="#">Car Safety & Security</a></li>
                                                    <li><a href="#">Car Video</a></li>
                                                    <li><a href="#">Two-Way Radios</a></li>
                                                    <li><a href="#">CB Radios & Scanners</a></li>
                                                    <li><a href="#">In-Dash Mounting Kits</a></li>
                                                    <li><a href="#">Installation Accessories.</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="vertical-item level1 vertical-drop"><a href="#">Electronics
                                                Showcase</a>
                                            <div class="menu-level-1 dropdown-menu vertical-menu">
                                                <ul class="vertical-menu1">
                                                    <li><a href="#">Car Audio</a></li>
                                                    <li><a href="#">Radar Detectors</a></li>
                                                    <li><a href="#">Car Safety & Security</a></li>
                                                    <li><a href="#">Car Video</a></li>
                                                    <li><a href="#">Two-Way Radios</a></li>
                                                    <li><a href="#">CB Radios & Scanners</a></li>
                                                    <li><a href="#">In-Dash Mounting Kits</a></li>
                                                    <li><a href="#">Installation Accessories.</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="vertical-item level1 vertical-drop mega-parent"><a
                                                href="#">All categlories</a>
                                            <div class="menu-level-1 dropdown-menu vertical-menu v2 pd">
                                                <div class="row">
                                                    <div class="col-md-4 text-center cate-item">
                                                        <a href="#"><img src="img/megamenu/cate1.jpg"
                                                                alt="" class="img-reponsive"></a>
                                                        <h3><a href="#">Mirrorless Cameras</a></h3>
                                                    </div>
                                                    <div class="col-md-4 text-center cate-item">
                                                        <a href="#"><img src="img/megamenu/cate2.jpg"
                                                                alt="" class="img-reponsive"></a>
                                                        <h3><a href="#">Lenses</a></h3>
                                                    </div>
                                                    <div class="col-md-4 text-center cate-item">
                                                        <a href="#"><img src="img/megamenu/cate3.jpg"
                                                                alt="" class="img-reponsive"></a>
                                                        <h3><a href="#">Photography Drones</a></h3>
                                                    </div>
                                                    <div class="col-md-4 text-center cate-item">
                                                        <a href="#"><img src="img/megamenu/cate4.jpg"
                                                                alt="" class="img-reponsive"></a>
                                                        <h3><a href="#">Sports & Action Cameras</a></h3>
                                                    </div>
                                                    <div class="col-md-4 text-center cate-item">
                                                        <a href="#"><img src="img/megamenu/cate5.jpg"
                                                                alt="" class="img-reponsive"></a>
                                                        <h3><a href="#">Optics</a></h3>
                                                    </div>
                                                    <div class="col-md-4 text-center cate-item">
                                                        <a href="#"><img src="img/megamenu/cate6.jpg"
                                                                alt="" class="img-reponsive"></a>
                                                        <h3><a href="#">Accessories</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>







                            <div class="col-lg-9 widget-left">
                                <div class="flex lr">
                                    <nav class="main-menu flex align-center">
                                        <button type="button"
                                            class="icon-mobile e-icon-menu icon-pushmenu js-push-menu">
                                            <span class="navbar-toggler-bar"></span>
                                            <span class="navbar-toggler-bar"></span>
                                            <span class="navbar-toggler-bar"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="myNavbar">
                                            <ul class="nav navbar-nav js-menubar">
                                                <li class="level1 active hassub"><a
                                                        href="{{ route('home') }}">Home</a></li>
                                                <li class="level1 dropdown hassub"><a
                                                        href="{{ route('shop') }}">Shop<span
                                                            class="h-ribbon h-pos e-green">sale</span></a></li>
                                                <li class="level1 active hassub"><a href="{{ route('home') }}">About
                                                        Us</a></li>
                                                <li class="level1 active hassub"><a
                                                        href="{{ route('home') }}">Contact</a></li>
                                                <li class="level1 active hassub"><a
                                                        href="{{ route('home') }}">FAQs</a></li>
                                                <li class="level1 active hassub"><a
                                                        href="{{ route('home') }}">Blogs</a></li>


                                            </ul>
                                        </div>
                                    </nav>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>




            @yield('Content')




            <footer>
                <div class="f-top v2">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="footer-block footer-about">
                                    <div class="f-logo">
                                        <a href="#"><img src="{{ asset('assets/img/logo.png') }}"
                                                alt="" class="img-reponsive"></a>
                                    </div>
                                    <ul class="footer-block-content">
                                        <li class="address">
                                            <span>45 Grand Central Terminal New York,NY 1017 United State USA</span>
                                        </li>
                                        <li class="phone">
                                            <span>(+123) 456 789 - (+123) 666 888</span>
                                        </li>
                                        <li class="email">
                                            <span>Contact@yourcompany.com</span>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Quick menu</h3>
                                    <ul class="footer-block-content">
                                        <li><a href="#">TV & Video</a></li>
                                        <li><a href="#">Home Audio & Theater</a></li>
                                        <li><a href="#">Camera, Photo & Video</a></li>
                                        <li><a href="#">Cell Phones & Accessories</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Customer Service</h3>
                                    <ul class="footer-block-content">
                                        <li><a href="{{ route('track') }}">Track your Order</a></li>
                                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="footer-block">

                                    <div class="footer-block-newsletter">
                                        <h3 class="footer-block-title">Subscription</h3>
                                        <p>Register now to get updates on promotions and coupons.</p>
                                        <form class="form_newsletter" action="#" method="post">
                                            <input type="email" value=""
                                                placeholder="Enter your emaill adress" name="EMAIL" id="mail"
                                                class="newsletter-input form-control">
                                            <button id="subscribe" class="button_mini btn btn-gradient"
                                                type="submit">
                                                Subscribe
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>




        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>


    @yield('scripts')
</body>

</html>
