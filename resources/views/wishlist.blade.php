@extends('layouts.E-commerce')
@section('Content')
    
        <div class="container container-240">
            
            <div class="checkout wishlist">
                <ul class="breadcrumb v3">
                    <li><a href="#">Home</a></li>
                    <li class="active">Wishlist</li>
                </ul>

                <div class="shopping-cart v2 bd-7">
                    <div class="cmt-title text-center abs">
                        <h1 class="page-title v4">Wishlist</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table cart-table">
                            
                            <tbody>
                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>
                                    
                                    
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                    <td class="w-status">
                                        <p>In stock</p>
                                    </td>
                                    <td class="w-button">
                                        <a class="btn-addcart btn-gradient">Add to cart</a>
                                    </td>
                                </tr>

                                <tr class="item_cart">
                                    <td class="product-name flex align-center">
                                        <a href="#" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                        <div class="product-img">
                                            <img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="Futurelife">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" title="">Harman Kardon Onyx Studio </a>
                                        </div>
                                    </td>
                                    
                                    
                                    <td class="total-price">
                                        <p class="price">$1,215.00</p>
                                    </td>
                                    <td class="w-status">
                                        <p>In stock</p>
                                    </td>
                                    <td class="w-button">
                                        <a class="btn-addcart btn-gradient">Add to cart</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection