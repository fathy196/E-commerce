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
                @if ($wishlists->isEmpty())
                    <div class="empty-cart"
                        style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 50vh; text-align: center;">
                        <i class="fas fa-box-open" style="font-size: 100px; color: #ccc; margin-bottom: 20px;"></i>
                        <p style="font-size: 18px; color: #666;">Your Wishlist is empty. Start shopping now!</p>
                        <!-- Shop Button -->
                        <div class="slide-content " style="margin-top: 200px;">
                            <a href="{{ route('shop') }}" class="slide-btn e-yl-gradient">Shop now<i
                                    class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                @else
                    @foreach ($wishlists as $wishlist)
                        <div class="table-responsive">
                            <table class="table cart-table">

                                <tbody>
                                    <tr class="item_cart">
                                        <td class="product-name flex align-center">
                                            <!-- Delete Form -->
                                            <form action="{{ route('wishlist.remove', $wishlist->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-del"><i
                                                        class="ion-ios-close-empty"></i></button>
                                            </form>

                                            <div class="product-img">
                                                <img src="{{ asset('assets/img/product/sound2.jpg') }}" alt="Futurelife">
                                            </div>
                                            <div class="product-info">
                                                <a href="#" title="">{{ $wishlist->product->name }} </a>
                                            </div>
                                        </td>


                                        <td class="total-price">
                                            <p class="price">{{ $wishlist->product->price }}</p>
                                        </td>
                                        <td class="w-status">
                                            <p>In stock</p>
                                        </td>
                                        <td class="w-button">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $wishlist->product->id }}">
                                                <button type="submit" class="btn-addcart btn-gradient">Add to cart</button>
                                            </form>
                                        </td>
                                    </tr>
                    @endforeach
                @endif
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>


@endsection
